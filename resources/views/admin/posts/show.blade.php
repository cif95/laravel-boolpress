@extends('layouts.app')

@section('content')

	<section id="posts">
		<div class="container-fluid px-5 py-2">
			<div class="row justify-content-center">
				<div class="col-12">
					<a href="{{ route('admin.posts.index') }}" class="btn btn-primary mb-5">All Posts</a>
				</div>
				<div class="col-3">
					<div class="card">
						<img
							src="{{ str_starts_with($post->image_url, 'http') ? $post->image_url : asset('storage') . '/' . $post->image_url}}"
							class="card-img-top"
							alt="Post image of {{ $post->author }}"
						>
						<div class="card-body">
							<h5 class="card-title">{{ $post->title }}</h5>
							<h6 class="card-subtitle">{{ $post->author }}</h6>
							<p class="card-text">{{ $post->description }}</p>
							<p class="card-text">{{ $post->created_at }}</p>
							@foreach ($post->categories as $category)
								<span class="badge" style="background-color: {{$category->color}}">{{ $category->name }}</span>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection