<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;
use DB;

class StoreController extends Controller
{
    function sese() {

        return view('storelist');
    }
    function list() {

        $data = DB::table('stores')
            ->leftjoin('restaurants','stores.restaurant_id','=','restaurants.id')
            ->select('stores.*','restaurants.name as restaurant_name')
            #->orderby('stores.name','asc')
            ->paginate(5);
        return view('storelist',["data"=>$data]);

    }
    function viewData($id)
    {
        $data=Store::find($id);
        return view('storeedit',['data'=>$data]);
    }
}
