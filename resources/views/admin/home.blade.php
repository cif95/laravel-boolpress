@extends('layouts.app')

@section('content')

<section class="container">
	<div class="row justify-content-center">
		<div class="col-12 text-center mb-5">
			<h2>Welcome {{ Auth::user()['name'] }} </h2>
		</div>
		<div class="col-3 text-center">
			<a href="{{ route('admin.posts.index') }}" class="btn btn-primary mb-5">View All Posts</a>
		</div>
	</div>
</section>


@endsection