@extends('templates.travel.master')
@section('content')
	<div class="tour-title">         
            <img  class="w-100 h-100" src="/templates/travel/assets/images/amsterdamtitle.jpg" alt="{{ $travels->title }}">
            <h1 class="white text-center shadow-text center-text">{{ $travels->title }}</h1>    

            <div >
                <a class="smooth-scroll" href="#read-tour">
                    <img class="curvechevron" src="/templates/travel/assets/svgs/curvesingle.png" alt="thuê xe du lịch Lý Sơn">
                    <div class="chevroncurve">
                        <i class="fas  hoverchevron white fa-chevron-down"></i>
                    </div>
                </a>
            </div>
        </div>
         <!-- End section 1-->

         <section id="section3" class="tour-list-sidebar tour-list-sidebar-2-col">
      
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12 col-md-6 col-lg-3 ml-lg-5 ml-sm-3 order-lg-first order-last mt-3 mt-lg-0">
                            


                            <div class="form-container px-3 py-3" id="result">

                                <h4 class="black bold mt-3 px-4 pb-2 text-center">Đặt xe</h4>

                                <form id="myForm" class="px-xl-3 px-lg-3 px-3" method="POST" action=""> 
                                        {{ csrf_field() }}
                                    <div class="form-group text-center">
                                        <label class="" for="inputname">Họ và tên</label>
                                        <div class="input-group">
                                        <input type="text" class="form-control" id="inputname" placeholder="Your name" required>
                                            <div class="input-group-append">
                                                <div class="input-group-text"><i class="fas fa-search"></i> </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group text-center">
                                        <label class="" for="inputphone">Số điện thoại</label>
                                        <div class="input-group">
                                            <input type="number" class="form-control" id="inputphone" placeholder="Your telephone number" required>
                                            <div class="input-group-append">
                                                <div class="input-group-text"><i class="fas fa-phone"></i> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group text-center departure">
                                        <label class="" for="datepicker">Ngày đặt</label>
                                        <div class="input-group">
                                            <input required type="text" id="datepicker" placeholder="Choose your Date" class="form-control">
                                            <div class="input-group-append">
                                                <div class="input-group-text"><i class="fas fa-calendar"></i> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <div class="input-group">
                                                <select class="form-control" id="inlineFormInputName1" onclick="">
                                                    <option value="4">Số chỗ</option>
                                                    <option value="4">4</option>
                                                    <option value="7">7</option>
                                                    <option value="16">16</option>
                                                    <option value="25">25</option>
                                                    <option value="36">36</option>
                                                    
                                                </select>                                                      
                                                <div class="input-group-append">
                                                    <div class="input-group-text">  <i class="fas fa-compass"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                    <div class="form-group text-center">
                                        <label class="text-center" for="inputtours">Nội dung</label>
                                        <textarea required class="form-control" id="inputtours" placeholder="Your message" style="height: 90px"></textarea>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <button type="submit" class="btn col-sm-12 my-2 btn-primary">Đặt ngay</button>
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

                        <div class="col-xs-12 col-md-12 col-lg-8 single-tour">
                            <h4 id="read-tour" class="black text-left mb-3 bold">{{ $travels->title }}</h4>
                        
                            
                            {!! $travels->detail !!}

                            <div class="separator-tour"></div>

                            <ul class="single-tour-container">
                                <li class="d-flex">
                                    <div class="tour-item-title list-font">Xuất phát tại</div>
                                    <div class="tour-item-description list-font">{{ $travels->travel_from }}</div>
                                </li>
                                
                                <li class="d-flex">
                                    <div class="tour-item-title list-font">Điểm dừng chân</div>
                                    <div class="tour-item-description list-font">{{ $travels->travel_to }}</div>
                                </li>
                                
                                <li class="d-flex">
                                    <div class="tour-item-title list-font">Khoảng cách</div>
                                    <div class="tour-item-description list-font">120km</div>
                                </li>
                                <li class="d-flex">
                                    <div class="tour-item-title list-font">Thời gian</div>
                                    <div class="tour-item-description list-font">2h30p</div>
                                </li>
                                
                            </ul> 
                            <div class="separator-tour"></div>

                            <h6 class="black bold mt-4 mb-3">Bảng giá Thuê xe ô tô sân bay Đà Nẵng đến Cảng Sa Kỳ có Tài xế</h6>

                            <p>Đây là bảng giá xe rẻ nhất hiện nay của công ty du lịch Hoàng Phúc,<strong> giá trên đã bao gồm TVA và đưa đón tận nơi theo yêu cầu.</strong> Chúng tôi luôn có <strong>tổng đài điện thoại 0944.22.44.55 và chat Online miễn phí để phục vụ quý khách</strong></p>

                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Loại xe</th>
                                        <th scope="col">Số chỗ</th>
                                        <th scope="col">Giá tiền</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php $i=0 @endphp
                                @foreach($travels->car as $car)
                                    @php $i++ @endphp
                                    @if($car->seat == 1)
                                    <tr>
                                        <th scope="row">{{ $i }}</th>
                                        <td>Đi ké xe</td>
                                        <td>{{ $car->seat }} Chỗ</td>
                                        <td>{{ number_format($car->cost,0,',','.') }} VND</td>
                                    </tr>
                                    @else
                                    <tr>
                                        <th scope="row">{{ $i }}</th>
                                        <td>Thuê xe</td>
                                        <td>{{ $car->seat }} Chỗ</td>
                                        <td>{{ number_format($car->cost,0,',','.') }} VND</td>
                                    </tr>
                                    @endif
                                @endforeach
                                </tbody>
                            </table>
                            <div class="separator-tour"></div>
                            <h4 class="text-center primary-color">Thuê xe ô tô sân bay Đà Nẵng đến Cảng Sa Kỳ sẽ được <span style="display:inline-block;font-size:30px;font-weight:600">giảm giá 20%</span> khi đặt luôn chiều về</h4>
                            <center><a href="tel:0944224455" class="btn-primary btn">Gọi hotline 0944224455</a></center>
                            <div class="">    
                                <div class="tour-schedule">
                                    <h6 class="black bold mt-4 mb-3">Chất lượng xe của chúng tôi</h6>

                                    <p>Tất các các xe của chúng tôi, điều là xe mới, phong phú về loại, rất tiện ích cho việc đi du lịch gia đình, du lịch bạn bè và du lịch theo đoàn.
                                    Chúng tôi đã có kinh nghiệm lâu năm, trong du lịch lý sơn, nên sẽ ưu tiên đúng giờ và di chuyển an toàn để cho quý khách có 1 kỳ nghỉ tại Lý Sơn tốt nhất, 
                                    nếu sai giờ, chúng tôi xin nhận hoàn toàn trách nhiệm và đền bù.
                                    </p>

                                    <div class="row">
                                      <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-0 pt-2">
                                        <img src="/templates/travel/assets/images/xe-du-lich-ly-son-1.png" class="img-fluid" alt="thue xe da nang di cang sa ky ly son">
                                        <p class="sub-image text-center">Dàn xe mới, phong phú và đa dạng</p>
                                      </div>
                                      <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-0 pt-2">
                                        <img src="/templates/travel/assets/images/xe-du-lich-ly-son-2.png" class="img-fluid" alt="thue xe da nang di cang sa ky ly son">
                                        <p class="sub-image text-center">Nội thất sang trọng tiện nghi du lịch</p>
                                      </div>
                                      <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-0 pt-2">
                                        <img src="/templates/travel/assets/images/xe-du-lich-ly-son-3.png" class="img-fluid" alt="thue xe da nang di cang sa ky ly son">
                                        <p class="sub-image text-center">Tài xế chu đáo, chia sẻ kinh nghiệm du lịch</p>
                                      </div>
                                      <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-0 pt-2">
                                        <img src="/templates/travel/assets/images/xe-du-lich-ly-son-4.png" class="img-fluid" alt="thue xe da nang di cang sa ky ly son">
                                        <p class="sub-image text-center">Xe 4-7-16-36 chỗ phục vụ mọi khách du lịch</p>
                                      </div>
                                    </div>
                                    <div class="separator-tour"></div>

                                    <div class="list-font semibold mt-3">Tham khảo thêm giá khi đặt xe đi đến Cảng Sa Kỳ - Lý Sơn</div>
                                    <ol class="ordered-list red mt-3">
                                    @foreach($mores as $more)
                                        <li class="d-flex"><p><a href="{{ route('travel.travel.detail', $more->slug) }}">{{ $more->title }} - Giảm giá 20% cho chiều về</a></p></li>
                                    @endforeach
                                    </ol>

                                    <h6 class="black bold mt-4 mb-3">Hướng dẫn di chuyển đến đảo Lý Sơn</h6>

     

                                    <p>Lý Sơn là một huyện đảo của tỉnh Quảng Ngãi, nằm cách Cảng Sa Kỳ khoảng 30km. Vì thế để di chuyển đến đảo Lý Sơn, các bạn cần phải di chuyển ra cảng Sa Kỳ rồi sau đó bắt tàu Super biển đông để đi ra đảo Lý Sơn</p> 
                                    <center><img class="img-fluid" src="/templates/travel/assets/images/sa-ky-ly-son.jpg" alt="thue xe di cang sa ky"></center>
                                    <p class="text-center">Đảo Lý Sơn cách đất liền 30km</p>
                                    <div class="list-font semibold mt-3">Hướng cách di chuyển tiết kiệm, nhanh chóng và an toàn nhất</div>  

                                    <p><span style="color:#f80; font-size:18px; font-weight:600;">Bước 01:</span> Để di chuyển đến Cảng Sa Kỳ, chúng ta có thể kết hợp, di chuyển bằng máy bay hoặc tàu lửa đến các nhà ga, 
                                    sân bay gần đảo Cảng Sa Kỳ nhất như sân bay Chu Lai, sân bay Đà Nẵng, ga Quảng Ngãi, hoặc thành phố Hội An, thành phố Đà Nẵng và Thành Phố Huế.</p>

                                    <p><span style="color:#f80; font-size:18px; font-weight:600;">Bước 02:</span> Sau đó các bạn thuê 1 ôtô khách giá rẻ để đi đến cảng Sa Kỳ, ôtô khách có thể là xe 4 chỗ, 7 chỗ hoặc 16 chỗ, tùy số lượng người di chuyển. 
                                    Nếu các bạn chỉ đi có 1-2 người thì có thể liên hệ với chúng tôi để có thể sắp xếp xe ké, mà không cần phải thuê nguyên xe. 
                                    Hoặc các bạn có thể tham khảo bảng giá <strong>Thuê xe ô tô sân bay Đà Nẵng đến Cảng Sa Kỳ</strong> ở phía dưới của lysontrip. Hiện đang có <strong>khuyến mãi giảm 20%</strong> giá xe khi đặt chuyến về</p>

                                    <p><span style="color:#f80; font-size:18px; font-weight:600;">Bước 03:</span> Sau khi đến được cảng Sa Kỳ, các bạn phải mua vé tàu để di chuyển đến đảo Lý Sơn. Nếu các bạn bị say tàu hoặc say sóng, 
                                    thì nên lựa chọn loại tàu lớn, để cho chuyến du lịch được trọn vẹn nhất</p>

                                    <div class="list-font semibold mt-3">Tham khảo giá khi đặt xe đi đến Cảng Sa Kỳ</div>

                                    <ol class="ordered-list red mt-3">
                                    @foreach($mores as $more)
                                        <li class="d-flex"><p><a href="{{ route('travel.travel.detail', $more->slug) }}">{{ $more->title }} - Giảm giá 20% cho chiều về</a></p></li>
                                    @endforeach
                                    </ol>

                                    <h6 class="black bold mt-4 mb-3">Mua vé tàu từ Cảng Sa Kỳ đến Đảo Lý Sơn</h6>
                                    <p>Tàu Super Biển Đông là con tàu hiện đại đóng mới hoàn toàn bằng vỏ hợp kim nhôm ý, lắp đặt 02 máy tốc độ cao Yanmar (Nhật Bản) và các thiết bị hiện đại, tàu gồm 139 ghế và 01 phòng VIP, có tốc độ tối đa 30 hải lý/giờ, tương đương 30–35 phút, khoảng cách đảo Lý Sơn với đất liền sẽ được gần hơn, tàu Super Biển Đông phục vụ 3-6 chuyến/ngày (tùy theo các ngày).</p>
                                    <h3 class="text-center pt-3">Bảng giờ tàu đi từ cảng Sa Kỳ đến Đảo Lý Sơn</h3>
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Tên tàu</th>
                                                <th scope="col">Giờ đi - Giờ đến</th>
                                                <th scope="col">Giá tiền</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Super Biển Đông</td>
                                                <td>7h30 - 8h05</td>
                                                <td>170k</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Super 2 Biển Đông</td>
                                                <td>9h00 - 9h35</td>
                                                <td>170k</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Super Biển Đông</td>
                                                <td>10h20 - 10h55</td>
                                                <td>170k</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">4</th>
                                                <td>Super 2 Biển Đông</td>
                                                <td>13h00 - 13h35</td>
                                                <td>170k</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">5</th>
                                                <td>Super Biển Đông</td>
                                                <td>15h00 - 15h35</td>
                                                <td>170k</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <center><a href="tel:0944224455" class="btn-primary btn">Gọi hotline 0944224455</a></center>
                                    <div class="separator-tour"></div>
                                    <h6 class="black bold mt-4 mb-3">Các tour du lịch</h6>
                                    <ol class="ordered-list red">
                                    @foreach($tours as $tour)
                                        <li class="d-flex"><p><a href="{{ route('travel.tour.detail', $tour->slug) }}">{{ $tour->title }} - Giảm giá 20% cho chiều về</a></p></li>
                                    @endforeach
                                    </ol>
                                </div>    
                            </div>    

                        </div>

                    </div>

                </div>
                
            </section>
