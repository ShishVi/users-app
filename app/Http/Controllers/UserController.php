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

        $request->validate([

            'name' => 'required'
        ]);
        
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

    public function numberUsersAge(Request $request){

        $request->validate([
            'age_min' => 'required',
            'age_max' => 'required',
        ]);

        $age_min = $request->age_min;
        $age_max = $request->age_max;

        if($age_min > $age_max){

            return back();
        }

        $result = DB::table('users')->where('age', '<=', $age_max)->where('age', '>=', $age_min)->get()->count();

        return view('user.number-users-age', [
            'age_min' => $age_min,
            'age_max' => $age_max,
            'count' => $result,
        ]);

    }
}
