@extends('templates.travel.master')
@section('content')
	<div class="tour-title not-fixed ">
            
            <img class="w-100 h-100" src="/templates/travel/assets/images/destinations.jpg" alt="Tin tức du lịch Lý Sơn">
            <h1 class="white text-center front shadow-text center-text">TIN TỨC DU LỊCH</h1>  
            <img class="curve2 front" src="/templates/travel/assets/svgs/curve.png" alt="Tin tức du lịch Lý Sơn">
    
        </div>
         <!-- End section 1-->


         <section id="section3" class="tour-list-sidebar tour-list-sidebar-2-col">
      
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12 col-md-6 col-lg-3 ml-lg-5 order-lg-first order-last mt-3 mt-lg-0">

                            <form class="input-group mb-4 search-button" action="{{ route('travel.tour.search') }}" method="GET">
                                <input class="form-control border-secondary py-2" placeholder="Tìm kiếm tour đi Lý Sơn..." list="browsers" name="name">
                                    <datalist id="browsers">
                                        <option value="Quảng Ngãi">
                                        <option value="Chu Lai">
                                        <option value="Hội An">
                                        <option value="Đà Nẵng">
                                    </datalist>
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </form>
                            
                            <div class="more-info tags my-4">

                                <h6 class="black semibold text-center mx-4 mt-3 mb-3 info-title">Tags phổ biến</h6>                            

                                <div class="text-center px-3 px-lg-2 pb-3 ">   
                                    @foreach($tags as $tag)
                                    <a class="btn btn-outline-primary px-3 mr-1 mb-1 btn-sm" href="{{ route('travel.post.tag', $tag->slug_name) }}" role="button">{{ $tag->name }}</a>
                                    @endforeach
                                </div>
                            </div>

                            <div class="more-info mx-auto my-4">
                                <h6 class="black semibold text-center mx-4 mt-3 mb-3 info-title">Liên hệ nhanh</h6>
                                <div class="pb-2">                      
                            
                                    <a href="tel:0986841841"><h5 class="grey text-center tel-info"><i class="fas primary-color fa-phone faa-tada animated mr-2 grey my-lg-0 mb-1"></i>0986.841.841</h5></a>  
                                    <a href="mailto:taiembkdn@gmail.com"><h5 class="grey text-center mail-info"><i class="fas fa-envelope faa-horizontal animated primary-color mr-2"></i>taiembkdn@gmail.com</h5></a>                        
                                </div>
                            </div>
    
                        
                            <div  id="instasidebar" class="grid2 runsidebar">
                                <h6 class="black semibold text-center mx-4 mt-3 mb-2 info-title">Instagram Gallery</h6>                            
                                <div class="grid-sizer"></div>
                            </div>


                            <div class=" mt-4">
                                <a><img src="/templates/travel/assets/images/promotion.jpg" class="img-fluid mx-auto d-block mt-5" alt="Tin tức du lịch Lý Sơn"></a>
                            </div>
                        </div>

                        <div class="col-xs-12 col-md-12 col-lg-8   single-tour">
                            	<div class="row">
                                    <div class="col-lg-12 travel-left">
                                        @foreach($posts as $post)
                                        <div class="single-travel media mb-5">
                                            <a href="{{ route('travel.post.detail',['slug' => str_slug($post->title), 'id' => $post->id]) }}"><img class="img-fluid d-flex  mr-3 " src="/upload/{{ $post->picture }}" alt="{{ $post->title }}"></a>
                                            <div class="dates tiny white">
                                                <span>{{ date_format($post->updated_at, 'm') }}</span>
                                                <p class="white text-center">{{ date_format($post->updated_at, 'D') }}</p>
                                            </div>
                                            <div class="media-body mt-sm-0 mt-3  align-self-center">
                                                <a class="title-blog black" href="{{ route('travel.post.detail',['slug' => str_slug($post->title), 'id' => $post->id]) }}"><h6 class="mt-0 ">{{$post->title}}</h6></a>

                                            <p class="">{{ $post->description }}
                                            </p>
                                            <div class="meta-bottom d-flex justify-content-between">
                                                <p class="primary-color"></p>
                                                <p class="primary-color"><span class="far primary-color fa-comments"></span> {{ count($post->comment) }} Bình luận</p>
                                            </div>							 
                                            </div>
                                        </div>
                                        @endforeach
                                        <div class="single-travel media mb-5">
                                            <img class="img-fluid d-flex  mr-3" src="/templates/travel/assets/images/blog3.jpg" alt="">
                                            <div class="dates tiny white">
                                                <span>14</span>
                                                <p class="white  text-center">Jun</p>
                                            </div>							  
                                            <div class="media-body mt-sm-0 mt-3  align-self-center">
                                            <a class="title-blog black" href="#"><h6 class="mt-0 ">8 Best World Landmarks To Add To Your Travel Bucket List</h6></a>
                                            <p>Occaecat ullamco officia tempor ut elit ea sunt velit. Eu officia et reprehenderit labore voluptate culpa tempor
                                                    velit irure. Sunt velit voluptate nulla esse. Consequat deserunt qui proident magna ad labore fugiat mollit 
                                                    laborum tempor. Ad exce officia. Irure commodo 
                                            </p>
                                            <div class="meta-bottom d-flex justify-content-between">
                                                    <p class="primary-color"></p>
                                                <p class="primary-color"><span class="far primary-color fa-comments"></span> 03 Bình luận</p>
                                            </div>							 
                                            </div>
                                        </div>														
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                        <div class="row mb-lg-0 mb-4 float-right">
                                            <div class="col-12 mt-3">
                                                   <div class="pagination">
                                                       <div class="current"><h6>1</h6></div>
                                                       <a class="" href="#"><h6>2</h6></a>
                                                       <a href="#"><h6>3</h6></a>
                                                       <a href="#"><h6 class="arrow-offset">›</h6></a>
                                                       <a href="#"><h6 class="arrow-offset">»</h6></a>
                                                   </div>
                                            </div>
                                       </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </section>
