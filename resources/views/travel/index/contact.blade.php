@extends('templates.travel.master')
@section('content')
	<div class="tour-title not-fixed ">
            
                <img class="w-100 h-100" src="/templates/travel/assets/images/du-lich-dao-ly-son-quang-ngai-lysontrip-7.jpg" alt="du lịch Lý Sơn">
                <h1 class="white text-center front shadow-text center-text">LIÊN HỆ</h1>  
                <img class="curve2 front" src="/templates/travel/assets/svgs/curvegrey.png" alt="du lịch Lý Sơn">
        
            </div>
         <!-- End section 1-->

    

          <!-- Section 2 about us-->

        <section id="pagesection" >
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-12 order-md-first order-last">
@if(Session::has('msg'))
  <div class="alert alert-success">{{ Session::get('msg')}}</div>
@endif
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                            <form id="contact-form" method="post" action="{{ route('travel.index.contact') }}" role="form">
                                {{ csrf_field() }}
                                    <div class="messages"></div>
                                
                                    <div class="controls">
                                
                                        <div class="row">

                                                <style>
                                                        #not_human { display: none }
                                                     </style>

                                                <input type="text" id="not_human" name="name" />

                                            <div class="col-md-6">
                                                <div class="form-group text-center">
                                                    <label for="form_name">Họ *</label>
                                                    <input id="form_name" type="text" name="firstname" class="form-control" placeholder="Điền họ của bạn *" required="required" data-error="Firstname is required.">
                                                    <div class="help-block with-errors tiny mt-2"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group text-center">
                                                    <label for="form_lastname">Tên *</label>
                                                    <input id="form_lastname" type="text" name="lastname" class="form-control" placeholder="Điền tên của bạn *" required="required" data-error="Lastname is required.">
                                                    <div class="help-block with-errors tiny mt-2"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group text-center">
                                                    <label for="form_email">Email *</label>
                                                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Điền địa chỉ email của bạn *" required="required" data-error="Valid email is required.">
                                                    <div class="help-block with-errors tiny mt-2"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group text-center">
                                                    <label for="form_phone">Số điện thoại *</label>
                                                    <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Điền số điện thoại của bạn *">
                                                    <div class="help-block with-errors tiny mt-2"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group text-center">
                                                    <label for="form_message">Tin nhắn *</label>
                                                    <textarea id="form_message" name="message" class="form-control" placeholder="Viết tin nhắn" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                                                    <div class="help-block with-errors tiny mt-2"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <input type="submit" class="btn btn-primary px-4 btn-send" value="Gửi">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 mt-4">
                                                <p class="text-muted"><strong>*</strong> Các trường trên đều bắt buộc.</p>
                                            </div>
                                        </div>
                                    </div>
                                
                                </form>
                    </div>

                    <div class="col-md-5 col-12 mb-5 text-left">
                        <h3 class="black bold front mb-2 mt-2 ">Đặt tour ngay hôm nay<br> để được giảm giá</h3>
                        <h5 class="primary-color section-title mb-3">Giờ mở cửa: 08:00 A.M. 18.00 P.M hàng ngày</h5>
                        <div class="separator"></div>     
                        <p class=" text-block">Dịch vụ của chúng tôi luôn mở cửa chào đón các bạn với những đơn vị đồng hành nổi tiếng như: 
                        Công ty TNHH & DL Hoàng Phúc, Khách sạn Mường Thanh Lý Sơn và các đơn vị khác.</p>
                        <p></p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8 offset-md-2 text-center  col-10 offset-1 mt-5">
                        <div  class="text-center white-popup">
                            
                            <a href="https://www.facebook.com/hoangphuc.car.quangngai" target="_blank">
                                <i class="fab fa-facebook-f"></i></a> &nbsp;

                            <a href="https://www.facebook.com/hoangphuc.car.quangngai" target="_blank">
                                <i class="fab fa-twitter"></i></a>&nbsp;

                            <a href="https://www.facebook.com/hoangphuc.car.quangngai" target="_blank">
                                <i class="fab fa-google-plus-g"></i>
                            </a>

                        </div>  
                    </div>    
                </div>     
            </div>
        </section>

            <section class="map-fullwidth"> <div id="map"></div>
                <script>
                    function initMap() {
                    var uluru = {lat: 16.0646485, lng: 108.1825003};
                    var map = new google.maps.Map(document.getElementById('map'), {
                        zoom: 14,
                        center: uluru
                    });
                    var marker = new google.maps.Marker({
                        position: uluru,
                        map: map
                    });
                    }
                </script>
                <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAX6LW8_BIKXNVzx205L88xRdjfaf5dpfg&callback=initMap">
                </script>
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
        <meta property="og:url" itemprop="url" content="{{ route('travel.index.contact') }}">

        <meta itemprop="name" content="Tour du lịch Lý Sơn giá rẻ" />
        <meta itemprop="description" content="Du lịch đảo Lý Sơn - Đảo Bé giá rẻ với xe đưa đón và nghỉ dưỡng tại khách sạn Mường Thanh. Thuê xe du lịch đảo Lý Sơn. Thuê xe Đà Nẵng đi cảng Sa Kỳ, thuê xe Đà Nẵng Quảng Ngãi" />
        <meta itemprop="image" content= "/templates/travel/assets/images/du-lich-dao-ly-son-quang-ngai-lysontrip-7.jpg" />
@endsection