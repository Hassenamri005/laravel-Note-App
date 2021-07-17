@extends('layout')


@section('content')
<h1>Restaurant List page is here...</h1>
@if(Session::get('status'))
<div class="alert alert-success" role="alert">
  {{Session::get('status')}}
</div>
@endif
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Begins at</th>
      <th scope="col">Ends at</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data as $item)
        <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->title}}</td>
        <td>{{$item->description}}</td>
        <td>{{$item->begin_at}}</td>
        <td>{{$item->end_at}}</td>
        <td>
            <a href="/delete/{{$item->id}}">Delete</a>
            <a href="/edit/{{$item->id}}">Edit</a>
        </td>
        </tr>
    @endforeach
  </tbody>
</table>



@stop

