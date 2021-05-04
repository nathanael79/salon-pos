<?php

namespace App\Http\Controllers;

use App\Http\Helper\RupiahFormatter;
use App\Models\Log;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;
use Exception;

class ServiceController extends Controller
{
    public const PAGE_NAME = 'Service';

    public function index(){
        return view('service.index', [
            'page_name' => self::PAGE_NAME
        ]);
    }

    public function datatables(){
        $data = Service::all();
        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('Actions', function ($service){
                $html = sprintf(
                    '<a href="%s" class="btn btn-sm btn-clean btn-icon" title="Edit details">
								<i class="la la-edit"></i>
							</a>
							<a href="%s" class="btn btn-sm btn-clean btn-icon" title="Delete">
								<i class="la la-trash"></i>
							</a>', route('service_update', ['service' => $service]), route('service_delete', ['service' => $service]));

                return $html;
            })
            ->rawColumns(['Actions'])
            ->editColumn('price',function($price){
                return RupiahFormatter::format($price->price);
            })
            ->make(true);
    }

    public function detail(Service $service){
        return response()->json([
            'data' => $service
        ], 200);
    }

    public function create(){
        $params = [
            'action' => self::PAGE_NAME.' '.Log::CREATE,
            'url' => route('service_save'),
            'method' => 'POST',
            'data' => null
        ];
        return view('service.form',[
            'page_name' => self::PAGE_NAME.' | Create',
            'params' => $params
        ]);
    }

    public function save(Request $request){
        $data = $request->only($this->getDataParams());

        $validator = Validator::make($data, $this->getDataParams());

        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors());
        }else{
            try {
                Service::create($data);
                return redirect()->route('service_page');
            }catch (Exception $e){
                return redirect()->back()->withInput()->withErrors([
                    'error' => $e->getMessage()
                ]);
            }
        }
    }

    public function update(Service $service){
        $params = [
            'action' => self::PAGE_NAME.' '.Log::UPDATE,
            'url' => route('service_store', ['service' => $service]),
            'method' => 'PUT',
            'data' => $service
        ];

        return view('service.form', [
            'params' => $params,
            'page_name' => self::PAGE_NAME.' | Update',
        ]);
    }

    public function store(Request $request, Service $service){
        $data = $request->only($this->getDataParams());

        try{
            $service->update($data);
            return redirect()->route('service_page')
                ->with('success','Service updated successfully');
        }catch (Exception $e){
            return redirect()->back()->withInput()->withErrors([
                'error' => $e->getMessage()
            ]);
        }
    }

    public function delete(Service $service){
        try{
            $service->delete();
            return redirect()->route('service_page')
                ->with('success','Service deleted successfully');
        }catch (Exception $e){
            return redirect()->back()->withInput()->withErrors([
                'error' => $e->getMessage()
            ]);
        }
    }

    private function getDataParams(){
        $model = new Service();
        return $model->getFillable();
    }
}
