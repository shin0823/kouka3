@extends('layouts.kouka')

@section('title', 'Kouka')

@section('menu_title')
競走馬データ更新画面
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
   <form action="/kouka/update" method="post">
   <table>
      @csrf
      <input type="hidden" name="id" value="{{$item->id}}">
      <tr><th>name: </th><td><input type="text" name="name"
         value="{{$item->name}}"></td></tr>
      <tr><th>data: </th><td><input type="text" name="data"
         value="{{$item->data}}"></td></tr>

      <tr><th></th><td><input type="submit"
         value="更新"></td></tr>
   </table>
   </form>
   <button type="button" onClick="history.back()">戻る</button>
@endsection

