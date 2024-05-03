@extends("layouts.app")

@section("content")
    <div class="container">
        <h1>All Posts</h1>
        <div style="position: relative">
            <a href="{{ route('post.create') }}" class="btn btn-success" style="position: absolute; right: 0;">Add</a>
            <form action="{{ route('post.restore') }}" method="POST">
                @csrf
                @method('PUT')
                <button type="submit" class="btn btn-success mt-3">Restore Soft Deleted Posts</button>
            </form>
        </div>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Created At</th>
                    <th>Title</th>
                    <th>Title Slug</th>
                    <th>Body</th>
                    <th>Posted By</th>
                    <th>Show</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td>{{ $post['id'] }}</td>
                        <td>{{ $post->created_at->toFormattedDateString() }}</td>
                        <td>{{ $post['title'] }}</td>
                        <td>{{ $post['title_slug'] }}</td>
                        <td>{{ $post['body'] }}</td>
                        <td>{{ $post['posted_by'] }}</td>
                        <td>
                            <a href="{{ route('post.show', $post->title_slug) }}" class="btn btn-info">Show</a>
                        </td>
                        <td>
                            <a href="{{ route('post.edit', $post->title_slug) }}" class="btn btn-warning">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('post.destroy', $post->title_slug) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $posts->links() }}
    </div>
@endsection
