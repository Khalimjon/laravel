
@extends('layouts.main')

@section('title')
    Blogs
@endsection

@section('content')
   <div class="container">
    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        <div class="mb3" d-flex>
        <label for="text" class="form-label">Title</label>
        <input type="text" class="form-control" id="post_title_input" placeholder="Title" name="title" value="{{old('title')}}">
        </div>
        <div class="mb3" d-flex>
            <label for="text" class="form-label">Short content</label>
            <input type="text" class="form-control" id="post_shor_content_input" placeholder="short content" name="short_content" value="{{old('short_content')}}">
        </div>
        <div class="mb3" d-flex>
            <label for="text" class="form-label">Content</label>
            <input type="text" class="form-control" id="post_content_input" placeholder="Main content" name="content" value="{{old('content')}}">
        </div>
        <div class="mb3" d-flex>
            <label for="text" class="form-label">photo</label>
            <input type="text" class="form-control" id="post_photo_input" placeholder="photo" name="photo" value="{{old('photo')}}">
        </div>
            <button type="submit" class="btn btn-primary">Submit</button>
    </form>
   </div>
@endsection
