@extends('master')
@section('title') Sample Blog Home
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card my-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="">
                                <h1>Hello...</h1>
                                <p>What is on your mind?</p>
                            </div>
                            <div class="">
                                <a href="{{ route('post.create') }}" class="btn btn-outline-primary">Create Post</a>
                            </div>
                        </div>
                    </div>
                </div>
                @if('status')
                    <div class="alert alert-success">{{ session('status') }}</div>
                @endif
                @foreach($posts as $post)
                    <div class="card mb-4">
                        <div class="card-body">
                            <h4 class="card-title fw-bold">{{ $post->title }}</h4>
                            <p class="card-text text-black-50">{{ Str::words($post->description,45) }}</p>
                        <div class="d-flex justify-content-between">
                            <p>{{ $post->created_at->format('j F Y | n : i A') }}</p>
                            <div class="">
                                <a href="{{ route('post.edit',$post->id) }}" class="btn btn-outline-info">Edit</a>
                                <form action="{{ route('post.destroy',$post->id) }}" method="post" class="d-inline-block">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-outline-danger">Delete</button>
                                </form>

                                <a href="{{ route('post.show',$post->id) }}" class="btn btn-outline-primary">See More</a>
                            </div>

                        </div>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
    </div>
@endsection
