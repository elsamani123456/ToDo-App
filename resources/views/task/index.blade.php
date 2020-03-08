@extends('layouts.app')
@section('content')
<div class="container">
	<h3 class="text-center">Show All Task</h3>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>ID</th>
				<th>Title</th>
				<th width="50%">Description</th>
				<th>Add Date</th>
				<th>Control</th>
			</tr>
		</thead>
		@foreach($tasks as $task)
		<tbody>
			<tr>
				<td>{{$task->id}}</td>
				<td>{{$task->title}}</td>
				<td>{{$task->description}}</td>
				<td>{{$task->add_date}}</td>
				<td class="text-center">
					<a class="btn btn-success btn-sm" href="{{url('edit', ['id' => $task->id])}}"><i class="fa fa-edit"></i></a>
					<a class="btn btn-danger btn-sm" href="{{url('delete',['id' => $task->id])}}"><i class="fa fa-trash"></i></a>
				</td>
			</tr>
		</tbody>
		@endforeach
	</table>
	<div class="row">
		<div class="col-sm-12 text-center">
			{{$tasks->links()}}
		</div>
		<div class="col-sm-12">
			<a class="btn btn-primary btn-sm" href="{{url('task/create')}}">Add New Task <i class="fa fa-plus"></i></a>
		</div>
	</div>
</div>
@endsection