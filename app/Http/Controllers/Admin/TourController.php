<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Tour;
use App\Model\Stick;
use App\Model\Tour_Stick;
use App\Model\Picture;

class TourController extends Controller
{
    public function index(){
    	$tours = Tour::orderBy('id', 'desc')->get();
    	return view('admin.tour.index', compact('tours'));
    }
    public function getAdd(){
        $sticks = Stick::all();
    	return view('admin.tour.add', compact('sticks'));
    }
    public function postAdd(Request $request){
    	$request->validate([
    		'title' => 'required|unique:tours',
            'description' => 'required',
    		'keywords' => 'required',
    		'detail' => 'required',
    		'picture' => 'required',
    		'ticket' => 'required',
    		'hotel' => 'required',
    		'time' => 'required',
    		'people' => 'required',
    		'cost' => 'required',
    		'recost' => 'required',
            'stick_id' => 'required',
    	]);
    	$tour = new Tour([
    		'title' => $request->title,
            'description' => $request->description,
    		'detail' => $request->detail,
    		'ticket' => $request->ticket,
    		'hotel' => $request->hotel,
    		'time' => $request->time,
    		'people' => $request->people,
    		'cost' => $request->cost,
    		'recost' => $request->recost,
    	]);
        if($request->file('picture') != null){
            $path1 = $request->file('picture');
            $picture =  $path1->store('/', ['disk' => 'upload']);
            $tour->picture = $picture;
        }
    	$tour->keywords = $request->keywords;
        $tour->from = $request->from;
        $tour->active = 0;
    	$tour->slug = str_slug($request->title);
    	$tour->save();

        foreach($request->stick_id as $sid){
            $stick = new Tour_Stick();
            $stick->stick_id = $sid;
            $stick->tour_id = $tour->id;
            $stick->save();
        }


        if($request->file('files') != null){
            foreach($request->file('files') as $files){
                $addpicture = New Picture();
                $name= $files->getClientOriginalName();
                $files->move(public_path().'/upload/', $name);  
                $addpicture->name = $name;
                $addpicture->description = $tour->title;
                $addpicture->save();
            }
        }

    	return redirect(route('admin.tour.index'))->with('msg', 'Thêm thành công');
    }
    public function getEdit($id){
    	$tour = Tour::find($id);
        $sticks = Stick::all();
        $pictures = Picture::all();
    	return view('admin.tour.edit', compact('tour', 'sticks', 'pictures'));
    }
    public function postEdit(Request $request,$id){
    	$request->validate([
    		'title' => 'required|unique:tours,title,'.$id,
    		'keywords' => 'required',
            'description' => 'required',
    		'detail' => 'required',
    		'ticket' => 'required',
    		'time' => 'required',
    		'people' => 'required',
    		'cost' => 'required',
    		'recost' => 'required',
    	]);
    	$tour = Tour::find($id);
        if($request->file('picture') != null){
            $path1 = $request->file('picture');
            $picture =  $path1->store('/', ['disk' => 'upload']);
            $app_path = str_replace("\\", '/', public_path());
            $file_path = $app_path.'/upload/'.$tour->picture;
            if (file_exists($file_path)){
                unlink($file_path);
            }
            $tour->picture = $picture;
        }

    	$tour->title = $request->title;
        $tour->slug = str_slug($request->title);
    	$tour->keywords = $request->keywords;
    	$tour->description = $request->description;
    	$tour->detail = $request->detail;
    	$tour->ticket = $request->ticket;
    	$tour->hotel = $request->hotel;
    	$tour->time = $request->time;
    	$tour->people = $request->people;
    	$tour->cost = $request->cost;
    	$tour->recost = $request->recost;
    	if($request->stick_id){
            $stickss = Tour_Stick::where('tour_id', $id)->get();
            foreach ($stickss as $stick) {
                $stick->delete();
            }
            foreach($request->stick_id as $sid){
                $stick = new Tour_Stick();
                $stick->stick_id = $sid;
                $stick->tour_id = $tour->id;
                $stick->save();
            }
        }
    	$tour->update();
        if($request->file('files') != null){
            foreach($request->file('files') as $files){
                $addpicture = New Picture();
                $name= $files->getClientOriginalName();
                $files->move(public_path().'/upload/', $name);  
                $addpicture->name = $name;
                $addpicture->description = $tour->title;
                $addpicture->save();
            }
        }
    	return redirect(route('admin.tour.index'))->with('msg', 'Sửa thành công');
    }
    public function delete($id){
    	$tour = Tour::find($id);
        $stickss = Tour_Stick::where('tour_id', $tour->id)->get();
        foreach ($stickss as $stick) {
            $stick->delete();
        }
        $app_path = str_replace("\\", '/', public_path());
        $file_path = $app_path.'/upload/'.$tour->picture;
        if (file_exists($file_path)){
            unlink($file_path);
        }
        $pictures = Picture::where('post_id', $id)->get();
        foreach($pictures as $picture){
            $app_path = str_replace("\\", '/', public_path());
            $file_path = $app_path.'/upload/'.$picture->name;
            if (file_exists($file_path)){
                unlink($file_path);
            }
            $picture->delete();
        }
    	$tour->delete();
    	return redirect(route('admin.tour.index'))->with('msg', 'Xoá thành công');
    }
}
