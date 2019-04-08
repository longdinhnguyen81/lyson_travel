<?php

namespace App\Http\Controllers\Ajax;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Post;
use App\Model\Tour;
use App\Model\Travel;
use App\Model\Picture;

class AdminController extends Controller
{
    public function picture(Request $request){
    	$id = $request->id;
    	$picture = Picture::find($id);
        $app_path = str_replace("\\", '/', public_path());
        $file_path = $app_path.'/upload/'.$picture->name;
        unlink($file_path);
        $picture->delete();
    	return '';
    }
    public function post(Request $request){
    	$id = $request->id;
    	$news = Post::find($id);
    	if($news->active == 0){
    		$news->active = 1;
    		$return = '<a href="javascript:void(0)" onclick="return getActive('.$id.')" style="cursor:pointer"><img src="/templates/admin/img/icons/active.png" /></a>';
    	}else{
    		$news->active = 0;
    		$return = '<a href="javascript:void(0)" onclick="return getActive('.$id.')" style="cursor:pointer"><img src="/templates/admin/img/icons/deactive.png" /></a>';
    	}
    	$news->save();
    	return $return;
    }
    public function tour(Request $request){
        $id = $request->id;
        $news = Tour::find($id);
        if($news->active == 0){
            $news->active = 1;
            $return = '<a href="javascript:void(0)" onclick="return getActive('.$id.')" style="cursor:pointer"><img src="/templates/admin/img/icons/active.png" /></a>';
        }else{
            $news->active = 0;
            $return = '<a href="javascript:void(0)" onclick="return getActive('.$id.')" style="cursor:pointer"><img src="/templates/admin/img/icons/deactive.png" /></a>';
        }
        $news->save();
        return $return;
    }
    public function travel(Request $request){
        $id = $request->id;
        $news = Travel::find($id);
        if($news->active == 0){
            $news->active = 1;
            $return = '<a href="javascript:void(0)" onclick="return getActive('.$id.')" style="cursor:pointer"><img src="/templates/admin/img/icons/active.png" /></a>';
        }else{
            $news->active = 0;
            $return = '<a href="javascript:void(0)" onclick="return getActive('.$id.')" style="cursor:pointer"><img src="/templates/admin/img/icons/deactive.png" /></a>';
        }
        $news->save();
        return $return;
    }
}
