@extends('layouts.kouka')

@section('title', 'Kouka')

@section('menu_title')
ユーザ情報詳細画面

@endsection
@section('content')
   <table>
   <tr><th>Name(Age)</th><th>Data</th></tr>
       <tr>
           <td>{{$item->name}}</td>
           <td>{{$item->data}}</td>
       </tr>
   </table>
@endsection

@section('footer')
copyright 2020 東京情報クリエイター工学院専門学校.
@endsection