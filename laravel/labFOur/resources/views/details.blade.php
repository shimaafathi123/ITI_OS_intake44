@extends("layouts.app")

@section("content")
<div class="container">
    <h1>Post Details</h1>
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-4">
                <img src="{{ asset('images/'.$post->image) }}" class="card-img-top" alt="Post Image">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">Slug: {{ $post->title_slug }}</p>
                    <p class="card-text">Post Body: {{ $post->body }}</p>
                    <a href="{{ url()->previous() }}" class="btn btn-primary">Back to all Posts</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="comments-section">
                <h2>Comments</h2>
                @if ($post->comments->count() > 0)
                    <ul class="list-group">
                        @foreach ($post->comments as $comment)
                            <li class="list-group-item">{{ $comment->body }}</li>
                        @endforeach
                    </ul>
                @else
                    <p>No comments available.</p>
                @endif
                <form action="{{ route('comment.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="post_id" value="{{ $post->id }}">
                    <textarea class="form-control mb-2" name="content" placeholder="Enter your comment"></textarea>
                    <button type="submit" class="btn btn-success">Submit Comment</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
