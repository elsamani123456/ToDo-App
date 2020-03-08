@extends('layouts.app')
@section('content')
<div class="container">
	<h3 class="text-center">Trashed All Task</h3>
	<form method="post" action="{{url('trashed')}}">
	{{csrf_field()}}
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
		@foreach($trashed as $trash)
		<tbody>
			<tr>
				<td>{{$trash->id}}</td>
				<td>{{$trash->title}}</td>
				<td>{{$trash->description}}</td>
				<td>{{$trash->add_date}}</td>
				<td class="text-center">
					<a class="btn btn-danger btn-sm" href="{{url('forcedelete',['id' => $trash->id])}}" title="Force Delete"><i class="fa fa-trash"></i></a>
					<a class="btn btn-info btn-sm" href="{{url('restore',['id' => $trash->id])}}" title="Restore"><i class="fa fa-vimeo"></i></a>
				</td>
			</tr>
		</tbody>
		@endforeach
	</table>
	</form>
</div>
@endsection