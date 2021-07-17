@extends('layout')


@section('content')

<div class="col-sm-6"> 
    <form method="post" action="">
        @csrf
    <div class="mb-3">
        <label>Title</label>
        <input type="text" name="title" class="form-control" placeholder="Enter the name here...">
    </div>
    <div class="mb-3">
        <label>Description</label>
        <input type="text" name="description" width="100" height="150" class="form-control" placeholder="Enter the email here..." >
    </div>
    <div class="mb-3">
        <label>Begin at</label>
        <input type="datetime-local" name="begin_at" class="form-control"  placeholder="Enter the adress here...">
    </div>
    <div class="mb-3">
        <label>End at</label>
        <input type="datetime-local" name="end_at" class="form-control"  placeholder="Enter the adress here...">
    </div>
   
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@stop

