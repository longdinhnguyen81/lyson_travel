@extends('templates.travel.master')
@section('content')
	<div class="tour-title">         
            <img  class="w-100 h-100" src="/templates/travel/assets/images/amsterdamtitle.jpg" alt="tour du lịch lý sơn giá rẻ">
            <h1 class="white text-center shadow-text center-text">TOUR DU LỊCH LÝ SƠN</h1>    

            <div >
                <a class="smooth-scroll" href="#read-tour">
                    <img class="curvechevron" src="/templates/travel/assets/svgs/curvesingle.png" alt="Tour du lịch Lý Sơn">
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
                            
                            <div class="mb-lg-3 mb-4 mt-lg-0 mt-4 text-center">
                                <a href="#gallery-1" role="button" class="btn-gallery mb-2 d-lg-inline-block d-block">
                                    <span id="btnFA" class="btn btn-outline-danger pt-2 mr-1  px-3">
                                            Xem Album
                                        <i class="ml-2 fas fa-images"></i>
                                    </span>
                                </a>
                                <div id="gallery-1" class="hidden">
                                    @foreach($pictures as $picture)
                                        <a href="/upload/{{ $picture->name }}">Du lịch Lý Sơn</a>
                                    @endforeach
                                </div>
                                                                                           
                            </div>


                            <div class="form-container px-3 py-3" id="result">
                                <h4 class="black bold mt-3 px-4 pb-2 text-center">Đặt tour</h4>

                                <form id="sidebar-form" class="px-xl-3 px-lg-3 px-3" method="POST" action=""> 
                                    {{ csrf_field() }}
                                    <div class="form-group text-center">
                                        <label class="" for="inputname">Họ và tên</label>
                                        <input type="text" class="form-control" id="inputname" placeholder="Họ và tên của bạn" required>
                                    </div>

                                    <div class="form-group text-center">
                                        <label class="" for="inputpeople">Số người</label>
                                        <input type="number" class="form-control" id="inputpeople" placeholder="Nhập số lượng người" required>
                                    </div>
                                    <div class="form-group text-center">
                                        <label class="" for="inputphone">Số điện thoại</label>
                                        <input type="number" class="form-control" id="inputphone" placeholder="Số điện thoại của bạn" required>
                                    </div>
                                    <div class="form-group text-center departure">
                                        <label class="" for="datepicker">Ngày đặt</label>
                                        <div class="input-group">
                                            <input type="text" id="datepicker" placeholder="Choose your Date" class="form-control" required>
                                            <div class="input-group-append">
                                                <div class="input-group-text"><i class="fas fa-calendar"></i> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group text-center">
                                        <label class="text-center" for="inputtours">Nội dung</label>
                                        @if($tour->hotel == 'Khách Sạn')
                                            <textarea class="form-control" id="inputtours" placeholder="Your message" style="height: 90px" required></textarea>
                                        @else
                                            <textarea class="form-control" id="inputtours" placeholder="Mhà nghỉ bạn muốn ở" style="height: 90px" required></textarea>
                                        @endif
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
  
                            <a href="#"><img src="/upload/{{ $tour->picture }}" class="w-100 img-fluid mx-auto d-block mt-4" alt="{{ $tour->title }}"></a>
                        </div>

                        <div class="col-xs-12 col-md-12 col-lg-8   single-tour">
                            <h4 id="read-tour" class="black text-left mb-3  bold">{{ $tour->title }}</h4>
                        
                            <div class="row">  

                                <div class="col-lg-3 col-sm-4 col-12 text-left">
                                    <h6 class="primary-color semibold price-big">{{ number_format($tour->recost, 0, ',', '.') }}<span class="semibold subtitle">&nbsp;/Người</span> </h6>
                                </div>

                                <div class="col-sm-6 col-12 text-right ml-sm-0">
                                    <div class=" ml-0 mt-1">
                                        @foreach($tour->stick as $stick)
                                        <a class="btn btn-primary px-3  text-left mr-1 mb-1 btn-sm" href="#" role="button">{{ $stick->name }}</a>
                                        @endforeach
                                    </div>
                                </div>

                            </div>
                            
                            <div class="separator-tour"></div>

                            <div class="row">
                                <div class="col-lg-3 col-6 order-1 order-lg-1">
                                    <img class="svgcenter mb-2 age-icon" src="/templates/travel/assets/svgs/age.png" alt="Số người đi tour lý sơn">
                                </div>
                                <div class="col-lg-3 col-6 order-2 order-lg-2">
                                    <img class="svgcenter mt-2 mb-2 duration-icon" src="/templates/travel/assets/svgs/duration.png" alt="Thời gian đi tour lý sơn">
                                </div>
                                <div class="col-lg-3 col-6 order-5 order-lg-3">
                                    <img class="svgcenter mb-2 location-icon" src="/templates/travel/assets/svgs/location.png" alt="Địa điểm xuất phát đi lý sơn">
                                </div>
                                <div class="col-lg-3 col-6 order-6 order-lg-4">
                                    <img class="svgcenter mt-3 mb-2 calendar-icon" src="/templates/travel/assets/svgs/calendar.png" alt="Ngày xuất phát đi Lý Sơn">
                                </div>
                                <div class="col-lg-3 col-6 order-3 order-lg-5">
                                    <p class="grey text-center">Số người<br><span class="black bold">{{ $tour->people }}</span></p>
                                </div>
                                <div class="col-lg-3 col-6 order-4 order-lg-6">
                                    <p class="grey text-center">Thời gian<br><span class="black bold">{{ $tour->time }}</span></p>
                                </div>
                                <div class="col-lg-3 col-6 order-7 order-lg-7">
                                    <p class="grey text-center">Địa điểm đi<br><span class="black bold">Đảo Lý Sơn</span></p>
                                </div>
                                <div class="col-lg-3 col-6 order-8 order-lg-8">
                                    <p class="grey text-center mx-2">Ngày đi<br><span class="black bold">Tất cả các ngày trong tuần</span></p>
                                </div>
                            </div>

                            <div class="separator-tour"></div>

                            <ul class="single-tour-container">
                                <li>
                                    <div class="tour-item-title list-font">Xuất phát tại</div>
                                    <div class="tour-item-description list-font">{{ $tour->from }}</div>
                                </li>
                                
                                <li>
                                    <div class="tour-item-title list-font">Điểm dừng chân</div>
                                    <div class="tour-item-description list-font">Đảo Lý Sơn</div>
                                </li>
                                
                                <li>
                                    <div class="tour-item-title list-font">Chỗ ở</div>
                                    <div class="tour-item-description list-font">
                                        {{ $tour->hotel == 'Mường Thanh'?'Khách sạn Mường Thanh':'Nhà nghỉ ' .$tour->hotel }}
                                    </div>
                                </li>
                                
                                <li>
                                    <div class="tour-item-title list-font">Chuyến đi bao gồm</div>
                                    <div class="tour-item-description list-font">                                        
                                        <div><i class="fas fa-check-circle"></i>Xe đưa đón tận nơi.</div>
                                        @if($tour->ticket)
                                        <div><i class="fas fa-check-circle"></i>Vé tàu ra vào đảo Lý Sơn</div>
                                        <div><i class="fas fa-check-circle"></i>Vé tàu ra vào đảo Bé</div>
                                        @endif
                                        <div><i class="fas fa-check-circle"></i>Xe điện đưa đón trong quá trình du lịch</div>
                                        <div><i class="fas fa-check-circle"></i>Vé khách sạn và ăn sáng tại Mường Thanh</div>                        
                                    </div>
                                </li>
                                
                                <li>
                                    <div class="tour-item-title list-font">Không bao gồm</div>
                                    <div class="tour-item-description list-font">
                                        <div> <i class="fas fa-times-circle"></i>Chi phí ăn uống khác</div>                                
                                    </div>
                                </li> 
                         
                            </ul> 

                            <div class="container">    
                                <div class="tour-schedule">
                                    <h4 id="read-tour" class="black text-left mb-3  bold">Nội dung chuyến đi</h4>

                                    {!! $tour->detail !!}

                                    <div class="separator-tour"></div>
                                    <h4 id="read-tour" class="black text-left mb-3  bold">Giới thiệu địa điểm check-in tại Lý Sơn</h4> 

                                    <p>Lý Sơn - Một huyện đảo trực thuộc tỉnh Quảng Ngãi - Được du khách ưu ái ví von như đảo “Jeju của Việt Nam” bởi cảnh sắc đẹp yên bình, nên thơ. Và đặc biệt, đây cũng là nơi cho ra đời những bức ảnh lung linh cực chất xuất hiện trong mỗi chuyến du hí nơi đây của các bạn trẻ trên khắp mạng xã hội. Chỉ với một thao tác đơn giản - Tìm kiếm hình ảnh theo hastag #lyson, bạn đã có thể chiêm ngưỡng hàng ngàn bức ảnh đẹp được check-in tại “vương quốc tỏi” với những góc chụp lung linh, không chê vào đâu được. Và dưới đây là các điểm check-in đắt giá nhất được Lysontrip chọn lựa và gợi ý cho bạn cho chuyến du lịch của các bạn. Hãy lưu lại nhé.</p>

                                    <div class="row">
                                      <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-0 pt-2">
                                        <img src="/templates/travel/assets/images/huyen-dao-ly-son-tu-tren-cao.jpg" class="img-fluid" alt="huyen dao ly son tu tren cao">
                                        <p class="sub-image text-center">01 Huyện đảo Lý Sơn từ trên cao</p>
                                      </div>
                                      <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-0 pt-2">
                                        <img src="/templates/travel/assets/images/cong-to-vo.jpg" class="img-fluid" alt="cong to vo ly son trip">
                                        <p class="sub-image text-center">02 Cổng Tò Vò trong ánh hoàng hôn</p>
                                      </div>
                                      <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-0 pt-2">
                                        <img src="/templates/travel/assets/images/dinh-thoi-loi.jpg" class="img-fluid" alt="dinh thoi loi ly son trip">
                                        <p class="sub-image text-center">03 toàn cảnh Lý Sơn từ Đinh Thới Lới</p>
                                      </div>
                                      <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-0 pt-2">
                                        <img src="/templates/travel/assets/images/canh-dong-toi.jpg" class="img-fluid" alt="canh dong toi ly son trip">
                                        <p class="sub-image text-center">04 cánh đông tỏi</p>
                                      </div>
                                      <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-0 pt-2">
                                        <img src="/templates/travel/assets/images/hon-mu-cu-ngon-hai-dang.jpg" class="img-fluid" alt="hon mu cu ly son trip">
                                        <p class="sub-image text-center">05 Hòn Mù Cu - ngọn hải đăng</p>
                                      </div>
                                      <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-0 pt-2">
                                        <img src="/templates/travel/assets/images/dao-be-ly-son.jpg" class="img-fluid" alt="dao be ly son trip">
                                        <p class="sub-image text-center">06 Đảo bé - đảo Ly Sơn </p>
                                      </div>
                                    </div>

                                    <p>Với vị trí tuyệt đẹp “tựa sơn, hướng hải” - Chùa Đục tọa lạc ngay giữa sườn núi Giếng Tiềng hướng thẳng ra biển lớn. Để đến được Chùa Đục, du khách phải vượt qua hơn 100 bậc thang men theo triền núi. Đường đi tuy có hơi vất vả nhưng khi đã đến được chùa, cảm nhận được “vị” thanh tịnh của nơi cửa Phật, tìm thấy tâm hồn tự do khi phóng tầm mắt nhìn ra biển, du khách sẽ quên ngay mệt mỏi và cũng không quên tìm những góc chụp đắt giá cho album ảnh kỷ niệm Lý Sơn của mình.</p>
                                    <p><img src="/templates/travel/assets/images/chua-duc.jpg" class="img-fluid" alt="chua duc ly son trip"></p>    
                                    <p class="sub-image text-center">07 Chùa Đục Lý Sơn </p>
                                    <div class="separator-tour"></div>
                                    <h4 id="read-tour" class="black text-left mb-3  bold">Giới thiệu hệ thống xe đưa đón.</h4>   

                                    <p>Với hệ thống hơn 30 xe từ 4 chỗ đến 45 chỗ chạy xuyên suốt tuyến Quảng Ngãi - Quảng Nam - Đà Nẵng và đội ngũ tài xế nhiều năm kinh nghiệm, chúng tôi sẽ giúp quý khách có những chuyến đi an toàn, vui vẻ và có những trải nghiệm du lịch thú vị.</p> 

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


                                    <h4 id="read-tour" class="black text-left mb-3  bold">Giới thiệu tàu cao tốc đi đảo Lý Sơn</h4>

                                    <p>Tàu Super Biển Đông là 1 trong những đơn vị đồng hành với Lý Sơn Trip. Với hệ thống tàu mới, hiện đại, chuyến đi của bạn từ đất liền ra Lý Sơn và ngược lại sẽ giảm được 1 phần thời gian. Với vận tốc 7 hải lý/giờ, tàu Super Biển Đông sẽ là 1 bước tiến lớn cho du lịch Lý Sơn.</p>

                                    <div class="row">
                                      <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-0 pt-2">
                                        <img src="/templates/travel/assets/images/tau-khach-super-bien-dong-ly-son-1.png" class="img-fluid" alt="tàu super biển đông đi lý sơn">
                                        <p class="sub-image text-center">Tàu super biển đông đi lý sơn</p>
                                      </div>
                                      <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-0 pt-2">
                                        <img src="/templates/travel/assets/images/tau-khach-super-bien-dong-ly-son-2.png" class="img-fluid" alt="nội thất tàu super biển đông đi lý sơn">
                                        <p class="sub-image text-center">Nội thất tàu super biển đông đi lý sơn</p>
                                      </div>
                                    </div>
                                    <div class="separator-tour"></div>

                                    <h4 id="read-tour" class="black text-left mb-3  bold">Nghỉ ngơi tại khách sạn Mường Thanh</h4>
                                    <p>Khách sạn Mường Thanh là một trong những khách sạn lớn nhất ở Lý Sơn với đầy đủ tất cả các dịch vụ tiện nghi của một khách sạn 4 sao. Tại đây bạn có thể cảm nhận được sự yên tĩnh, sạch sẽ bên trong và ngoài khách sạn. Ngoài ra việc có bể bơi và có được sự sạch sẽ của bể bơi cũng là 1 điểm cộng lớn cho khách sạn.</p>
                                    <div class="row">
                                      <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-0 pt-2">
                                        <img src="/templates/travel/assets/images/khach-san-muong-thanh-phong-1.png" class="img-fluid" alt="thue khách sạn du lịch Lý Sơn">
                                        <p class="sub-image text-center">Tiện nghi khách sạn mường thanh</p>
                                      </div>
                                      <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-0 pt-2">
                                        <img src="/templates/travel/assets/images/khach-san-muong-thanh-phong-2.png" class="img-fluid" alt="thue khách sạn du lịch Lý Sơn">
                                        <p class="sub-image text-center">Tiện nghi khách sạn mường thanh</p>
                                      </div>
                                      <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-0 pt-2">
                                        <img src="/templates/travel/assets/images/khach-san-muong-thanh-phong-3.png" class="img-fluid" alt="thue khách sạn du lịch Lý Sơn">
                                        <p class="sub-image text-center">Tiện nghi khách sạn mường thanh</p>
                                      </div>
                                      <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-0 pt-2">
                                        <img src="/templates/travel/assets/images/khach-san-muong-thanh-phong-4.png" class="img-fluid" alt="thue khách sạn du lịch Lý Sơn">
                                        <p class="sub-image text-center">Tiện nghi khách sạn mường thanh</p>
                                      </div>
                                    </div>
                                    <div class="separator-tour"></div>

                                    <h4 id="read-tour" class="black text-left mb-3  bold">Nghỉ ngơi tại nhà nghỉ Quỳnh Anh</h4>
                                    <p>Nhà nghỉ Quỳnh Anh nằm ở khu vực Cầu Cảng Lý Sơn, đây là địa điểm nhộn nhịp nhất gần trung tâm mua sắm, ăn uống, vui chơi giải trí. Được đưa vào hoạt động từ đầu năm 2016, với dịch vụ tốt, giá cả hợp lý Nhà nghỉ Quỳnh Anh là điểm dừng chân nghỉ ngơi, thưởng thức các món ăn đặc sản hấp dẫn nhất của du khách trên mọi miền đất nước khi đến tham quan nghỉ dưỡng và công tác tại Đảo Lý Sơn xinh đẹp này. Đến với Nhà nghỉ Quỳnh Anh, Quý khách sẽ được đón tiếp nồng nhiệt, phục vụ chu đáo, tận tình với thái độ ân cần, niềm nở tạo cho du khách đến đây cảm nhận được sự thân thiện và hài lòng. Chắc chắn rằng Quý khách sẽ có cảm giác thoải mái như quay về chính ngôi nhà của mình.</p>
                                    <div class="row">
                                      <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-0 pt-2">
                                        <img src="/templates/travel/assets/images/1.jpg" class="img-fluid" alt="thue khách sạn du lịch Lý Sơn">
                                        <p class="sub-image text-center">Tiện nghi nhà nghỉ Quỳnh Anh</p>
                                      </div>
                                      <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-0 pt-2">
                                        <img src="/templates/travel/assets/images/2.jpg" class="img-fluid" alt="thue khách sạn du lịch Lý Sơn">
                                        <p class="sub-image text-center">Tiện nghi nhà nghỉ Quỳnh Anh</p>
                                      </div>
                                      <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-0 pt-2">
                                        <img src="/templates/travel/assets/images/3.jpg" class="img-fluid" alt="thue khách sạn du lịch Lý Sơn">
                                        <p class="sub-image text-center">Tiện nghi nhà nghỉ Quỳnh Anh</p>
                                      </div>
                                      <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-0 pt-2">
                                        <img src="/templates/travel/assets/images/4.jpg" class="img-fluid" alt="thue khách sạn du lịch Lý Sơn">
                                        <p class="sub-image text-center">Tiện nghi nhà nghỉ Quỳnh Anh</p>
                                      </div>
                                    </div>

                                    <div class="separator-tour"></div>

                                    <h4 id="read-tour" class="black text-left mb-3  bold">Nghỉ ngơi tại nhà nghỉ Tiên Tri</h4>
                                    <p>NHÀ NGHỈ TIÊN TRI được xây dựng mới hoàn toàn kiên cố, và xinh đẹp, trang trí đầy đủ tiện nghi, thoáng mát, tất cả các phòng đều có gắn điều hòa, có wifi, có ti vi,  phòng rộng, tolet khíp kín,  và hoà quyện vào không khí trong lành khi ngắm chiều hoàng hôn hay buổi sáng tinh mơ, những con tàu lướt sóng, những tiếng gió nhẹ bay qua thật hấp dẫn.</p>

                                    <p>Khi khách đến với Lý Sơn thì đến với nhà nghỉ TIÊN TRI nơi dừng chân nghỉ ngơi lý tưởng nhất, được sự hướng dẫn tận tình, chu đáo, phục vụ sẽ hài lòng quý khách.</p>
                                    <div class="row">
                                      <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-0 pt-2">
                                        <img src="/templates/travel/assets/images/nha-nghi-tien-tri-1.png" class="img-fluid" alt="thue khách sạn du lịch Lý Sơn" style="height: 250px;object-fit: cover">
                                        <p class="sub-image text-center">Tiện nghi nhà nghỉ Tiên Tri</p>
                                      </div>
                                      <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-0 pt-2">
                                        <img src="/templates/travel/assets/images/nha-nghi-tien-tri-2.png" class="img-fluid" alt="thue khách sạn du lịch Lý Sơn" style="height: 250px;object-fit: cover">
                                        <p class="sub-image text-center">Tiện nghi nhà nghỉ Tiên Tri</p>
                                      </div>
                                      <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-0 pt-2">
                                        <img src="/templates/travel/assets/images/nha-nghi-tien-tri-3.png" class="img-fluid" alt="thue khách sạn du lịch Lý Sơn" style="height: 250px;object-fit: cover">
                                        <p class="sub-image text-center">Tiện nghi nhà nghỉ Tiên Tri</p>
                                      </div>
                                      <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-0 pt-2">
                                        <img src="/templates/travel/assets/images/nha-nghi-tien-tri-4.png" class="img-fluid" alt="thue khách sạn du lịch Lý Sơn" style="height: 250px;object-fit: cover">
                                        <p class="sub-image text-center">Tiện nghi nhà nghỉ Tiên Tri</p>
                                      </div>
                                    </div>

                                    <div class="separator-tour"></div>

                                    <h4 id="read-tour" class="black text-left mb-3  bold">Nghỉ ngơi tại nhà nghỉ Bình Yên</h4>
                                    <p>Nằm ở huyện đảo Lý Sơn, Bình Yên Motel cung cấp chỗ nghỉ với máy điều hòa và lối dẫn ra khu vườn. Nơi đây có Wi-Fi miễn phí.</p>

                                    <p>Tất cả phòng nghỉ tại đây đều có khu vực ghế ngồi, TV màn hình phẳng và phòng tắm riêng với đồ vệ sinh cá nhân miễn phí, chậu rửa vệ sinh cùng vòi sen. Tủ lạnh và ấm đun nước cũng được trang bị trong phòng.</p>

                                    <p>Chỗ nghỉ này là một trong những vị trí được đánh giá tốt nhất ở Ly Son! Khách thích nơi đây hơn so với những chỗ nghỉ khác trong khu vực.</p>

                                    <p>Các cặp đôi đặc biệt thích địa điểm này — họ cho điểm <strong>9,7</strong> cho kỳ nghỉ dành cho 2 người.</p>

                                    <p>Chỗ nghỉ này cũng được đánh giá là đáng giá tiền nhất ở Ly Son! Khách sẽ tiết kiệm được nhiều hơn so với nghỉ tại những chỗ nghỉ khác ở thành phố này.</p>
                                    <div class="row">
                                      <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-0 pt-2">
                                        <img src="/templates/travel/assets/images/nha-nghi-binh-yen.jpg" class="img-fluid" alt="thue khách sạn du lịch Lý Sơn" style="height: 250px;object-fit: cover; width: 100%">
                                        <p class="sub-image text-center">Tiện nghi nhà nghỉ Bình Yên</p>
                                      </div>
                                      <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-0 pt-2">
                                        <img src="/templates/travel/assets/images/nha-nghi-binh-yen-1.jpg" class="img-fluid" alt="thue khách sạn du lịch Lý Sơn" style="height: 250px;object-fit: cover; width: 100%">
                                        <p class="sub-image text-center">Tiện nghi nhà nghỉ Bình Yên</p>
                                      </div>
                                      <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-0 pt-2">
                                        <img src="/templates/travel/assets/images/nha-nghi-binh-yen-2.jpg" class="img-fluid" alt="thue khách sạn du lịch Lý Sơn" style="height: 250px;object-fit: cover; width: 100%">
                                        <p class="sub-image text-center">Tiện nghi nhà nghỉ Bình Yên</p>
                                      </div>
                                      <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-0 pt-2">
                                        <img src="/templates/travel/assets/images/nha-nghi-binh-yen-3.jpg" class="img-fluid" alt="thue khách sạn du lịch Lý Sơn" style="height: 250px;object-fit: cover; width: 100%">
                                        <p class="sub-image text-center">Tiện nghi nhà nghỉ Bình Yên</p>
                                      </div>
                                    </div>

                                    <div class="separator-tour"></div>

                                    <h4 id="read-tour" class="black text-left mb-3  bold">Nghỉ ngơi tại nhà nghỉ Tiên Tri</h4>
                                    <p>Guesthouse Dinh Sau Ly Son nằm ở Lý Sơn, có Wi-Fi miễn phí, tầm nhìn ra biển và lễ tân 24 giờ.</p>

                                    <p>Tại nhà khách, mỗi phòng đều được trang bị bàn làm việc và TV màn hình phẳng.</p>

                                    <p>Chỗ nghỉ này là một trong những vị trí được đánh giá tốt nhất ở Ly Son! Khách thích nơi đây hơn so với những chỗ nghỉ khác trong khu vực.</p>

                                    <p>Chỗ nghỉ này cũng được đánh giá là đáng giá tiền nhất ở Lý Sơn! Khách sẽ tiết kiệm được nhiều hơn so với nghỉ tại những chỗ nghỉ khác ở thành phố này..</p>
                                    <div class="row">
                                      <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-0 pt-2">
                                        <img src="/templates/travel/assets/images/nha-nghi-dinh-sau-1.jpg" class="img-fluid" alt="thue khách sạn du lịch Lý Sơn" style="height: 250px;object-fit: cover; width: 100%">
                                        <p class="sub-image text-center">Tiện nghi nhà nghỉ Định Sau</p>
                                      </div>
                                      <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-0 pt-2">
                                        <img src="/templates/travel/assets/images/nha-nghi-dinh-sau-2.jpg" class="img-fluid" alt="thue khách sạn du lịch Lý Sơn" style="height: 250px;object-fit: cover; width: 100%">
                                        <p class="sub-image text-center">Tiện nghi nhà nghỉ Định Sau</p>
                                      </div>
                                      <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-0 pt-2">
                                        <img src="/templates/travel/assets/images/nha-nghi-dinh-sau-3.jpg" class="img-fluid" alt="thue khách sạn du lịch Lý Sơn" style="height: 250px;object-fit: cover; width: 100%">
                                        <p class="sub-image text-center">Tiện nghi nhà nghỉ Định Sau</p>
                                      </div>
                                      <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-0 pt-2">
                                        <img src="/templates/travel/assets/images/nha-nghi-dinh-sau-4.jpg" class="img-fluid" alt="thue khách sạn du lịch Lý Sơn" style="height: 250px;object-fit: cover; width: 100%">
                                        <p class="sub-image text-center">Tiện nghi nhà nghỉ Định Sau</p>
                                      </div>
                                    </div>

                                    <div class="content">
                                        <p><strong>CÔNG TY TNHH DU LỊCH LÝ SƠN TRIP</strong></p>
                                        <p><strong>Địa chỉ:</strong> Tầng 2, 121 Cù Chính Lan, Thanh Khê, Đà Nẵng</p>
                                        <p><strong>SĐT:</strong> 0978175506</p>
                                    </div>

                                </div>    
                            </div>    


                            <div class="comments-container">
                                <h6 class="bold mt-5 black">Tour Reviews </h6>

                                <ul id="comments-list" class="comments-list">
                                    @foreach($tour->rate as $rate)
                                    <li>
                                        <div class="comment-main-level mb-4">
                                     
                                            <div class="comment-avatar d-none d-md-block"><img src="/templates/travel/assets/images/avatar.jpg" alt="Đánh giá khách hàng"></div>
                                            <div class="comment-box">
                                                <div class="comment-head">
                                                    <h6 class="comment-name "><a href="#">{{ $rate->name }}</a></h6>
                                                    <div class="text-left">
                                                        @for($i = 0; $i < $rate->star; $i++)
                                                            <i class="fas fa-star"></i>
                                                        @endfor
                                                        <br class="hidebr">
                                                        <span class="time-review">{{ date_format($rate->created_at, 'h:m:s d-m-y') }}</span>
                                                    </div>
                                                    
                                                </div>
                                                <div class="comment-content">
                                                    {{ $rate->message }}
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>

                            </div>

                            <div class="mt-5  mx-auto my-auto" id="review">
                                <h6 class="black bold mt-5 ml-md-0 ml-4 text-center">Đánh giá cho tour này</h6>
                                <form class="form-comment ratings pt-2 " action="{{ route('travel.tour.rating', $tour->slug) }}" method="POST" id="myForm">
                                    {{ csrf_field() }}
                                    <div class="row ">
                                        <div class="col-md-6 col-12 text-center">
                                                <label  for="inputname2">Họ và tên</label>
                                        <input type="text" id="inputname2" class="form-control mb-3" placeholder="Your name" name="name">
                                        </div>
                                        <div class="col-md-6 col-12  text-center">
                                                <label for="inputemail2">Địa chỉ email</label>
                                        <input type="text" class="form-control" id="inputemail2" placeholder="Johndoe@gmail.com" name="email">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-6 col-12 text-center">
                                                <label  for="inlineFormInputName32">Đánh giá</label>

                                            <div class="input-group">
                                                <select class="form-control" id="inlineFormInputName32" name="rating">
                                                    <option selected value="4">4 Stars <i class="fas fa-star"></i>(Good)<i class="fas fa-star"></i></option>
                                                    <option value="1">1 Star (Bad)</option>
                                                    <option value="2">2 Stars (Normal)</option>
                                                    <option value="3">3 Stars (Regular)</option>
                                                    <option value="5">5 Stars (Very Good)</option>
                                                </select>
                                                    <div class="input-group-append">
                                                    <div class="input-group-text"><i class="fas fa-chevron-down"></i>
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>
                                    
                                    </div>
                                             
                                    <div class="row mt-3">
                                        <div class="col-12 ">
                                            <div class="form-group text-center">
                                                <label for="exampleFormControlTextarea1">Review</label>
                                                <textarea class="form-control" name="textarea" placeholder="Write a detailed review" id="exampleFormControlTextarea1" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 offset-lg-3 col-12">
                                            <button type="submit" class="btn col-sm-12 my-2 btn-primary mb-lg-0 mb-4" id="myBtn">Gửi review</button>
                                        </div>
                                    </div>
                                </form>
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
            url: "{{ route('travel.tour.rating', $tour->slug) }}",
            data: { 
                "_token": '{{ csrf_token() }}',
                "name": $("#inputname2").val(),
                "email": $("#inputemail2").val(),
                "star": $("#inlineFormInputName32").val(),
                "message": $("#exampleFormControlTextarea1").val(),
            },
            success: function (data) {
                $('#review').html(data);
                console.log('Submission was successful.');
            },
            error: function (data) {
                console.log('An error occurred.');
                console.log(data);
            },
        });
    });
