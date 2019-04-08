@extends('templates.travel.master')
@section('content')
	
            <div id="chapter1" class="chapter">
                

            <div class="container text-center justify-content-center align-items-center searchform">
                <h3 class="white mx-2 my-3 text-center shadow-text d-block">Tìm tour theo sở thích của bạn</h3>    
                <form class="form-inline text-center justify-content-center align-items-center" method="GET" action="{{  route('travel.tour.search') }}">
                    <input list="browsers" type="text" name="from" class="form-control-inline2 form-control mb-2 mr-lg-2 mx-md-0 mx-4 py-2" id="inlineFormInputName1" placeholder="Điểm đi">
                    <datalist id="browsers">
                        <option value="Quảng Ngãi">
                        <option value="Chu Lai">
                        <option value="Hội An">
                        <option value="Đà Nẵng">
                    </datalist>
                    <span class="fas fa-search iconform"></span>

                    <select class="mb-2 mr-lg-2 mx-4 mx-md-0 form-control form-control-inline2" id="inlineFormInputName2" name="hotel">
                        <option value="">Tất cả khách sạn, nhà nghỉ</option>
                        <option value="Khách sạn">Khách sạn Mường Thanh</option>
                        <option value="Nhà Nghỉ">Tất cả nhà nghỉ</option>
                    </select>
                    <span class="fas fa-calendar iconform"></span>
                    
                    <input list="browsers" type="number" class="form-control-inline2 form-control mb-2 mr-lg-2 mx-md-0 mx-4 py-2" name="cost" placeholder="Khoảng giá(VND)">
                    <datalist id="browsers">
                        <option value="1.000.000">
                        <option value="1.500.000">
                        <option value="2.000.000">
                        <option value=">2.500.000">
                    </datalist>
                    <span class="fas fa-chevron-down iconform"></span>

                    <button type="submit" class="btn btn-primary mb-2 mx-4 mx-md-0 mr-lg-2 py-2 form-control-inline3">Search</button>

                </form>
            </div>
            <div class="chapter2">
                <img class="curve2" src="/templates/travel/assets/svgs/curvegrey.png" alt="Du lịch Lý Sơn">
            </div>
        </div>
         <!-- End section 1-->



          <!-- Section 3 Tours-->

          <section id="section3">

                <div class="container">

                    <h2 class="black front">Các chuyến xe hấp dẫn</h2>

                    <div class="row mb-5">  
                        <div class="col-sm-9 front">               
                        </div>
    
                        <div class="col-sm-3 front my-auto">               
                            <a class="btn btn-primary   mt-2 px-5 py-2" href="{{ route('travel.travel.index') }}" role="button">Xem tất cả</a>
                        </div>
                    </div>

                </div> 
      
            <div class="content tours-homepage">
              <div class="container">
                  <div class="row">
                    @foreach($travels as $travel)
                        <div class="complete-image col-lg-4 col-md-4 mt-3">
                            <a class="" href="{{ route('travel.travel.detail', str_slug($travel->title)) }}">
                                <div class="destination-item">
                                <img src="/upload/{{ $travel->picture }}" class="img-fluid destination-item" alt="{{ $travel->title }}" >
                                    <h6 class="primary-color front">{{ $travel->title }}</h6>              
                                </div>
                            </a>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
            
        </section><!-- End section 3 tours-->

        <section id="section3">

                <div class="container">

                    <h2 class="black front">Các tour du lịch Lý Sơn hấp dẫn</h2>

                    <div class="row mb-5">  
                        <div class="col-sm-9 front">               
                        </div>
    
                        <div class="col-sm-3 front my-auto">               
                            <a class="btn btn-primary mt-2 px-5 py-2" href="{{ route('travel.tour.index') }}" role="button">Xem tất cả</a>
                        </div>
                    </div>

                </div> 
      
            <div class="content tours-homepage">
              <div class="container">
                  <div class="row">
                    @foreach($tours as $tour)
                        <div class="col-xs-12 col-md-6 col-lg-4 mb-lg-0 mb-4">
                            <div class="card">
                                <small class="white front"><span class="far fa-clock mr-2 white"></span><br>{{ substr($tour->time, 0, 7) }} <br>{{ substr($tour->time, -7) }}</small>
                                <a class="img-card" href="{{ route('travel.tour.detail', str_slug($tour->title)) }}">
                                <img src="/upload/{{ $tour->picture }}" alt="{{ $tour->title }}" />
                                </a>
                                <div class="card-content">  {{-- 
                                    <div class="special-offer ">
                                        <div class="arrow_box text-center">
                                            <span class="white subtitle bold"> 25% OFF</span>
                                        </div>
                                    </div> --}}
                                    <div>
                                    @foreach($tour->stick as $stick)
                                        <a class="btn btn-primary px-3 btn-sm float-left ml-1" href="{{ route('travel.tour.stick', $stick->slug_name) }}" role="button">{{ $stick->name }}</a>
                                    @endforeach
                                    </div><br><br>
                                    <p class="block text-primary font-weight-bold">
                                        1.200.200 VND
                                    </p>
                                    <h6 class="black"><a href="#" target="_blank">{{ str_limit($tour->title, 40) }}</a></h6>
                                    <p class="">{{ str_limit($tour->description,50) }}  <a href="{{ route('travel.tour.detail', str_slug($tour->title)) }}" target="_blank"><span class="text-primary">Chi tiết</span></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
            
        </section><!-- End section 3 tours-->

        <section id="section4">
            <img class="curve3" src="/templates/travel/assets/svgs/curve2.png" alt="Du lịch đảo Lý Sơn">
                <div class="container">
					<div class="row d-flex justify-content-center">
						<div class="container">

                    <h2 class="black front">Tin tức du lịch</h2>

                    <div class="row mb-5">  
                        <div class="col-sm-9 front">               
                        </div>
    
                        <div class="col-sm-3 front my-auto">               
                            <a class="btn btn-primary mt-2 px-5 py-2" href="{{ route('travel.post.index') }}" role="button">Xem tất cả</a>
                        </div>
                    </div>

                </div> 
					</div>						
					<div class="row">
						<div class="col-lg-6 travel-left">
                        @foreach($posts as $post)
                            <div class="single-travel media mb-4">
                                <a href="{{ route('travel.post.detail',['slug' => str_slug($post->title), 'id' => $post->id]) }}"><img class="img-fluid justify-content-center align-items-center mr-sm-3 " src="/upload/{{ $post->picture }}" alt="{{ $post->title }}"></a>
                                <div class="dates tiny white">
                                    <span>{{ date_format($post->updated_at, 'm') }}</span>
                                    <p class="white text-center">{{ date_format($post->updated_at, 'D') }}</p>
                                </div>
                                <div class="media-body mt-sm-0 mt-3  align-self-center">
                                    <a class="title-blog black" href="{{ route('travel.post.detail',['slug' => str_slug($post->title), 'id' => $post->id]) }}"><h6 class="mt-0 ">{{str_limit($post->title, 80)}}</h6></a>

                                <p class="">{{ str_limit($post->description, 200) }}
                                </p>
                                <div class="meta-bottom d-flex justify-content-between">
                                    <p class="primary-color"></p>
                                    <p class="primary-color"><span class="far primary-color fa-comments"></span> {{ count($post->comment) }} Bình luận</p>
                                </div>                           
                                </div>
                            </div>
                        @endforeach					
                        </div>
                        
					</div>
				</div>					

            <div class="chapter2">
              <img class="curve2" src="/templates/travel/assets/svgs/curve.png" alt="image">
            </div>
        </section>


        <section id="section5">

                <div class="container testimonials">
                    <div class="row">
                        <div class="col-md-8 offset-md-2 col-10 offset-1">
    
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                
                                <div class="carousel-inner mt-0">
                                <div class="carousel-item text-center active">                        
                                    <h5 class="m-0 pt-3 px-4  black">We have been in the market long enough to see the tour industry change, We are convinced this is a company that have been up to the standards</h5>
                                    <h6 class="mt-4 mb-0"><strong class="primary-color">Paul Mitchel</strong></h6>
                                    <p class=" m-0 subheading black">Turbino CEO</p>
                                </div>
                                <div class="carousel-item text-center">                        
                                    <h5 class="m-0 pt-3 black">We're delighted that many come back to travel on our escorted historical tours and small group cruises again and again. </h5>
                                    <h6 class="mt-4 mb-0"><strong class="primary-color">Ryan Sherlock </strong></h6>
                                    <p class=" m-0 subheading black">Turbino Travel Agent</p>
                                </div>
                                <div class="carousel-item text-center">                        
                                    <h5 class="m-0 pt-3 black">All in all, it was the trip of my dreams and I would happily use your services again in the future! I loved every minute of our trip and can't wait to plan another in the future. Please extend my thanks to Yolande as well.
                                        </h5>
                                    <h6 class="mt-4 mb-0"><strong class="primary-color">Monica</strong></h6>
                                    <p class=" m-0 subheading black">Client</p>
                                </div>
                                </div>
                                <a class="carousel-control-prev " href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only ">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                                </a>
                                <ol class="carousel-indicators mt-5">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1" class="action-color"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2" class="action-color"></li>
                                </ol>
                            </div>
                        </div>            
                    </div>
                </div>


        </section>

        <section id="sectioncta">

            <div class="container">
                <div class="row">
                    <div class="col-sm-12 "> 
                        <div class="bs-calltoaction  bs-calltoaction-default">
                            <div class="row">
                                <div class="col-md-8  cta-contents ">
                                    <h6 class="cta-title ml-lg-5 ml-2 mt-md-3 mt-0 bold white">Đặt tour ngay để nhận khuyến mãi khủng</h6>                            
                                </div>
                                <div class="col-md-4 mr-5  cta-button">
                                    <a href="{{ route('travel.tour.index') }}" target="_blank"  class="btn btn-block px-3 mr-5 btn-primary">Đặt tour</a>
                                </div>
                            </div>
                        </div>
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
        <meta property="og:image" content= "/templates/travel/assets/images/du-lich-dao-ly-son-quang-ngai-lysontrip-7.jpg" />
        <meta property="og:url" itemprop="url" content="{{ route('travel.index.index') }}">

        <meta itemprop="name" content="Tour du lịch Lý Sơn giá rẻ" />
        <meta itemprop="description" content="Du lịch đảo Lý Sơn - Đảo Bé giá rẻ với xe đưa đón và nghỉ dưỡng tại khách sạn Mường Thanh. Thuê xe du lịch đảo Lý Sơn. Thuê xe Đà Nẵng đi cảng Sa Kỳ, thuê xe Đà Nẵng Quảng Ngãi" />
        <meta itemprop="image" content= "/templates/travel/assets/images/du-lich-dao-ly-son-quang-ngai-lysontrip-7.jpg" />
@endsection