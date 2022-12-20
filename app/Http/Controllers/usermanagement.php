<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class usermanagement extends Controller
{
    // 
    public function index(){  
        $usertable=User::all();
        return view('/usermanagement',compact('usertable'));
    }
}
