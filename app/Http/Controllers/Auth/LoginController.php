<?php


namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function auth(Request $request){
        $data = $request->only(array_keys($this->getParams()));

        $validator = Validator::make($data, $this->getParams());

        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors());
        }

        $activeUser = User::where('username', $data['username'])->first();

        if($activeUser){
            if(Hash::check($data['password'], $activeUser->password)){
                Session::put('username', $activeUser->username);
                Session::put('user_role', $activeUser->user_role->name);
                Session::put('user_type', $activeUser->user_type->name);
                return redirect()->route('dashboard_page');
            }else{
                return redirect()->back()->withErrors(['error' => 'password is wrong']);
            }
        }else{
            return redirect()->back()->withErrors(['error' => 'user not found']);
        }
    }

    public function getParams(){
        return [
            'username' => 'required',
            'password' => 'required|min:6'
        ];
    }

}
