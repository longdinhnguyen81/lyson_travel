<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Contact;
use App\Model\Post;

class IndexController extends Controller
{
    public function index(){
        $new = Post::all();
        return view('admin.index.index', compact('new'));
    }/*
    public function count(){
        $count = Count::orderBy('id','desc')->limit(7)->get();
        return response()->json(['data' => $count]);
    }
    public function countcall(Request $request){
        $request->validate([
           'ip' => 'required', 
           'country' => 'required', 
           'city' => 'required',
           'navigator' => 'required',
           'connector' => 'required',
        ]);
        $ip = Ip::where('ip', $request->ip)->first();
        if(!$ip){
            $ip = new Ip([
                'ip' => $request->ip,
            ]);
            $ip->save();
        }
        $location = new Location([
            'country' => $request->country,
            'city' => $request->city,
            'url' => $request->url_current,
            'navigator' => $request->navigator,
            'connector' => $request->connector,
            'ip_id' => $ip->id,
            'type' => $ip->type,
        ]);
        $location->save();
        return response()->json(['data' => 'success']);
    }*/
}
