<?php

namespace App\Http\Controllers;

use App\user;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ono_dbController extends Controller
{
    public function index(Request $request){
        $items=user::all();
        return view('ono_db.index',['items'=>$items]);
    }
}
