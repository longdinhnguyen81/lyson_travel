@extends('templates.travel.master')
@section('content')
    <div class="tour-title not-fixed">
            
            <img class="w-100 h-100" src="/templates/travel/assets/images/404.jpg">
            <h1 class="white text-center front shadow-text super-big center-text">404<br><span><h1 class="white text-center shadow-text">Error</h1></span></h1>  
            <img class="curve2 front" src="/templates/travel/assets/svgs/curve.png">
    
        </div>
         <!-- End section 1-->
     
    

          <!-- Section 2 about us-->

        <section id="section3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2  px-lg-5 col-12 text-center">
                        <h3 class="black bold front mb-2">Không tìm thấy nội dung bạn yêu cầu
                        </h3>
                        <div class="mt-5">
                            <a href="/" class="d-lg-inline-block d-block ">
                                <button class="btn btn-primary px-lg-4 px-4 mr-lg-3 mr-0 mb-lg-0 mb-3">
                                    Trang chủ
                                </button>
                            </a>   
                                
                            <a href="{{ route('travel.tour.index') }}" class="d-lg-inline-block d-block ">
                                <button class="btn btn-outline-danger px-lg-4 px-3">
                                        Tìm kiếm tour
                                    <i class="ml-2 fas fa-search"></i>
                                </button>
                            </a>   
                        </div>                       
                    </div>
                </div>
            </div>
        </section>
@stop