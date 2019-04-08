<?php

namespace App\Http\Controllers\Travel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Travel;
use App\Model\Tour;

class TravelController extends Controller
{
    public function index(Request $request){
    	$travels = Travel::where('active', 1)->orderBy('id', 'desc')->limit(6)->get();
    	return view('travel.travel.index', compact('travels'));
    }
    public function detail($slug){
    	$travels = Travel::where('slug', $slug)->first();
    	if(!$travels){
    		return view('errors.404');
    	}
        $mores = Travel::where('active', 1)->get();
        $tours = Tour::where('active', 1)->get();
    	return view('travel.travel.detail', compact('travels', 'mores', 'tours'));
    }
}
