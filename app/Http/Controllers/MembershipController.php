<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MembershipController extends Controller
{
    public function index() {
        $memberships = DB::select('select * from memberships');
        return view('pages/partnership', ['memberships'=>$memberships]);
    }
}
