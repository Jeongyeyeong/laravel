<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class Memberscontroller extends Controller
{
    function show()
    {
        $data=Member::paginate(5);
        return view('list',['members'=>$data]);
    }
}
