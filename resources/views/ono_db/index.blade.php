@extends('layouts.app')

@section('title', 'ono_db.index')
 

@section('content')
   <table>
    <tr><th>Id</th><th>Name</th><th>Email</th></tr>
    @foreach ($items as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->email}}</td>
        </tr>
   @endforeach
   </table>
   <br>
   <button type="button" onClick="history.back()">back</button>
@endsection

