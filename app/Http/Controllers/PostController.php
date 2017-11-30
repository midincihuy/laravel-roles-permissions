<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
  public function index(Post $post)
  {
    // return view('home');
    $posts = $post::latest()->paginate(2);
    return view('post.index')->with(['posts' => $posts]);
  }

  public function show(Post $post)
  {
    // return $post;
    return view('post.show')->with(['post' => $post]);
  }

  public function store(Request $request)
  {
    $post = Post::create([
      'user_id' => auth()->id(),
      'title' => $request->title,
      'body' => $request->body
    ]);
    return redirect(route('admin.show', $post->id));
  }

  public function create()
  {
    return view('post.create');
  }
}
