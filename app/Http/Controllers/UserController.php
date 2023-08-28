<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function userPage(){

        return view('user.user');
    }

    public function countUsers(Request $request){
        
        $name = $request->name;
        $countUsers = DB::table('users')->where('name',  $name)->get()->count();

        return view('user.count-name-users', [
            'name' => $name,
            'count' => $countUsers,
        ]);
        

    }
}