<script type="text/javascript">
    $('#myForm').submit(function (e) {
        e.preventDefault();

        $.ajax({
            type: 'POST',
            cache: false,
            url: "{{ route('ajax.travel.checktravel', $travels->id) }}",
            data: { 
                "_token": '{{ csrf_token() }}',
                "name": $("#inputname").val(),
                "phone": $("#inputphone").val(),
                "date": $("#datepicker").val(),
                "seat": $("#inlineFormInputName1").val(),
                "message": $("#inputtours").val(),
            },
            success: function (data) {
                $('#result').html(data);
                console.log('Submission was successful.');
            },
            error: function (data) {
                console.log('An error occurred.');
                console.log(data);
            },
        });
    });
</script>
@endsection
@section('meta')
        <title>{{ $travels->title }}</title>
        <meta name="keywords" content="du lich ly son, tour du lich ly son, thuê xe Đà Nẵng Sa Kỳ, thue xe da nang di sa ky, tour du lịch Lý Sơn, thuê xe du lịch Lý Sơn, thuê xe đi Lý Sơn" />
        <meta name="description" content='Du lịch đảo Lý Sơn - Đảo Bé giá rẻ với xe đưa đón và nghỉ dưỡng tại khách sạn Mường Thanh. Thuê xe du lịch đảo Lý Sơn. Thuê xe Đà Nẵng đi cảng Sa Kỳ, thuê xe Đà Nẵng Quảng Ngãi' />
        <meta name="news_keywords" content="du lich ly son, tour du lich ly son, thuê xe Đà Nẵng Sa Kỳ, thue xe da nang di sa ky, tour du lịch Lý Sơn, thuê xe du lịch Lý Sơn, thuê xe đi Lý Sơn">

        <meta property="og:title" content="{{ $travels->title }}" />
        <meta property="og:description" content="Du lịch đảo Lý Sơn - Đảo Bé giá rẻ với xe đưa đón và nghỉ dưỡng tại khách sạn Mường Thanh. Thuê xe du lịch đảo Lý Sơn. Thuê xe Đà Nẵng đi cảng Sa Kỳ, thuê xe Đà Nẵng Quảng Ngãi" />
        <meta property="og:image" content= "/upload/{{ $travels->picture }}" />
        <meta property="og:url" itemprop="url" content="{{ route('travel.travel.detail', $travels->slug) }}">

        <meta itemprop="name" content="{{ $travels->title }}" />
        <meta itemprop="description" content="Du lịch đảo Lý Sơn - Đảo Bé giá rẻ với xe đưa đón và nghỉ dưỡng tại khách sạn Mường Thanh. Thuê xe du lịch đảo Lý Sơn. Thuê xe Đà Nẵng đi cảng Sa Kỳ, thuê xe Đà Nẵng Quảng Ngãi" />
        <meta itemprop="image" content= "/upload/{{ $travels->picture }}" />
@endsection