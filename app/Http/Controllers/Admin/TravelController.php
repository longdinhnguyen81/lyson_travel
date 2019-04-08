<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Travel;
use App\Model\Car;

class TravelController extends Controller
{
    public function index(){
    	$travels = Travel::orderBy('id', 'desc')->with('car')->get();
    	return view('admin.travel.index', compact('travels'));
    }
    public function getAdd(){
    	return view('admin.travel.add');
    }
    public function postAdd(Request $request){
    	$request->validate([
    		'title' => 'required|unique:travels',
            'description' => 'required',
    		'keywords' => 'required',
    		'detail' => 'required',
    		'picture' => 'required',
            'travel_from' => 'required',
            'travel_to' => 'required',
    	]);
    	$travel = new Travel([
    		'title' => $request->title,
    		'slug' => str_slug($request->title),
            'description' => $request->description,
    	]);
        if($request->file('picture') != null){
            $path1 = $request->file('picture');
            $picture =  $path1->store('/', ['disk' => 'upload']);
            $travel->picture = $picture;
        }
        $travel->travel_from = $request->travel_from;
        $travel->travel_to = $request->travel_to;
        $travel->detail = $request->detail;
        $travel->keywords = $request->keywords;
        $travel->active = 0;
    	$travel->save();
    	
    	$onecar = new Car([
    		'seat' => 1,
    		'type' => 'Đi ké xe',
    		'cost' => $request->oneseat,
    		'travel_id' => $travel->id
    	]);
    	$onecar->save();
    	$fourcar = new Car([
    		'seat' => 4,
    		'type' => 'Thuê xe',
    		'cost' => $request->fourseat,
    		'travel_id' => $travel->id
    	]);
    	$fourcar->save();
    	$sevencar = new Car([
    		'seat' => 7,
    		'type' => 'Thuê xe',
    		'cost' => $request->sevenseat,
    		'travel_id' => $travel->id
    	]);
    	$sevencar->save();
    	$sixteencar = new Car([
    		'seat' => 16,
    		'type' => 'Thuê xe',
    		'cost' => $request->sixteenseat,
    		'travel_id' => $travel->id
    	]);
    	$sixteencar->save();
    	$thirtycar = new Car([
    		'seat' => 30,
    		'type' => 'Thuê xe',
    		'cost' => $request->thirtyseat,
    		'travel_id' => $travel->id
    	]);
    	$thirtycar->save();
    	$fourtyfivecar = new Car([
    		'seat' => 45,
    		'type' => 'Thuê xe',
    		'cost' => $request->fourtyfiveseat,
    		'travel_id' => $travel->id
    	]);
    	$fourtyfivecar->save();

    	return redirect(route('admin.travel.index'))->with('msg', 'Thêm thành công');
    }
    public function getEdit($id){
    	$travel = Travel::with('car')->where('id', $id)->first();
    	return view('admin.travel.edit', compact('travel'));
    }
    public function postEdit(Request $request,$id){
    	$request->validate([
    		'title' => 'required|unique:travels,title,'.$id,
            'description' => 'required',
    		'keywords' => 'required',
    		'detail' => 'required',
            'travel_from' => 'required',
            'travel_to' => 'required',
    	]);
    	$travel = Travel::find($id);
        if($request->file('picture') != null){
            $path1 = $request->file('picture');
            $picture =  $path1->store('/', ['disk' => 'upload']);
            $app_path = str_replace("\\", '/', public_path());
            $file_path = $app_path.'/upload/'.$travel->picture;
            if (file_exists($file_path)){
                unlink($file_path);
            }
            $travel->picture = $picture;
        }

    	$travel->title = $request->title;
    	$travel->keywords = $request->keywords;
    	$travel->description = $request->description;
        $travel->detail = $request->detail;
        $travel->travel_from = $request->travel_from;
        $travel->travel_to = $request->travel_to;
    	$travel->update();
        
        $cars = Car::where('travel_id', $id)->get();
        foreach($cars as $car){
        	$car->delete();
        }
        $onecar = new Car([
    		'seat' => 1,
    		'type' => 'Đi ké xe',
    		'cost' => $request->oneseat,
    		'travel_id' => $travel->id
    	]);
    	$onecar->save();
    	$fourcar = new Car([
    		'seat' => 4,
    		'type' => 'Thuê xe',
    		'cost' => $request->fourseat,
    		'travel_id' => $travel->id
    	]);
    	$fourcar->save();
    	$sevencar = new Car([
    		'seat' => 7,
    		'type' => 'Thuê xe',
    		'cost' => $request->sevenseat,
    		'travel_id' => $travel->id
    	]);
    	$sevencar->save();
    	$sixteencar = new Car([
    		'seat' => 16,
    		'type' => 'Thuê xe',
    		'cost' => $request->sixteenseat,
    		'travel_id' => $travel->id
    	]);
    	$sixteencar->save();
    	$thirtycar = new Car([
    		'seat' => 30,
    		'type' => 'Thuê xe',
    		'cost' => $request->thirtyseat,
    		'travel_id' => $travel->id
    	]);
    	$thirtycar->save();
    	$fourtyfivecar = new Car([
    		'seat' => 45,
    		'type' => 'Thuê xe',
    		'cost' => $request->fourtyfiveseat,
    		'travel_id' => $travel->id
    	]);
    	$fourtyfivecar->save();

    	return redirect(route('admin.travel.index'))->with('msg', 'Sửa thành công');
    }
    public function delete($id){
    	$travel = Travel::find($id);
        $app_path = str_replace("\\", '/', public_path());
        $file_path = $app_path.'/upload/'.$travel->picture;
        if (file_exists($file_path)){
            unlink($file_path);
        }
    	$travel->delete();
    	return redirect(route('admin.travel.index'))->with('msg', 'Xoá thành công');
    }
}
