@extends('layouts.app')

@section('title', 'ono_db.index')
 

@section('content')
   <table>
   <tr><th>id</th><th>Name</th><th>Mail</th></tr>
   @foreach ($items as $item)
       <tr>
           <td>{{$item->id}}</td>
           <td>{{$item->name}}</td>
           <td>{{$item->mail}}</td>
       </tr>
   @endforeach
   </table>
   <br>
   <button type="button" onClick="history.back()">back</button>
@endsection

