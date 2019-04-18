@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Post</div>
                <form action="{{ route('post.store') }}" method="post">
                    <div class="card-body">
                        @csrf
                        <label>Post Content</label>
                        <input type="text" class="form-control" name="title" />
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection