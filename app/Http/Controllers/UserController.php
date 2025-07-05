<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    function users(){
    $user= DB::select('select * from users');
    return view('users',['userinfo'=>$user]);
    }
}
