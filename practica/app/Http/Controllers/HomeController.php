<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class HomeController extends Controller
{
    //
    public function users(Request $request){
        $users = User::all();

        return response() -> json($users);
    }
    public function login(Request $request){
        
    }
}
