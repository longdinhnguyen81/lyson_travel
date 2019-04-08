<?php

namespace App\Http\Controllers\Travel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Tour;
use App\Model\Stick;
use App\Model\Rate;
use App\Model\Picture;

class TourController extends Controller
{
    public function index(){
    	$tours = Tour::where('active', 1)->orderBy('id', 'desc')->with('stick')->with('rate')->get();
    	return view('travel.tour.index', compact('tours'));
    }
    public function stick($slug){
        $tours = Stick::where('slug_name', $slug)->with('tour')->first();
        return view('travel.tour.stick', compact('tours', 'slug'));
    }
    public function detail($slug){
        $pictures = Picture::all();
    	$tour = Tour::where('slug', $slug)->where('active', 1)->with('stick')->first();
    	if(!$tour){
    		return view('errors.404');
    	}
    	return view('travel.tour.detail', compact('tour', 'pictures'));
    }
    public function rating(Request $request, $slug){

    	$request->validate([
    		'name' => 'required',
    		'star' => 'required',
    		'email' => 'required|email',
    		'message' => 'required',
    	]);

    	$tour = Tour::where('slug', $slug)->first();
    	$rate = new Rate([
    		'name' => $request->name,
    		'star' => $request->star,
    		'email' => $request->email,
    		'message' => $request->message,
    		'tour_id' => $tour->id,
    	]);

    	$rate->save();
    	return '<div class="alert alert-success">Review thành công!</div>';
    }
    public function search(Request $request){
        $tours = Tour::where('active', 1)->get();
        if($request->name){
            $name = $request->name;
            $tours = Tour::where('slug', 'like', '%'.str_slug($name).'%')->where('active', 1)->with('stick')->get();
            if(count($tours) == 0){
                return view('errors.404');
            }
        }
        if($request->from || $request->hotel || $request->cost){
            $tours = Tour::where('from', 'like', '%'.$request->from.'%')->where('hotel', 'like', '%'.$request->hotel.'%')->where('recost', '>=', $request->cost)->where('active', 1)->get();
            if(count($tours) == 0){
                return view('errors.404');
            }
        }
        return view('travel.tour.search', compact('tours'));
    }
}
