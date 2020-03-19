<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    //
    public function list(){
        $query = DB::table('users')
                        ->join('roles','users.id','=','roles.id')
                        ->get();
        return view('app.Users.userslist.users',['query'=>$query]);
    }

    public function userscreate(){
        return view('app.Users.userslist.userscreate');
    }

    public function settingusers(){
        return view('app.Users.settingusers.settingusers');
    }
    public function showTable(){
        $user = DB::table('users')
        ->join('roles','users.id','=','roles.id')
        ->get();
        return response()->json($user);
}
}
