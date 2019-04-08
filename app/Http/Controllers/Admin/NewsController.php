<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Post;
use App\Model\Post_Tag;
use App\Model\Tag;

class NewsController extends Controller
{
    public function index(){
    	$news = Post::orderBy('id', 'desc')->with('tag')->get();
    	return view('admin.news.index', compact('news'));
    }
    public function getAdd(){
    	$tags = Tag::all();
    	return view('admin.news.add', compact('tags'));
    }
    public function postAdd(Request $request){
    	$request->validate([
    		'title' => 'required|unique:posts',
            'description' => 'required',
    		'keywords' => 'required',
    		'detail' => 'required',
            'picture' => 'required',
    	]);
    	$news = new Post([
    		'title' => $request->title,
    		'slug' => str_slug($request->title),
            'description' => $request->description,
    		'detail' => $request->detail,
    	]);

        if($request->file('picture') != null){
                $path1 = $request->file('picture');
                $picture =  $path1->store('/', ['disk' => 'upload']);
                $news->picture = $picture;
            
        }
        $news->keywords = $request->keywords;
        $news->active = 1;
    	$news->save();
        
        foreach($request->tag_id as $tid){
            $tag = new Post_Tag();
            $tag->tag_id = $tid;
            $tag->post_id = $news->id;
            $tag->save();
        }

    	return redirect(route('admin.news.index'))->with('msg', 'Thêm thành công');
    }
    public function getEdit($id){
    	$tags = Tag::all();
    	$news = Post::with('tag')->where('id', $id)->first();
    	return view('admin.news.edit', compact('news', 'tags'));
    }
    public function postEdit(Request $request,$id){
    	$request->validate([
    		'title' => 'required|unique:posts,title,'.$id,
            'description' => 'required',
    		'keywords' => 'required',
    		'detail' => 'required',
    	]);
    	$news = Post::with('tag')->where('id', $id)->first();
        if($request->file('picture') != null){
            $path1 = $request->file('picture');
            $picture =  $path1->store('/', ['disk' => 'upload']);
            $app_path = str_replace("\\", '/', public_path());
            $file_path = $app_path.'/upload/'.$news->picture;
            $news->picture = $picture;
            if (file_exists($file_path)){
                unlink($file_path);
            }
        }

    	$news->title = $request->title;
    	$news->keywords = $request->keywords;
    	$news->description = $request->description;
        $news->detail = $request->detail;
        $tagNews = Post_Tag::where('post_id',$news->id)->get();
        if($request->tag_id){
            foreach($tagNews as $tags){
                $tags->delete();
            }
            foreach($request->tag_id as $tid){
                $tag = new Post_Tag();
                $tag->tag_id = $tid;
                $tag->post_id = $news->id;
                $tag->save();
            }
        }
        

    	$news->update();

        
    	return redirect(route('admin.news.index'))->with('msg', 'Sửa thành công');
    }
    public function delete($id){
    	$news = Post::find($id);
        $app_path = str_replace("\\", '/', public_path());
        $file_path = $app_path.'/upload/'.$news->picture;
        if (file_exists($file_path)){
            unlink($file_path);
        }
        $tags = NewTag::where('post_id', $news->id)->get();
        foreach($tags as $tag){
            $tag->delete();
        }
    	$news->delete();
    	return redirect(route('admin.news.index'))->with('msg', 'Xoá thành công');
    }
}
