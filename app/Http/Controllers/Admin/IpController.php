<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Ip;

class IpController extends Controller
{
    public function index(){
    	$ips = Ip::orderBy('id', 'desc')->with('location')->get();
    	return view('admin.ip.index', compact('ips'));
    }
    public function delete(){

    }
}