@endsection
@section('meta')
        <title>Tin tức du lịch Lý Sơn</title>
        <meta name="keywords" content="du lich ly son, tour du lich ly son, du lịch Lý Sơn giá rẻ, tour du lịch Lý Sơn, thuê xe du lịch Lý Sơn, thuê xe đi Lý Sơn" />
        <meta name="description" content='Du lịch đảo Lý Sơn - Đảo Bé giá rẻ với xe đưa đón và nghỉ dưỡng tại khách sạn Mường Thanh. Thuê xe du lịch đảo Lý Sơn. Thuê xe Đà Nẵng đi cảng Sa Kỳ, thuê xe Đà Nẵng Quảng Ngãi' />
        <meta name="news_keywords" content="du lich ly son, tour du lich ly son, du lịch Lý Sơn giá rẻ, tour du lịch Lý Sơn, thuê xe du lịch Lý Sơn, thuê xe đi Lý Sơn">

        <meta property="og:title" content="Tin tức du lịch Lý Sơn" />
        <meta property="og:description" content="Du lịch đảo Lý Sơn - Đảo Bé giá rẻ với xe đưa đón và nghỉ dưỡng tại khách sạn Mường Thanh. Thuê xe du lịch đảo Lý Sơn. Thuê xe Đà Nẵng đi cảng Sa Kỳ, thuê xe Đà Nẵng Quảng Ngãi" />
        <meta property="og:image" content= "/templates/travel/assets/images/destinations.jpg" />
        <meta property="og:url" itemprop="url" content="{{ route('travel.post.index') }}">

        <meta itemprop="name" content="Tin tức du lịch Lý Sơn" />
        <meta itemprop="description" content="Du lịch đảo Lý Sơn - Đảo Bé giá rẻ với xe đưa đón và nghỉ dưỡng tại khách sạn Mường Thanh. Thuê xe du lịch đảo Lý Sơn. Thuê xe Đà Nẵng đi cảng Sa Kỳ, thuê xe Đà Nẵng Quảng Ngãi" />
        <meta itemprop="image" content= "/templates/travel/assets/images/destinations.jpg" />
@endsection