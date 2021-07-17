@extends('layout')


@section('content')

<div class="col-sm-6"> 
    <h1>Edit Note :</h1>
    <form method="get" action="">
        @csrf
    <div class="mb-3">
        <label>Title</label>
        <input type="text" value="{{ $data->title }}" name="title" class="form-control" placeholder="Enter the name here...">
    </div>
    <div class="mb-3">
        <label>Description</label>
        <input type="text" width="100" height="150" value="{{ $data->description }}" name="description" class="form-control" placeholder="Enter the email here..." >
    </div>
    <div class="mb-3">
        <label>Begin at</label>
        <input type="datetime-local" value="{{ $data->begin_at }}" name="begin_at" class="form-control"  placeholder="Enter the adress here...">
    </div>
    <div class="mb-3">
        <label>End at</label>
        <input type="datetime-local" value="{{ $data->end_at }}" name="end_at" class="form-control"  placeholder="Enter the adress here...">
    </div>
   
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@stop

