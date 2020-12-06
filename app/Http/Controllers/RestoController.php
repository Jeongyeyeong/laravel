<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;

class RestoController extends Controller
{
    function index() {

        return view('home');
    }
    function list(Request $req)
    {

        $data=Restaurant::simplePaginate(5);
        return view('restolist',["data"=>$data]);
    }
    function add(Request $req)
    {
        $resto = new Restaurant;
        $resto -> name= $req->name;
        $resto -> email = $req->email;
        $resto ->address = $req->address;
        $resto->save();
        $req->session()->flash('status','Resturant entered Successfully');
        return  redirect('list');
    }
    function  showData($id)
    {
        $data=Restaurant::find($id);
        return view('restoedit',['data'=>$data]);
    }
    function update(Request $req)
    {
        $resto=Restaurant::find($req->id);
        $resto->name=$req->name;
        $resto->email=$req->email;
        $resto->address=$req->address;
        $resto->save();
        return redirect('list');
    }
    function  delete($id)
    {
        $data=Restaurant::find($id);
        $data->delete();
        return redirect('list',);

    }
    function search(Request $req)
    {
        $search = $req->get('text1');
       $data = Restaurant::where('name','like','%'.$search.'%')->orderby('name',
       'asc')->simplepaginate(5);
        return view('restolist',["data"=>$data]);
    }
}
