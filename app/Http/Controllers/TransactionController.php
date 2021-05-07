<?php

namespace App\Http\Controllers;

use App\Http\Helper\RupiahFormatter;
use App\Http\Helper\UUIDGenerator;
use App\Models\Service;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Yajra\DataTables\DataTables;
use Exception;

class TransactionController extends Controller
{
    public const PAGE_NAME = 'Transactions';

    public function index(){
        $params = [
            'UUID' => UUIDGenerator::generate(),
            'url_back' => route('dashboard_page')
        ];
        return view('transaction.index',[
            'page_name' => self::PAGE_NAME,
            'params' => $params
        ]);
    }

    public function datatables(){
            $data = Transaction::whereIn('status', [Transaction::DRAFT, Transaction::PAID])->whereDate('created_at', Carbon::today())->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->editColumn('UUID', function ($transaction){
                    return 'FIDELIA-'.$transaction->UUID;
                })
                ->editColumn('total', function ($transaction){
                    return RupiahFormatter::format($transaction->total);
                })
                ->editColumn('created_at', function($transaction){
                    return date("d-m-Y H:i", strtotime($transaction->created_at));
                })
                ->addColumn('Actions', function ($transaction){
                    if($transaction->status === 'draft')
                    {
                        $html = sprintf(
                            '<a href="%s" class="btn btn-sm btn-clean btn-icon" title="Edit details">
								<i class="la la-edit"></i>
							</a><a href="#" class="btn btn-sm btn-clean btn-icon" title="Print Receipt">
								<i class="la la-print"></i>
							</a>', route('service_update', ['service' => $transaction]));
                    }else{
                        $html = '<a href="#" class="btn btn-sm btn-clean btn-icon" title="Print Receipt">
								<i class="la la-print"></i>
							</a>';
                    }
                    return $html;
                })
                ->rawColumns(['Actions'])
                ->make(true);
    }

    public function form($uuid){

        $check = Transaction::where('UUID', $uuid)->first();
        if(!$check){
            $transaction = Transaction::create([
                'UUID' => $uuid,
                'status' => 'new'
            ]);
        }else{
            $transaction = $check;
        }

        $params = [
            'url' => route('transaction_details_create', ['transaction' => $transaction]),
            'method' => 'POST',
            'transaction' => $transaction,
            'services' => Service::all(),
            'officers' => User::where('user_type_id', 1)->where('user_role_id', 3)->get(),
            'members' => User::where('user_type_id', 2)->where('user_role_id', 3)->get(),
            'url_back' => route('transaction_page'),
            'information' => [
                'url' => route('transaction_store', ['transaction' => $transaction]),
                'method' => 'PUT'
            ]
        ];

        return view('transaction.form', [
            'page_name' => self::PAGE_NAME,
            'params' => $params
        ]);
    }

    public function store( Request $request, Transaction $transaction){
        $data = $request->all();
        $data['status'] = $request->has('submit') ? Transaction::PAID : Transaction::DRAFT;
        try{
            $transaction->user_id = $data['member_id'];
            $transaction->discount = $data['discount_info'];
            $transaction->total = $data['total'];
            $transaction->status = $data['status'];
            $transaction->customer_name = $data['customer_name'];
            $transaction->save();
            return redirect()->route('transaction_page');
        }catch (Exception $e){
            $e->getMessage();
            return redirect()->route('transaction_page');
        }
    }

    public function delete(Transaction $transaction){
        try{
            $transaction->delete();
            return redirect()->route('transaction_page');
        }catch (Exception $e){
            $e->getMessage();
            return redirect()->route('transaction_page');
        }
    }
}
