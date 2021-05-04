<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Log;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Exception;

class ItemController extends Controller
{
    public const PAGE_NAME = 'Items';

    public function index(){
        return view('item.index', [
            'page_name' => self::PAGE_NAME
        ]);
    }

    public function datatables(){
        $data = Item::all();
        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('Actions', function ($item){
                $html = sprintf(
                    '<a href="%s" class="btn btn-sm btn-clean btn-icon" title="Edit details">
								<i class="la la-edit"></i>
							</a>
							<a href="%s" class="btn btn-sm btn-clean btn-icon" title="Delete">
								<i class="la la-trash"></i>
							</a>', route('item_update', ['item' => $item]), route('item_delete', ['item' => $item]));

                return $html;
            })
            ->rawColumns(['Actions'])
            ->make(true);
    }

    public function detail(Item $item){
        return response()->json([
            'data' => $item
        ], 200);
    }

    public function create(){
        $params = [
            'action' => self::PAGE_NAME.' '.Log::CREATE,
            'url' => route('item_save'),
            'method' => 'POST',
            'data' => null
        ];
        return view('item.form',[
            'page_name' => self::PAGE_NAME.' | Create',
            'params' => $params
        ]);
    }

    public function save(Request $request){
        $data = $request->only($this->getDataParams());

        try {
            item::create($data);
            return redirect()->route('item_page');
        }catch (Exception $e){
            return redirect()->back()->withInput()->withErrors([
                'error' => $e->getMessage()
            ]);
        }
    }

    public function update(Item $item){
        $params = [
            'action' => self::PAGE_NAME.' '.Log::UPDATE,
            'url' => route('item_store', ['item' => $item]),
            'method' => 'PUT',
            'data' => $item
        ];

        return view('item.form', [
            'params' => $params,
            'page_name' => self::PAGE_NAME.' | Update',
        ]);
    }

    public function store(Request $request, Item $item){
        $data = $request->only($this->getDataParams());

        try{
            $item->update($data);
            return redirect()->route('item_page')
                ->with('success','item updated successfully');
        }catch (Exception $e){
            return redirect()->back()->withInput()->withErrors([
                'error' => $e->getMessage()
            ]);
        }
    }

    public function delete(Item $item){
        try{
            $item->delete();
            return redirect()->route('item_page')
                ->with('success','item deleted successfully');
        }catch (Exception $e){
            return redirect()->back()->withInput()->withErrors([
                'error' => $e->getMessage()
            ]);
        }
    }

    private function getDataParams(){
        $model = new Item();
        return $model->getFillable();
    }
}
