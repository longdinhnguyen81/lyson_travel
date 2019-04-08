<?php

namespace App\Http\Controllers\Ajax;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Travel;
use App\Model\Checktravel;
use App\Model\Checktour;
use App\Model\Tour;

class TravelController extends Controller
{
    public function travel(Request $request){
		$travels = Travel::where('travel_from', 'like', '%'.$request->value1.'%')
        ->where('travel_to', 'like', '%'.$request->value2.'%')
        ->where('active', 1)->orderBy('id', 'desc')
        ->get();

    	$result = '';
    	foreach($travels as $travel){
    		$result .= '<div class="complete-image col-lg-6 col-md-6 mt-3">
		        <a class="" href="' . route("travel.travel.detail", $travel->slug) .'">
		            <div class="destination-item">
		                <img src="/upload/'.$travel->picture.'" class="img-fluid destination-item" alt="costarica" >
		                <h6 class="primary-color front">'.$travel->title.'</h6>         
		            </div>
		        </a>    
		    </div>';
    	}
        if($result){
            return $result;
        }else{
            return '<p style="font-size:18px">Không tìm thấy chuyến đi theo yêu cầu</p>';
        }
    }

    public function tour(Request $request){
        $tours = Tour::where('from', 'like', '%'.$request->from.'%')
        ->where('hotel', 'like', '%'.$request->hotel.'%')
        ->where('people', '>=', $request->people)
        ->where('active', 1)
            ->with('stick')
        ->orderBy('recost', 'asc')->get();

        if($request->order == 2){
            $tours = Tour::where('from', 'like', '%'.$request->from.'%')
            ->where('hotel', 'like', '%'.$request->hotel.'%')
            ->where('people', '>=', $request->people)
            ->where('active', 1)
            ->with('stick')
            ->orderBy('recost', 'desc')->get();
        }
        
        $result = '';
        $sticks = '';
        foreach($tours as $tour){
            foreach($tour->stick as $stick){
                $sticks .= '<a class="btn btn-primary mx-1 px-3 mx-2 my-1 btn-sm float-left" href="'. route('travel.tour.stick', $stick->slug_name) .'" role="button">'. $stick->name .'</a>'; 
            }
            $result .= '<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                <div class="card mb-4">
                    <a class="img-card" href="'. route('travel.tour.detail', $tour->slug) .'">
                    <small class="white front tiny"><span class="far fa-clock mr-2 white"></span><br>'. substr($tour->time, 0, 7) .' <br>'. substr($tour->time, -7) .'</small>
                    <div class="review-card"><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i>  <i class="fas fa-star"></i><i class="fas fa-star-half"></i> <span class="tiny white">2 reviews</span></div>
                    <div class="bottom-tour-background"></div>                         
                    <img src="/upload/'. $tour->picture .'" alt="'. $tour->title .'" />
                    </a>
                    <div class="card-content"> 
                        <div class="row align-items-center">  
                            <div class="col-12">                         
                                <h6 class="black mb-2"><a href="'. route('travel.tour.detail', $tour->slug) .'" target="_blank">'. $tour->title .'</a></h6>
                            </div>  
                            <div class="col-12 align-middle">'.$sticks.'<h6 class="primary-color text-right ">'. number_format($tour->recost,0, ',','.') .' VND</h6>
                            </div>
                            <div>
                            </div>
                        </div>                                                                                               
                    </div>
                </div>
            </div>';
        }
        if(!$result){
            return '<p style="font-size:18px">Không tìm thấy tour theo yêu cầu</p>'; 
        }
        return $result;
    }

    public function checktravel(Request $request, $id){
        $check = new Checktravel([
            'name' => $request->name,
            'phone' => $request->phone,
            'date' => $request->date,
            'seat' => $request->seat,
            'travel_id' => $id,
        ]);
        $check->message = $request->message;
        $check->save();
        return '<div class="alert alert-success">Đặt xe thành công!</div>';
    }
    public function checktour(Request $request, $id){
        $check = new Checktour([
            'name' => $request->name,
            'phone' => $request->phone,
            'date' => $request->date,
            'people' => $request->people,
            'tour_id' => $id,
        ]);
        $check->message = $request->message;
        $check->save();
        return '<div class="alert alert-success">Đặt tour thành công!</div>';
    }
}
