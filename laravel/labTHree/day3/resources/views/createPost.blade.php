@extends("layouts.app")

@section("content")
<div class="container">
    <h1 class="mb-4">Create Post</h1>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                    @error('title')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="body">Body:</label>
                    <textarea class="form-control" id="body" name="body">{{ old('body') }}</textarea>
                    @error('body')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="posted_by">Posted By:</label>
                    <select class="form-control" id="posted_by" name="posted_by">
                        @foreach($users as $user)
                        <option value="{{ $user->name }}" {{ old('posted_by') == $user->name ? 'selected' : '' }}>{{ $user->name }}</option>
                        @endforeach
                    </select>
                    @error('posted_by')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="image">Image:</label>
                    <input type="file" class="form-control-file" id="image" name="image">
                    @error('image')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
