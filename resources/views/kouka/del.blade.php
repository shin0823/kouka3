@extends('layouts.kouka')

@section('title', 'Kouka')

@section('menu_title')
競走馬データ削除画面
@endsection

@section('content')
   <form action="/kouka/remove" method="post">
   <table>
      @csrf
      <input type="hidden" name="id" value="{{$item->id}}">
      <tr><th>name: </th><td>{{$item->name}}</td></tr>
      <tr><th>data: </th><td>{{$item->data}}</td></tr>
      <tr><th></th><td><input type="submit" value="削除"></td></tr>
   </table>
   </form>
   <button type="button" onClick="history.back()">戻る</button>
@endsection