</script>
<script type="text/javascript">
    $('#sidebar-form').submit(function (e) {
        e.preventDefault();

        $.ajax({
            type: 'POST',
            cache: false,
            url: "{{ route('ajax.travel.checktour', $tour->id) }}",
            data: { 
                "_token": '{{ csrf_token() }}',
                "name": $("#inputname").val(),
                "phone": $("#inputphone").val(),
                "date": $("#datepicker").val(),
                "people": $("#inputpeople").val(),
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
        <title>Tour du lịch Lý Sơn giá rẻ</title>
        <meta name="keywords" content="du lich ly son, tour du lich ly son, du lịch Lý Sơn giá rẻ, tour du lịch Lý Sơn, thuê xe du lịch Lý Sơn, thuê xe đi Lý Sơn" />
        <meta name="description" content='Du lịch đảo Lý Sơn - Đảo Bé giá rẻ với xe đưa đón và nghỉ dưỡng tại khách sạn Mường Thanh. Thuê xe du lịch đảo Lý Sơn. Thuê xe Đà Nẵng đi cảng Sa Kỳ, thuê xe Đà Nẵng Quảng Ngãi' />
        <meta name="news_keywords" content="du lich ly son, tour du lich ly son, du lịch Lý Sơn giá rẻ, tour du lịch Lý Sơn, thuê xe du lịch Lý Sơn, thuê xe đi Lý Sơn">

        <meta property="og:title" content="Tour du lịch Lý Sơn giá rẻ" />
        <meta property="og:description" content="Du lịch đảo Lý Sơn - Đảo Bé giá rẻ với xe đưa đón và nghỉ dưỡng tại khách sạn Mường Thanh. Thuê xe du lịch đảo Lý Sơn. Thuê xe Đà Nẵng đi cảng Sa Kỳ, thuê xe Đà Nẵng Quảng Ngãi" />
        <meta property="og:image" content= "/upload/{{ $tour->picture }}" />
        <meta property="og:url" itemprop="url" content="{{ route('travel.tour.detail', $tour->slug) }}">

        <meta itemprop="name" content="Tour du lịch Lý Sơn giá rẻ" />
        <meta itemprop="description" content="Du lịch đảo Lý Sơn - Đảo Bé giá rẻ với xe đưa đón và nghỉ dưỡng tại khách sạn Mường Thanh. Thuê xe du lịch đảo Lý Sơn. Thuê xe Đà Nẵng đi cảng Sa Kỳ, thuê xe Đà Nẵng Quảng Ngãi" />
        <meta itemprop="image" content= "/upload/{{ $tour->picture }}" />
@endsection