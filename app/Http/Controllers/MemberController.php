<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;


class MemberController extends Controller
{


    #생성 하는 함수
    function addDate(Request $req)
    {
        $member = new Member;
        $member->name=$req->name;
        $member->email=$req->email;
        $member->address=$req->name;
        $member->save();
        return redirect('list',);
    }

    function list()
    {
        $data=Member::paginate(5);
        # $data=Member::all();

        return view('list',['members'=>$data]);
    }

    function  delete($id)
    {
        $data=Member::find($id);
        $data->delete();
        return redirect('list',);
    }
    function  showData($id)
    {
        $data=Member::find($id);
        return view('edit',['data'=>$data]);
    }
    function  update(Request $req)
    {
        $data=Member::find($req->id);
        $data->name=$req->name;
        $data->email=$req->email;
        $data->address=$req->address;
        $data->save();
        return redirect('list');
    }
    function  index()
    {
        return Member::find(1)->getCompany;
    }
}
