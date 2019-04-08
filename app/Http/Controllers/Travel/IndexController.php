<?php

namespace App\Http\Controllers\Travel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Contact;
use App\Model\Post;
use App\Model\Tag;
use App\Model\Stick;
use App\Model\Tour;
use App\Model\Travel;

class IndexController extends Controller
{
    public function index(){
        $travels = Travel::where('active', 1)->limit(3)->get();
        $tours = Tour::where('active', 1)->with('stick')->limit(3)->get();
        $posts = Post::where('active', 1)->with('tag')->with('comment')->limit(4)->get();
    	return view('travel.index.index', compact('travels', 'tours', 'posts'));
    }
    public function contact(){
    	return view('travel.index.contact');
    }
    public function about(){
    	return view('travel.index.about');
    }
    public function postContact(Request $request){
    	$request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required',
        ]);

        $contact = new Contact([
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message
        ]);
        $contact->firstname = $request->firstname;
        $contact->lastname = $request->lastname;
        $contact->save();
        return redirect()->route('travel.index.contact')->with('msg', 'Gửi liên hệ thành công');
    }
    public function sitemap(){
        $travels = Travel::where('active', 1)->get();
        $tours = Tour::where('active', 1)->get();
        $posts = Post::where('active', 1)->get();
        $tags = Tag::all();
        $sticks = Stick::all();
        return response()->view('travel.index.sitemap', [
            'tags' => $tags,
            'travels' => $travels,
            'tours' => $tours,
            'posts' => $posts,
            'sticks' => $sticks,
        ])->header('Content-Type', 'text/xml');
    }
}
