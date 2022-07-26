@extends('layouts.kouka')

@section('title', 'Kouka')

@section('menu_title')
競走馬データ詳細画面

@endsection
@section('content')
   <table>
   <tr><th>Name</th><th>Data</th></tr>
       <tr>
           <td>{{$item->name}}</td>
           <td>{{$item->data}}</td>
       </tr>
   </table>
   <button type="button" onClick="history.back()">戻る</button>
@endsection

