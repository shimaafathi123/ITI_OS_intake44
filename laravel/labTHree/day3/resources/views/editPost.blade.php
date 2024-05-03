@extends("layouts.app")

@section("content")
<div class="container">
    <h1>Edit Post</h1>
    <form action="{{ route('post.update',$post->title_slug) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="form-group row">
            <label for="title_slug" class="col-md-2 col-form-label">Title Slug:</label>
            <div class="col-md-6">
                <input type="text" class="form-control" id="title_slug" name="title_slug" value="{{ $post->title_slug }}" disabled>
            </div>
        </div>

        <div class="form-group row">
            <label for="title" class="col-md-2 col-form-label">Title:</label>
            <div class="col-md-6">
                <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}">
                @error('title')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="body" class="col-md-2 col-form-label">Body:</label>
            <div class="col-md-6">
                <textarea class="form-control" id="body" name="body">{{ $post->body }}</textarea>
                @error('body')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="posted_by" class="col-md-2 col-form-label">Select User:</label>
            <div class="col-md-6">
                <select class="form-control" id="posted_by" name="posted_by">
                    @foreach($users as $user)
                        <option value="{{ $user->name }}" {{ $post->posted_by == $user->name ? 'selected' : '' }}>
                            {{ $user->name }}
                        </option>
                    @endforeach
                </select>
                @error('posted_by')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="image" class="col-md-2 col-form-label">Image:</label>
            <div class="col-md-6">
                <input type="file" id="image" name="image">
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-6 offset-md-2">
                <button type="submit" class="btn btn-info">Submit</button>
            </div>
        </div>
    </form>
</div>
@endsection
