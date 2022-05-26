@extends('layouts.app')

@section('content')

	<section id="posts">

		<div class="container-fluid px-5 py-2">
			<div class="row row-cols-5">
				<div class="col-12">
					<a href="{{route('admin.posts.create')}}" class="btn btn-outline-dark" role="button" aria-pressed="true">Add</a>

				</div>
				@forelse ($posts as $post)
					<div class="col mb-3 p-5">
						<div class="card">
							<img src="{{ $post->image_url}}" class="card-img-top" alt="Post image of {{ $post->author }}">
							<div class="card-body">
								
								<div class="card-controls d-flex mx-auto">
									<a href="{{ route('admin.posts.show', $post) }}" class="btn btn-outline-primary">
										<i class="fa-solid fa-eye"></i>
									</a>
									<a href="{{route('admin.posts.edit', $post)}}" class="btn btn-outline-success" role="button" aria-pressed="true">
										<i class="fa-solid fa-pencil"></i>
									</a>
									<form 
										action="{{route('admin.posts.destroy', $post)}}"
										method="post"
										class="delete-form"
										post-title="{{$post->title}}"
									>
										@csrf
										@method('DELETE')
										<button type="submit" class="btn btn-outline-danger">
											<i class="fa-solid fa-trash-can"></i>
										</button>
									</form>
								</div>

								<h5 class="card-title">{{ $post->title}}</h5>
								<h6 class="card-subtitle">Author: {{ $post->author}}</h6>
								<span class="badge" style="background-color: {{$post->categories[0]->color}}">{{$post->categories[0]->name }}</span>

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


@section('script')
	<script src="{{ asset('js/admin.js')}}"></script>
@endsection

