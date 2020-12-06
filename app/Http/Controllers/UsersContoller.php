<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersContoller extends Controller
{
    /*function viewLoad()
    {

        $human = ['jg','jy','dy'];
        return view('users',['user'=>$human]);
    }*/

  /*   form validation 사용
   *   function  getData(Request  $req)
    {
        $req->validate([
            'username'=>'required | max:10',
            'userpassword'=>'required | min:5'
        ]);
       return $req->input();
    }*/

    function  index()
    {
        return DB::select("select *  from users");
    }

}
