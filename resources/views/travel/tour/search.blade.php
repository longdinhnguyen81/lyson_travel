@extends('templates.travel.master')
@section('content')
	<div class="tour-title not-fixed center-image">
            
            <img class="w-100 h-100" src="/templates/travel/assets/images/search.jpg" alt="tour du lịch Lý Sơn">
            <h1 class="white text-center front shadow-text center-text">TOUR DU LỊCH LÝ SƠN</h1>  
            <img class="curve2 front" src="/templates/travel/assets/svgs/curve.png" alt="tour du lịch Lý Sơn">
    
        </div>
         <!-- End section 1-->
 
          <!-- Section 3 Tours-->

        <section id="section3" class="tour-list-sidebar tour-search-3-cols-card">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-lg-12 order-lg-first order-last mt-4 mt-lg-0 row">
                        @foreach($tours as $tour)
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
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
                                            <a class="btn btn-primary mx-1 px-3 mx-2 my-1 btn-sm float-left" href="{{ route('travel.tour.stick', $stick->slug_name) }}" role="button">{{ $stick->name }}</a>          
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
        <meta property="og:url" itemprop="url" content="{{ route('travel.index.search') }}">

        <meta itemprop="name" content="Tour du lịch Lý Sơn giá rẻ" />
        <meta itemprop="description" content="Du lịch đảo Lý Sơn - Đảo Bé giá rẻ với xe đưa đón và nghỉ dưỡng tại khách sạn Mường Thanh. Thuê xe du lịch đảo Lý Sơn. Thuê xe Đà Nẵng đi cảng Sa Kỳ, thuê xe Đà Nẵng Quảng Ngãi" />
        <meta itemprop="image" content= "/templates/travel/assets/images/search.jpg" />
@endsection