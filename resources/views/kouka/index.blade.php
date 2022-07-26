@extends('layouts.Kouka')

@section('title', 'Kouka')

@section('menu_title')
競走馬データ一覧画面
@endsection

@section('content')
    <form action="/kouka/find" method="post">
    @csrf
    <input type="text" name="input" value="{{$input}}">
    <input type="submit" value="検索">
    </form>
   <a href="/kouka/add">新規登録</a>
   <table>
   <tr><th>Name</th><th>Data</th><th>Select</th><th>Update</th><th>Delete</th></tr>
   @foreach ($items as $item)
       <tr>
           <td>{{$item->name}}</td>
           <td>{{$item->data}}</td>
           <td><a href="/kouka/show?id={{$item->id}}">詳細</a></td>
           <td><a href="/kouka/edit?id={{$item->id}}">更新</a></td>
           <td><a href="/kouka/del?id={{$item->id}}">削除</a></td>
       </tr>
   @endforeach
   </table>
   <button type="button" onClick="history.back()">戻る</button>
   <form action="{{ route('logout') }}" method="post">
    @csrf
    <input type="submit" value="ログアウト">
  </form>
@endsection



