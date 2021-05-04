<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Log;
use App\Models\Stock;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Exception;

class StockController extends Controller
{
    public const PAGE_NAME = 'Stocks';

    public function index(){
        return view('stock.index', [
            'page_name' => self::PAGE_NAME
        ]);
    }

    public function datatables(){
        $data = Stock::all();
        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('Actions', function ($stock){
                $html = sprintf(
                    '<a href="%s" class="btn btn-sm btn-clean btn-icon" title="Edit details">
								<i class="la la-edit"></i>
							</a>
							<a href="%s" class="btn btn-sm btn-clean btn-icon" title="Delete">
								<i class="la la-trash"></i>
							</a>', route('stock_update', ['stock' => $stock]), route('stock_delete', ['stock' => $stock]));

                return $html;
            })
            ->rawColumns(['Actions'])
            ->addColumn('item_name',function($stock){
                return $stock->item->name === null ? '' : $stock->item->name;
            })
            ->make(true);
    }

    public function detail(Stock $stock){
        return response()->json([
            'data' => $stock
        ], 200);
    }

    public function create(){
        $params = [
            'action' => self::PAGE_NAME.' '.Log::CREATE,
            'url' => route('stock_save'),
            'method' => 'POST',
            'data' => Item::all()
        ];
        return view('stock.form',[
            'page_name' => self::PAGE_NAME.' | Create',
            'params' => $params
        ]);
    }

    public function save(Request $request){
        $data = $request->only($this->getDataParams());
        try {
            stock::create($data);
            return redirect()->route('stock_page');
        }catch (Exception $e){
            dd($e->getMessage());
            return redirect()->back()->withInput()->withErrors([
                'error' => $e->getMessage()
            ]);
        }
    }

    public function update(Stock $stock){
        $params = [
            'action' => self::PAGE_NAME.' '.Log::UPDATE,
            'url' => route('stock_store', ['stock' => $stock]),
            'method' => 'PUT',
            'data' => $stock
        ];

        return view('stock.form', [
            'params' => $params,
            'page_name' => self::PAGE_NAME.' | Update',
        ]);
    }

    public function store(Request $request, Stock $stock){
        $data = $request->only($this->getDataParams());

        try{
            $stock->update($data);
            return redirect()->route('stock_page')
                ->with('success','stock updated successfully');
        }catch (Exception $e){
            return redirect()->back()->withInput()->withErrors([
                'error' => $e->getMessage()
            ]);
        }
    }

    public function delete(Stock $stock){
        try{
            $stock->delete();
            return redirect()->route('stock_page')
                ->with('success','stock deleted successfully');
        }catch (Exception $e){
            return redirect()->back()->withInput()->withErrors([
                'error' => $e->getMessage()
            ]);
        }
    }

    private function getDataParams(){
        $model = new Stock();
        return $model->getFillable();
    }
}
