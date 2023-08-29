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

    public function topNameUsers(){

        $results = DB::table('users')
                ->select(DB::raw('name, COUNT(*) as total'))
                ->groupBy('name')
                ->orderBy('total', 'desc')
                ->take(10)
                ->get();

        return view('user.top-count-name', [
            'users' => $results,
        ]);
    }

    public function averageAgeUsers(){

        $result = DB::table('users')->select(DB::raw('avg(age) as total'))->get();
        

        return view('user.average-age-users', [
            'age' => $result,
        ]);
    }
}
