@extends('layouts/main')

@section('title')
	{{ $project->project_title }}
@endsection

@section('content')

Project Title: {{ $project->project_title }}

Description: {{ $project->description }}

@foreach ($project->tasks as $task)
<div class="row mx-5 mb-3">
	<div class="col-sm">
		<div class="card">
			<div class="card-body">
				<h5 class="card-title">{{ $task->title }}</h5>
				<p class="card-text">{{ $task->notes }}</p>
				@if ($task->status == 'done')
				<a class="btn btn-success" href="#">Done</a>
				@if ($task->status == 'in progress')
				<a class="btn btn-danger" href="#">In Progress</a>
				@endif
				@if ($task->status == 'to-do')
				<a class="btn btn-warning" href="#">To-do</a>
				@endif
				@endif
			</div>
		</div>
	</div>
</div>
@endforeach
@endsection