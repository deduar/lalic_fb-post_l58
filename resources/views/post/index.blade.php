@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">All Posts</div>
                @foreach ($posts as $post)
    				<div class="card-body">
    					<h5 class="card-title">{{ $post->name }}[{{ $post->email}}] {{ \Carbon\Carbon::parse($post->created_at)->format('d/m/Y H:i')}}</h5>
    					<p class="card-text">{{ $post->title }}</p>
    					<a href="#" class="btn btn-primary">Go somewhere</a>
    					<hr>
  					</div>
				@endforeach
            </div>
        </div>
    </div>
</div>
{{ $posts->links() }}
@endsection