<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Advise;

class AdviseController extends Controller
{
    public function index(){
    	$advises = Advise::orderBy('id', 'desc')->with('service')->get();
    	return view('admin.advise.index', compact('advises'));
    }
    public function delete($id){
    	$advises = Advise::find($id);
    	$advises->delete();
    	return redirect(route('admin.advise.index'))->with('msg', 'Xoá thành công');
    }
}
