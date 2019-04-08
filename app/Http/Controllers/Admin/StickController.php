<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Stick;
use App\Model\Tour_Stick;

class StickController extends Controller
{
    public function index(){
    	$sticks = Stick::all();
    	return view('admin.stick.index', compact('sticks'));
    }
    public function getAdd(){
    	$sticks = Stick::all();
    	return view('admin.stick.add', compact('sticks'));
    }
    public function postAdd(Request $request){
    	$request->validate([
    		'name' => 'required|unique:sticks',
    	]);
    	$name = $request->name;
    	$slug_name = str_slug($name);
    	$stick = new Stick([
    		'name' => $name,
    		'slug_name' => $slug_name,
    	]);
    	$stick->save();
    	return redirect(route('admin.stick.index'))->with('msg', 'Thêm thành công');
    }
    public function getEdit($id){
    	$stick = Stick::find($id);
    	return view('admin.stick.edit', compact('stick'));
    }
    public function postEdit(Request $request,$id){
    	$request->validate([
    		'name' => 'required|unique:sticks,name,'.$id,
    	]);
    	$stick = Stick::find($id);
        $stick->name = $request->name;
    	$stick->slug_name = str_slug($request->name);
    	$stick->update();
    	return redirect(route('admin.stick.index'))->with('msg', 'Sửa thành công');
    }
    public function delete($id){
    	$stick = Stick::find($id);
        $tours = Tour_Stick::where('stick_id', $id)->get();
        foreach ($tours as $tour) {
            $tour->delete();
        }    	
        $stick->delete();
    	return redirect(route('admin.stick.index'))->with('msg', 'Xoá thành công');
    }
}
