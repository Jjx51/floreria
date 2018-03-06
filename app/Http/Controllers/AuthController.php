<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use Illuminate\Support\Facades\Crypt;

class AuthController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('isAdmin');
    }
	
    public function index(){    	
        $users=User::all();
        return view('auth.index',compact('users'));
    }

    public function create(){
    	return view('auth.create');
    }

    public function edit($id){
    	$user = User::findOrFail($id);
    	return view('auth.edit')->with('user',$user);
    }

    public function update(EditUserRequest $request){
    	if($request->input('id')==1){
            $rol='admin';
        }else{
            $rol='user';
        }
		DB::table('users')
            ->where('id',$request->input('id'))
            ->update([
                'name' => $request->input('name'),
                'username' => $request->input('username'),
                'password' => bcrypt($request->input('password')),
                'email' => $request->input('email'),
                'rol' => $rol,
                'updated_at' => date("Y-m-d H:i:s"),
        ]);
        return redirect()->route('usuarios.index');
    }

    public function delete(Request $request){
        $user = User::findOrFail($request->input('id'));
        $user->delete();
        return redirect()->route('usuarios.index');
    }
}
