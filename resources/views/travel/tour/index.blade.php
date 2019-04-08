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
                    <div class="col-md-12 col-lg-3 order-lg-first order-last mt-4 mt-lg-0">
                        <div class="form-container py-3">
                            <h4 class="black bold mt-3 px-4 pb-2 text-center">Lọc và sắp xếp</h4>
                            <form id="sidebar-form" class="px-xl-5 px-lg-3 px-4" method="get"> 
                               <div class="form-group row">
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <select class="form-control" id="inlineFormInputName" onchange="mySubmit(this.form)">
                                                <option value="">Điểm đi</option>
                                                <option value="Quảng Ngãi">Quảng Ngãi</option>
                                                <option value="Đà Nẵng">Đà Nẵng</option>
                                                <option value="Chu Lai">Chu Lai</option>
                                                <option value="Hội An">Hội An</option>
                                            </select>                                                    
                                            <div class="input-group-append">
                                                <div class="input-group-text">  <i class="fas fa-search"></i>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                                <select class="form-control" id="inlineFormInputName1" onchange="mySubmit(this.form)">
                                                    <option value="">Tất cả khách sạn, nhà nghỉ</option>
                                                    <option value="Mường Thanh">Khách sạn Mường Thanh</option>
                                                    <option value="Bình Yên">Nhà nghỉ Bình Yên</option>
                                                    <option value="Định Sau">Nhà nghỉ Định Sau</option>
                                                    <option value="Quỳnh Anh">Nhà nghỉ Quỳnh Anh</option>
                                                    <option value="Tiên Tri">Nhà nghỉ Tiên Tri</option>
                                                </select>                                                    
                                                <div class="input-group-append">
                                                    <div class="input-group-text">  <i class="fas fa-compass"></i>
                                                    </div>
                                                </div>
                                            </div>
                                    
                                        </div>
                                    
                                </div>  
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <select class="form-control" id="inlineFormInputName2" onchange="mySubmit(this.form)">
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                            </select>
                                            <div class="input-group-append">
                                                <div class="input-group-text"><i class="fas fa-chevron-down"></i></div>
                                            </div>
                                        </div>                                         
                                    </div>
                                </div>   
                                <div class="form-group row">
                                        <div class="col-sm-12">
                                            <div class="input-group">
                                                <select class="form-control" id="inlineFormInputName3" onchange="mySubmit(this.form)">
                                                    <option value="1">Giá tăng dần</option>
                                                    <option value="2">Giá giảm dần</option>
                                                </select>
                                                    <div class="input-group-append">
                                                    <div class="input-group-text"><i class="fas fa-sort-amount-up"></i>

                                                    </div>
                                                </div>
                                            </div>                                         
                                        </div>
                                    </div>   
                                
                                
                            </form>
                            </div>

                            <div class="more-info mx-auto my-4">
                                <h6 class="black semibold text-center mx-4 mt-3 mb-3 info-title">Liên hệ nhanh</h6>
                                <div class="pb-2">                      
                            
                                    <a href="tel:0986841841"><h5 class="grey text-center tel-info"><i class="fas primary-color fa-phone faa-tada animated mr-2 grey my-lg-0 mb-1"></i>0986.841.841</h5></a>  
                                    <a href="mailto:taiembkdn@gmail.com"><h5 class="grey text-center mail-info"><i class="fas fa-envelope faa-horizontal animated primary-color mr-2"></i>taiembkdn@gmail.com</h5></a>                        
                                </div>
                            </div>

                            <a href="#"><img src="/templates/travel/assets/images/promotion.jpg" class="w-100 img-fluid mx-auto d-block mt-4" alt="Tour du lịch Lý Sơn"></a>

                    </div>
                    <div class="col-md-12 col-lg-9 order-lg-first order-last mt-4 mt-lg-0 row" id="result">
                        @foreach($tours as $tour)
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                            <div class="card mb-4">
                                <a class="img-card" href="{{ route('travel.tour.detail', $tour->slug) }}">
                                <small class="white front tiny"><span class="far fa-clock mr-2 white"></span><br>{{ substr($tour->time, 0, 7) }} <br>{{ substr($tour->time, -7) }}</small>
                                <div class="review-card"><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i>  <i class="fas fa-star"></i><i class="fas fa-star-half"></i> <span class="tiny white">{{ count($tour->rate) }} reviews</span></div>
                                <div class="bottom-tour-background"></div>                         
                                <img src="/upload/{{ $tour->picture }}" alt="{{ $tour->title }}" />
                                </a>
                                <div class="card-content"> 
                                    <div class="row align-items-center">  
                                        <div class="col-12">                         
                                            <h6 class="black mb-2"><a href="{{ route('travel.tour.detail', $tour->slug) }}" target="_blank">{{ $tour->title }}</a></h6>
                                        </div>  
                                        <div class="col-12 align-middle row">
                                            <div class="col-lg-8 col-md-12" style="padding-right: 0px">
                                            @foreach($tour->stick as $stick)
                                            <a class="btn btn-primary mx-1 my-1 btn-sm " href="{{ route('travel.tour.stick', $stick->slug_name) }}" role="button">{{ $stick->name }}</a>
                                            @endforeach
                                            </div>
                                            <div class="col-lg-4 col-md-12" style="padding-right: 0px;padding-left: 0px">
                                            <p class="text-right text-primary font-weight-bold">{{ number_format($tour->recost,0, ',','.') }} VND</p>
                                            </div>
                                        </div>
                                        <div>
                                        </div>
                                    </div>                                                                                               
                                </div>
                            </div>
                        </div>
                        @endforeach
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                        <div class="row mb-lg-0 mb-4 float-right">
                                            <div class="col-12 mt-3">
                                                   <div class='pagination'>
                                                       <div class='current'><h6>1</h6></div>
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
                    </section>
