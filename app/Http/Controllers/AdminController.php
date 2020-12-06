<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Company;
use App\Models\Admin;

class AdminController extends Controller
{
    function holy()
    {
        #return Company::all();
        return Admin::all();

    }
}
