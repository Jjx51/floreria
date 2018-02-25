<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use Illuminate\Support\Facades\Crypt;

class AuthController extends Controller
{
    public function index(){    	
        $users=User::all();
        return view('auth.index',compact('users'));
    }
}
