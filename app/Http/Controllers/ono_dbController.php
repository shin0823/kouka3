<?php

namespace App\Http\Controllers;

use App\aa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ono_dbController extends Controller
{
    //アカウント一覧の表示
    public function index(Request $request){
        $items=aa::all();
        return view('kouka.index',['items'=>$items]);
    }
}
