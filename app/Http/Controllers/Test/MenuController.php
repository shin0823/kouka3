<?php

namespace App\Http\Controllers\Test;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// Facades\Authを追加
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{
    public function menu()
    {
        // ログインしていたら、test/menuを表示
        if (Auth::check()) {
            return view('test/menu');
        } else {
            // ログインしていなかったら、Login画面を表示
            return view('auth/login');
        }
    }
    public function search(Request $request )
{
    $action = $request->get('action', 'back');
    $input = $request->except('action');

    if($request->action === 'back') {
        return view('test/menu');
    }
}

public function update(Request $request )
{
    $action = $request->get('action', 'back');
    $input = $request->expect('action');

    if($request->action === 'back') {
        return view('test/menu');
    }
}

public function complete(Request $request )
{
    $action = $request->get('action', 'back');
    $input = $request->except('action');

    if($request->action === 'back') {
        return view('test/menu');
    }
}
}
