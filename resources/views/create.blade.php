@extends('master')
@section('title') Create Post
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card p-3">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <div class="">
                                <h1 class="mb-0">Create New Post</h1>
                            </div>
                            <div class=" ">
                                <a class="btn btn-outline-primary" href="{{ route('post.index') }}">Home</a>
                            </div>
                        </div>
                    </div>
                    <form action="{{ route('post.store') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Post Title</label>
                            <input type="text" class="form-control form-control-lg" name="title" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Description</label>
                            <textarea type="text" rows="10" class="form-control form-control-lg" name="description" required></textarea>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-primary">Add Post</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
