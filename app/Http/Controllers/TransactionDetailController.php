<?php

namespace App\Http\Controllers;

use App\Http\Helper\RupiahFormatter;
use App\Models\Service;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Exception;

class TransactionDetailController extends Controller
{
    public function create(Transaction $transaction, Request $request)
    {
        $data = $request->only(['discount', 'service_id', 'officer_id']);

        $activeService = Service::find($data['service_id']);
        $data['price'] = $activeService->price;
        $data['user_id'] = $data['officer_id'];

        if(is_null($data['discount']) || $data['discount'] === 0){
            $data['discount'] = 0;
            $data['total'] = $data['price'];
        }else{
            $data['total'] = ($data['price'] - ($data['price']*($data['discount']/100)));
        }

        $data['transaction_id'] = $transaction->id;

        try{
            TransactionDetail::create($data);
            return redirect()->back();
        }catch (Exception $e){
            return redirect()->back();
        }
    }

    public function datatables($uuid){
        $transaction = Transaction::where('UUID', $uuid)->first();
        $data = TransactionDetail::where('transaction_id', $transaction->id)->get();
        return DataTables::of($data)
            ->addIndexColumn()
            ->removeColumn('service_id')
            ->removeColumn('transaction_id')
            ->removeColumn('user_id')
            ->addColumn('service_name',function($transactionDetail){
                return $transactionDetail->service->name;
            })
            ->addColumn('service_price',function($transactionDetail){
                return RupiahFormatter::format($transactionDetail->service->price);
            })
            ->editColumn('total',function($transactionDetail){
                return RupiahFormatter::format($transactionDetail->total);
            })
            ->editColumn('discount', function ($transactionDetail){
                return $transactionDetail->discount.'%';
            })
            ->addColumn('officer',function($transactionDetail){
                return $transactionDetail->officer->name;
            })
            ->addColumn('Actions', function ($transactionDetail){
                $html = sprintf(
                    '
							<a href="%s" class="btn btn-sm btn-clean btn-icon" title="Delete">
								<i class="la la-trash"></i>
							</a>', route('transaction_details_delete', ['transactionDetail' => $transactionDetail]));

                return $html;
            })
            ->rawColumns(['Actions'])
            ->make(true);
    }

    public function delete(TransactionDetail $transactionDetail){
        try{
            $transactionDetail->delete();
            return redirect()->back();
        }catch (Exception $e){
            $e->getMessage();
            return redirect()->back();
        }
    }
}
