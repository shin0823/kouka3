<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;

class KoukaController extends Controller
{
    //一覧表を表示
    public function index(Request $request)
    {
        $items = Person::all();
        $param = ['input' => '','items' => $items];
        return view('kouka.index', $param);
    }
    //検索
    public function find(Request $request)
    {
        $item = Person::where('name',$request->input)->first();
        return view('kouka.show', ['item' => $item]);
    }
    //詳細画面表示
    public function show(Request $request)
    {
        $item = Person::where('id', $request->id)->first();
        return view('kouka.show', ['item' => $item]);
    }
    //新規登録画面表示
    public function add(Request $request)
    {
        return view('kouka.add');
    }
    //新規登録
    public function create(Request $request)
    {
        $this->validate($request, Person::$rules);
        $person = new Person;
        $form = $request->all();
        unset($form['_token']);
        $person->fill($form)->save();
        return redirect('/kouka');
    }
    //更新画面表示
    public function edit(Request $request)
    {
        $item = Person::find($request->id);
        return view('kouka.edit', ['item' => $item]);
    }
    //更新
    public function update(Request $request)
    {
        $this->validate($request, Person::$rules);
        $person = Person::find($request->id);
        $form = $request->all();
        unset($form['_token']);
        $person->fill($form)->save();
        return redirect('/kouka');
    }
    //削除画面表示
    public function del(Request $request)
    {
        $item = Person::find($request->id);
        return view('Kouka.del', ['item' => $item]);
    }
    //削除
    public function remove(Request $request)
    {
        Person::find($request->id)->delete();
        return redirect('/kouka');
    }
}
