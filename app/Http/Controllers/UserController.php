<?php

namespace App\Http\Controllers;

use App\Models\Log;
use App\Models\User;
use App\Models\UserRole;
use App\Models\UserType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;
use Exception;

class UserController extends Controller
{
    public const PAGE_NAME = 'Users';

    public function index(){
        return view('user.index', [
            'page_name' => self::PAGE_NAME
        ]);
    }

    public function datatables(){
        $data = User::all();
        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('Actions', function ($user){
                $html = sprintf(
                    '<a href="%s" class="btn btn-sm btn-clean btn-icon" title="Edit details">
								<i class="la la-edit"></i>
							</a>
							<a href="%s" class="btn btn-sm btn-clean btn-icon" title="Delete">
								<i class="la la-trash"></i>
							</a>', route('user_update', ['user' => $user]), route('user_delete', ['user' => $user]));

                return $html;
            })
            ->rawColumns(['Actions'])
            ->addColumn('user_role',function($user){
                return $user->user_role->name === null ? '' : $user->user_role->name;
            })
            ->addColumn('user_type',function($user){
                return $user->user_type->name === null ? '' : $user->user_type->name;
            })
            ->make(true);
    }

    public function detail(User $user){
        return response()->json([
            'data' => $user
        ], 200);
    }

    public function create(){
        $params = [
            'action' => self::PAGE_NAME.' '.Log::CREATE,
            'url' => route('user_save'),
            'method' => 'POST',
            'data' => null
        ];
        return view('user.form',[
            'page_name' => self::PAGE_NAME.' | Create',
            'params' => $params
        ]);
    }

    public function save(Request $request){
        $data = $request->all();
        $userRole = UserRole::where('name', $data['user_role'])->first();
        $userType = UserType::where('name', $data['user_type'])->first();

        try {
            user::create(array_merge($data, ['user_role_id' => $userRole->id, 'user_type_id' => $userType->id]));
            return redirect()->route('user_page');
        }catch (Exception $e){
            return redirect()->back()->withInput()->withErrors([
                'error' => $e->getMessage()
            ]);
        }
    }

    public function update(User $user){
        $params = [
            'action' => self::PAGE_NAME.' '.Log::UPDATE,
            'url' => route('user_store', ['user' => $user]),
            'method' => 'PUT',
            'data' => $user
        ];

        return view('user.form', [
            'params' => $params,
            'page_name' => self::PAGE_NAME.' | Update',
        ]);
    }

    public function store(Request $request, User $user){
        $data = $request->all();

        if($data['password'] === null){
            unset($data['password']);
        }

        try{
            $user->update($data);
            return redirect()->route('user_page')
                ->with('success','user updated successfully');
        }catch (Exception $e){
            return redirect()->back()->withInput()->withErrors([
                'error' => $e->getMessage()
            ]);
        }
    }

    public function delete(User $user){
        try{
            $user->delete();
            return redirect()->route('user_page')
                ->with('success','user deleted successfully');
        }catch (Exception $e){
            return redirect()->back()->withInput()->withErrors([
                'error' => $e->getMessage()
            ]);
        }
    }

    private function getDataParams(){
        $model = new User();
        return $model->getFillable();
    }
}
