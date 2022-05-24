@extends('layouts.app')

@section('content')

	<section id="posts">
		<a href="{{route('admin.posts.create')}}" class="btn btn-primary" role="button" aria-pressed="true">Add</a>

		<div class="container-fluid px-5 py-2">
			<div class="row row-cols-5">
				@forelse ($posts as $post)
					<div class="col mb-3">
						<div class="card">
							<img src="{{ $post->image_url}}" class="card-img-top" alt="Post image of {{ $post->author }}">
							<div class="card-body">

								<span class="badge" style="background-color: {{$post->categories[0]->color}}">{{$post->categories[0]->name }}</span>
								<a href="{{route('admin.posts.edit', $post)}}" class="btn btn-primary" role="button" aria-pressed="true">Edit</a>

								<form 
								action="{{route('admin.posts.destroy', $post)}}"
								method="post">
									@csrf
									@method('DELETE')
									<button type="submit" class="btn btn-outline-danger">Delete</button>
								</form>
								
								<h5 class="card-title">{{ $post->title}}</h5>
								<h6 class="card-subtitle">Author: {{ $post->author}}</h6>
								<a href="{{ route('admin.posts.show', $post) }}" class="btn btn-primary">More info</a>
							</div>
						</div>
					</div>
				@empty
					<div class="col">
						<h5>No Posts available</h5>
					</div>
				@endforelse 

			</div>
		</div>
	</section>

@endsection

