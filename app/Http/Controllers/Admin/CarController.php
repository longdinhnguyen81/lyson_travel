<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Car;

class CarController extends Controller
{
    public function getEdit($id){
    	$car = Car::find($id);
    	return view('admin.car.edit', compact('car'));
    }
    public function postEdit(Request $request, $id){
    	$request->validate([
    		'seat' => 'required',
    		'cost' => 'required',
    	]);
    	$car = Car::find($id);
    	$car->seat = $request->seat;
    	$car->cost = $request->cost;
    	$car->update();
    	return redirect(route('admin.travel.index'))->with('msg', 'Sửa thành công');
    }
    public function delete($id){
    	$car = Car::find($id);
        $car->delete();
    	return redirect(route('admin.travel.index'))->with('msg', 'Xoá thành công');
    }
}
