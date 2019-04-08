<?php

namespace App\Http\Controllers\Travel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Post;
use App\Model\Post_Tag;
use App\Model\Tag;
use App\Model\Comment;

class PostController extends Controller
{
    public function index(){
    	$posts = Post::where('active', 1)->orderBy('id', 'desc')->with('comment')->paginate(8);
    	$tags = Tag::all();
    	return view('travel.post.index', compact('posts', 'tags'));
    }
    public function tag($slug){
    	$tags = Tag::all();
    	$posts = Tag::with('post.comment')->where('slug_name', $slug)->first();
    	return view('travel.post.tag', compact('posts', 'tags', 'slug'));
    }
    public function detail($slug, $id){
    	$tags = Tag::all();
    	$post = Post::findOrFail($id)->where('active', 1)->with('comment')->first();
    	return view('travel.post.detail', compact('post', 'tags'));
    }
    public function comment(Request $request, $id){
    	$request->validate([
    		'name' => 'required',
    		'email' => 'required|email',
    		'description' => 'required',
    	]);

    	$comment = new Comment([
    		'name' => $request->name,
    		'email' => $request->email,
    		'description' => $request->description,
    	]);
    	$comment->post_id = $id;
    	$comment->save();
    	return '<div class="alert alert-success">Bình luận thành công!</div>';
    }
}