<script type="text/javascript">
    function mySubmit(theForm) {
        $.ajax({
            url: "{{ route('ajax.travel.tour') }}",
            type: 'GET',
            cache: false,
            data: { 
                "from": $("#inlineFormInputName").val(),
                "hotel": $("#inlineFormInputName1").val(),
                "people": $("#inlineFormInputName2").val(),
                "order": $("#inlineFormInputName3").val()
            },
            success: function(data){

            $('#result').html(data);
                console.log('value')
            }, 
            error: function() {
               console.log("Có lỗi");
            }
       }); 
    };
</script>
@endsection
@section('meta')
        <title>Tour du lịch Lý Sơn giá rẻ</title>
        <meta name="keywords" content="du lich ly son, tour du lich ly son, du lịch Lý Sơn giá rẻ, tour du lịch Lý Sơn, thuê xe du lịch Lý Sơn, thuê xe đi Lý Sơn" />
        <meta name="description" content='Du lịch đảo Lý Sơn - Đảo Bé giá rẻ với xe đưa đón và nghỉ dưỡng tại khách sạn Mường Thanh. Thuê xe du lịch đảo Lý Sơn. Thuê xe Đà Nẵng đi cảng Sa Kỳ, thuê xe Đà Nẵng Quảng Ngãi' />
        <meta name="news_keywords" content="du lich ly son, tour du lich ly son, du lịch Lý Sơn giá rẻ, tour du lịch Lý Sơn, thuê xe du lịch Lý Sơn, thuê xe đi Lý Sơn">

        <meta property="og:title" content="Tour du lịch Lý Sơn giá rẻ" />
        <meta property="og:description" content="Du lịch đảo Lý Sơn - Đảo Bé giá rẻ với xe đưa đón và nghỉ dưỡng tại khách sạn Mường Thanh. Thuê xe du lịch đảo Lý Sơn. Thuê xe Đà Nẵng đi cảng Sa Kỳ, thuê xe Đà Nẵng Quảng Ngãi" />
        <meta property="og:image" content= "/templates/travel/assets/images/search.jpg" />
        <meta property="og:url" itemprop="url" content="{{ route('travel.index.index') }}">

        <meta itemprop="name" content="Tour du lịch Lý Sơn giá rẻ" />
        <meta itemprop="description" content="Du lịch đảo Lý Sơn - Đảo Bé giá rẻ với xe đưa đón và nghỉ dưỡng tại khách sạn Mường Thanh. Thuê xe du lịch đảo Lý Sơn. Thuê xe Đà Nẵng đi cảng Sa Kỳ, thuê xe Đà Nẵng Quảng Ngãi" />
        <meta itemprop="image" content= "/templates/travel/assets/images/search.jpg" />
@endsection