<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
   /* function getData() {
        return User::all();
    }*/
    function  index()
    {
        $collection= Http::get("https://reqres.in/api/users?page=1");
        return view('users',['collection'=>$collection['data']]);
    }
    /* function  index()
        {
            return Http::get("https://reqres.in/api/users?page=1");

        }*/
}
