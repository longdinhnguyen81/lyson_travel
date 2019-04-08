@extends('templates.travel.master')
@section('content')
	<div class="tour-title not-fixed center-image">
            
            <img class="w-100 h-100" src="/templates/travel/assets/images/search.jpg" alt="Tour du lịch Lý Sơn">
            <h1 class="white text-center front shadow-text center-text">TÌM KIẾM TOUR DU LỊCH LÝ SƠN</h1>  
            <img class="curve2 front" src="/templates/travel/assets/svgs/curve.png" alt="Tour du lịch Lý Sơn">
    
        </div>
         <!-- End section 1-->
 
          <!-- Section 3 Tours-->

        <section id="section3" class="tour-list-sidebar tour-search-3-cols-card">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-lg-3 order-lg-first order-last mt-4 mt-lg-0">
                        

                            <div class="more-info mx-auto my-4">
                                <h6 class="black semibold text-center mx-4 mt-3 mb-3 info-title">Liên hệ nhanh</h6>
                                <div class="pb-2">                      
                            
                                    <a href="tel:0986841841"><h5 class="grey text-center tel-info"><i class="fas primary-color fa-phone faa-tada animated mr-2 grey my-lg-0 mb-1"></i>0986.841.841</h5></a>  
                                    <a href="mailto:taiembkdn@gmail.com"><h5 class="grey text-center mail-info"><i class="fas fa-envelope faa-horizontal animated primary-color mr-2"></i>taiembkdn@gmail.com</h5></a>                        
                                </div>
                            </div>

                            <a href="#"><img src="/templates/travel/assets/images/promotion.jpg" class="w-100 img-fluid mx-auto d-block mt-4" alt="Tour du lịch Lý Sơn"></a>

                    </div>
                    <div class="col-md-12 col-lg-9 order-lg-first order-last mt-4 mt-lg-0 row">
                        @foreach($tours->tour as $tour)
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                            <div class="card mb-4">
                                <a class="img-card" href="{{ route('travel.tour.detail', $tour->slug) }}">
                                <small class="white front tiny"><span class="far fa-clock mr-2 white"></span><br>{{ substr($tour->time, 0, 7) }} <br>{{ substr($tour->time, -7) }}</small>
                                <div class="review-card"><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i>  <i class="fas fa-star"></i><i class="fas fa-star-half"></i> <span class="tiny white">2 reviews</span></div>
                                <div class="bottom-tour-background"></div>                         
                                <img src="/upload/{{ $tour->picture }}" alt="{{ $tour->title }}" />
                                </a>
                                <div class="card-content"> 
                                    <div class="row align-items-center">  
                                        <div class="col-12">                         
                                            <h6 class="black mb-2"><a href="{{ route('travel.tour.detail', $tour->slug) }}" target="_blank">{{ $tour->title }}</a></h6>
                                        </div>  
                                        <div class="col-12 align-middle">
                                            @foreach($tour->stick as $stick)
                                            <a class="btn btn-primary mx-1 px-3 mx-2 my-1 btn-sm float-left" href="#" role="button">{{ $stick->name }}</a>          
                                            @endforeach  
                                            <h6 class="primary-color text-right ">{{ number_format($tour->recost,0, ',','.') }} VND</h6>
                                        </div>
                                        <div>
                                        </div>
                                    </div>                                                                                               
                                </div>
                            </div>
                        </div>
                        @endforeach
                      </div>
                    </div>
                </div>

            
        </section>
@endsection
@section('meta')
        <title>Tour du lịch Lý Sơn giá rẻ</title>
        <meta name="keywords" content="du lich ly son, tour du lich ly son, du lịch Lý Sơn giá rẻ, tour du lịch Lý Sơn, thuê xe du lịch Lý Sơn, thuê xe đi Lý Sơn" />
        <meta name="description" content='Du lịch đảo Lý Sơn - Đảo Bé giá rẻ với xe đưa đón và nghỉ dưỡng tại khách sạn Mường Thanh. Thuê xe du lịch đảo Lý Sơn. Thuê xe Đà Nẵng đi cảng Sa Kỳ, thuê xe Đà Nẵng Quảng Ngãi' />
        <meta name="news_keywords" content="du lich ly son, tour du lich ly son, du lịch Lý Sơn giá rẻ, tour du lịch Lý Sơn, thuê xe du lịch Lý Sơn, thuê xe đi Lý Sơn">

        <meta property="og:title" content="Tour du lịch Lý Sơn giá rẻ" />
        <meta property="og:description" content="Du lịch đảo Lý Sơn - Đảo Bé giá rẻ với xe đưa đón và nghỉ dưỡng tại khách sạn Mường Thanh. Thuê xe du lịch đảo Lý Sơn. Thuê xe Đà Nẵng đi cảng Sa Kỳ, thuê xe Đà Nẵng Quảng Ngãi" />
        <meta property="og:image" content= "/templates/travel/assets/images/search.jpg" />
        <meta property="og:url" itemprop="url" content="{{ route('travel.tour.stick', $slug) }}">

        <meta itemprop="name" content="Tour du lịch Lý Sơn giá rẻ" />
        <meta itemprop="description" content="Du lịch đảo Lý Sơn - Đảo Bé giá rẻ với xe đưa đón và nghỉ dưỡng tại khách sạn Mường Thanh. Thuê xe du lịch đảo Lý Sơn. Thuê xe Đà Nẵng đi cảng Sa Kỳ, thuê xe Đà Nẵng Quảng Ngãi" />
        <meta itemprop="image" content= "/templates/travel/assets/images/search.jpg" />
@endsection