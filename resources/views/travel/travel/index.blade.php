@extends('templates.travel.master')
@section('content')
		<div class="tour-title not-fixed center-image">
            
            <img class="w-100 h-100" src="/templates/travel/assets/images/destinations.jpg" alt="Thuê xe du lịch Lý Sơn">
            <h1 class="white text-center front shadow-text center-text">DỊCH VỤ THUÊ XE DU LỊCH <br>ĐI LÝ SƠN</h1>  
            <img class="curve2 front" src="/templates/travel/assets/svgs/curve.png" alt="Thuê xe du lịch Lý Sơn">
    
        </div>
	<section id="section3" class="tour-list-sidebar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-lg-3 order-lg-first order-last mt-3 mt-lg-0">
                        <div class="form-container py-3">
                            <h4 class="black bold mt-3 px-4 pb-2 text-center">Lọc các<br>chuyến xe</h4>
                            <form id="sidebar-form" class="px-xl-5 px-lg-3 px-4" method="get"> 
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <select class="form-control" id="inlineFormInputName1" onchange="mySubmit(this.form)">
                                                <option value="">Điểm đi</option>
                                                <option value="Quảng Ngãi">TP Quảng Ngãi</option>
                                                <option value="Đà Nẵng"> TP Đà Nẵng</option>
                                                <option value="Chu Lai">Sân bay Chu Lai</option>
                                                <option value="Hội An">Phố cổ Hội An</option>
                                                <option value="Huế">Thành Phố Huế</option>
                                            </select>                                                      
                                            <div class="input-group-append">
                                                <div class="input-group-text">  <i class="fas fa-compass"></i></div>
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
                                  <a href="#"><img src="/templates/travel/assets/images/promotion.jpg" class="w-100 img-fluid mx-auto d-block mt-4" alt="Thuê xe du lịch Lý Sơn"></a>
                            </div>

                            <div class="col-lg-9 col-md-12 row" id="result">
                                @foreach($travels as $travel)
                                <div class="complete-image col-lg-6 col-md-6 mt-3">
                                    <a class="" href="{{ route('travel.travel.detail', $travel->slug) }}">
                                        <div class="destination-item">
                                            <img src="/upload/{{ $travel->picture }}" class="img-fluid destination-item" alt="costarica" >
                                            <h6 class="primary-color front">{{ $travel->title }}</h6>         
                                        </div>
                                    </a>    
                                </div>
                                @endforeach          
                            </div>
                    </div>
                </div>

        </section>

<script type="text/javascript">
    function mySubmit(theForm) {
        $.ajax({
            url: "{{ route('ajax.travel.travel') }}",
            type: 'GET',
            cache: false,
            data: { 
                "value1": $("#inlineFormInputName1").val(),
            },
            success: function(data){

            $('#result').html(data);
                console.log('value')
            }, 
            error: function() {
               alert("Có lỗi");
            }
       }); 
    };
</script>
@endsection
@section('meta')
        <title>Thuê xe du lịch Lý Sơn giá rẻ</title>
        <meta name="keywords" content="du lich ly son, tour du lich ly son, thuê xe Đà Nẵng Sa Kỳ, thue xe da nang di sa ky, tour du lịch Lý Sơn, thuê xe du lịch Lý Sơn, thuê xe đi Lý Sơn" />
        <meta name="description" content='Du lịch đảo Lý Sơn - Đảo Bé giá rẻ với xe đưa đón và nghỉ dưỡng tại khách sạn Mường Thanh. Thuê xe du lịch đảo Lý Sơn. Thuê xe Đà Nẵng đi cảng Sa Kỳ, thuê xe Đà Nẵng Quảng Ngãi' />
        <meta name="news_keywords" content="du lich ly son, tour du lich ly son, du lịch Lý Sơn giá rẻ, tour du lịch Lý Sơn, thuê xe du lịch Lý Sơn, thuê xe đi Lý Sơn">

        <meta property="og:title" content="Thuê xe du lịch Lý Sơn giá rẻ" />
        <meta property="og:description" content="Du lịch đảo Lý Sơn - Đảo Bé giá rẻ với xe đưa đón và nghỉ dưỡng tại khách sạn Mường Thanh. Thuê xe du lịch đảo Lý Sơn. Thuê xe Đà Nẵng đi cảng Sa Kỳ, thuê xe Đà Nẵng Quảng Ngãi" />
        <meta property="og:image" content= "/templates/travel/assets/images/destinations.jpg" />
        <meta property="og:url" itemprop="url" content="{{ route('travel.travel.index') }}">

        <meta itemprop="name" content="Thuê xe du lịch Lý Sơn giá rẻ" />
        <meta itemprop="description" content="Du lịch đảo Lý Sơn - Đảo Bé giá rẻ với xe đưa đón và nghỉ dưỡng tại khách sạn Mường Thanh. Thuê xe du lịch đảo Lý Sơn. Thuê xe Đà Nẵng đi cảng Sa Kỳ, thuê xe Đà Nẵng Quảng Ngãi" />
        <meta itemprop="image" content= "/templates/travel/assets/images/destinations.jpg" />
@endsection