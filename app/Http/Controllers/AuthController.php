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
}
