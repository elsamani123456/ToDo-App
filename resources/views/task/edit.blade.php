@extends('layouts.app')
@section('content')
<div class="container" style="margin: auto;width: 600px">
	<h3 class="text-center">Edit Task</h3>
	@if($errors->all())
		<div class="col-sm-12">
			<ul class="list-unstyled">
			@foreach($errors->all() as $error)
				<li class="alert alert-danger" style="padding: 9px">
					{{$error}}
				</li>
			@endforeach
			</ul>
		</div>
	@endif
	<form class="form-group" action="{{url('update', ['id' => $task->id])}}" method="post">
	{{ csrf_field() }}
	    <label class="col-sm-12">Enter Your Title :</label>
			<div class="col-sm-12">
				<input class="form-control" type="text" name="title" value="{{$task->title}}">
			</div>
		<label class="col-sm-12">Enter Your Description :</label>
		<div class="col-sm-12">
			<textarea class="form-control" name="description" rows="5" cols="5">
				{{$task->description}}
			</textarea>
		</div>
		<label class="col-sm-12">Enter Your Date :</label>
			<div class="col-sm-12">
				<input class="form-control" type="date" name="add_date" value="{{$task->add_date}}">
			</div>
		<br>
		<div class="col-sm-12">
			<input type="submit" class="btn btn-primary btn-sm" value="Send Data">
		</div>
	</form>
</div>
@endsection