<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Tag;
use App\Model\Post_Tag;

class TagController extends Controller
{
    public function index(){
    	$tags = Tag::all();
    	return view('admin.tag.index', compact('tags'));
    }
    public function getAdd(){
    	$tags = Tag::all();
    	return view('admin.tag.add', compact('tags'));
    }
    public function postAdd(Request $request){
    	$request->validate([
    		'name' => 'required|unique:tags',
    	]);
    	$name = $request->name;
    	$slug_name = str_slug($name);
    	$tag = new Tag([
    		'name' => $name,
    		'slug_name' => $slug_name,
    	]);
    	$tag->save();
    	return redirect(route('admin.tag.index'))->with('msg', 'Thêm thành công');
    }
    public function getEdit($id){
    	$tag = Tag::find($id);
    	return view('admin.tag.edit', compact('tag'));
    }
    public function postEdit(Request $request,$id){
    	$request->validate([
    		'name' => 'required|unique:tags,name,'.$id,
    	]);
    	$tag = Tag::find($id);
        $tag->name = $request->name;
    	$tag->slug_name = str_slug($request->name);
    	$tag->update();
    	return redirect(route('admin.tag.index'))->with('msg', 'Sửa thành công');
    }
    public function delete($id){
    	$tag = Tag::find($id);
        $news = Post_Tag::where('tag_id', $id)->get();
        foreach ($news as $new) {
            $new->delete();
        }    	
        $tag->delete();
    	return redirect(route('admin.tag.index'))->with('msg', 'Xoá thành công');
    }
}
