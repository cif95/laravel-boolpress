@extends('layouts.app')

@section('title', 'Add Post')

@section('content')

<section class="container-fluid p-5" id="add-form">

	<div class="row">
		<div class="col-12 mb-3">
			<a href="{{ route('admin.posts.index') }}" class="btn btn-secondary" tabindex="-1" role="button" aria-disabled="true">Back</a>
		</div>
	</div>


    <form class="row row-cols-4 g-3 flex-column align-items-center" action="{{route("admin.posts.update", $post)}}" method="POST" enctype="multipart/form-data">
        @method('PUT')  
			@csrf
        <div class="col">
            <h2>
                Update post
            </h2>
            @if ( $errors->any() )
            <ul class="alert alert-danger">
                @foreach ( $errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            @endif
        </div>
        <div class="col">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{$post->title}}">
			</div>
        <div class="col py-2">
            <label for="description">Description</label>
            <textarea type="text" name="description" id="description" class="form-control">{{$post->description}}</textarea>
        </div>
        <div class="col">
            <label for="image">Image file</label>
            <input type="file" name="image" id="image" class="form-control">
        </div>

        <div class="col py-2">
            @foreach ($categories as $category)
            <div class="form-check">
                <input 
                class="form-check-input"
                type="checkbox"
                value="{{ $category->id }}" 
                name="category[]"
                {{ $post->categories->contains($category) ? 'checked' : ''}} 
                >
                <label class="form-check-label" for="flexCheckDefault">
                    <span class="badge rounded-pill mb-3" style="background-color: {{$category->color}}">{{$category->name}}</span>
                </label>
            </div>
            @endforeach
        </div> 

        <div class="col text-center">
            <button type="submit" class="btn btn-primary">Send</button>
        </div>  
    </form>

</section>

@endsection