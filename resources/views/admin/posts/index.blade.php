@extends('layouts.app')

@section('content')

	<section id="posts">
		<div class="container-fluid px-5 py-2">
			<div class="row row-cols-5">
				@forelse ($posts as $post)
					<div class="col mb-3">
						<div class="card">
							<img src="{{ $post->image_url}}" class="card-img-top" alt="Post image of {{ $post->author }}">
							<div class="card-body">
								<h5 class="card-title">{{ $post->title}}</h5>
								<h6 class="card-subtitle">{{ $post->author}}</h6>
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

