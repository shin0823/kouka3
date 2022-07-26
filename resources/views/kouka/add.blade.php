@extends('layouts.kouka')

@section('title', 'Kouka')

@section('menu_title')
競走馬データ新規登録画面
@endsection

@section('content')
@if (count($errors) > 0)
<div>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
   <form action="/kouka/create" method="post">
   <table>
      @csrf
      <tr><th>name: </th><td><input type="text" name="name" value="{{old('name')}}"></td></tr>
    <tr><th>data: </th><td><input type="text" name="data" value="{{old('data')}}"></td></tr>
    <tr><th></th><td><input type="submit" value="新規登録"></td></tr>
   </table>
   </form>
   <button type="button" onClick="history.back()">戻る</button>
@endsection

