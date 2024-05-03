<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

use Illuminate\Validation\Rule;


use App\Models\Post;
use App\Models\User;


use Illuminate\Support\Str;



class PostController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    function index (){
            $posts = Post::paginate(5);
            return view('index', ["posts"=>$posts]);
    }

    function show ($slug){
        $post = Post::where('title_slug', $slug)->firstOrFail();
        return view('details', ["post"=>$post]);

    }

    function create(){
        $users = User::all();

        return view('createPost',  ['users' => $users]);
    }

    private function file_handler($request){

        if($request->hasFile('image')){

            $image = $request->file('image');

            $filepath=$image->store("posts","post_uploads" );
            return $filepath;


        }

    }
    function store(Request $request){
        $validated = $request->validate([
            'title' => 'required|unique:posts|min:3',
            'body' => 'required|min:10',
            'posted_by'=>'required'
        ]);

        $file_path = $this->file_handler($request);
        $request_params = $request->all();

        $post = new Post();
        $post->title = $request_params["title"];
        $post->title_slug = Str::slug($request_params["title"]);
        $post->body = $request_params["body"];
        $post->posted_by = $request_params["posted_by"];
        $post->image = $file_path;

        $post->save();
        return redirect()->route('post.show', $post->title_slug);
    }


    function edit($slug){
        $users = User::all();
        $post = Post::where('title_slug', $slug)->firstOrFail();
        return view('editPost ', ["post"=>$post , 'users' => $users]);


    }
    function update($slug)
    {
        $post = Post::where('title_slug', $slug)->firstOrFail();

        $validated = request()->validate([
            'title' => [
                'required',
                Rule::unique('posts')->ignore($post->id),'min:3'],
            'body' => ['required','min:10'],
            'posted_by'=>['required']
        ]);

        $updated_data = request()->all();

        $file_path = $this->file_handler(request());

        $post->title = $updated_data["title"];
        $post->title_slug = Str::slug($updated_data["title"]); // Generate slug from updated title
        $post->body = $updated_data["body"];
        $post->posted_by = $updated_data["posted_by"];
        $post->image = $file_path;

        $post->save();

        return to_route('post.show' , $post->title_slug);
    }



    function destroy($slug){
        $post = Post::where('title_slug', $slug)->firstOrFail();
        $post->delete();
        return to_route("post.index");

    }

    public function restore()
        {
            $restoredCount = Post::onlyTrashed()->restore();

            return redirect()->back()->with('success', $restoredCount . ' soft deleted posts restored successfully');
        }



}
