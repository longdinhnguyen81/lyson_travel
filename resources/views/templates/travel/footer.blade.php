        <footer>

            <section id="footer">
                
                <div class="container">

                    <div class="row text-center text-xs-center text-sm-left text-md-left">

                        <!-- Contact Information -->
                        <div class="col-xs-12 col-md-6 col-lg-4">

                            <h6 class="white mt-4">Về chúng tôi</h6>
                            
                            <ul class="list-unstyled quick-links">
                                <li><p class="white light">Chúng tôi tự tin là đơn vị cho thuê xe và tour du lịch rẻ nhất tại khu vực miền trung </p></li>						
                                <li><h5><i class="fas fa-map-marker-alt mr-2"></i>121 Cù Chính Lan - Thanh Khê - Đà Nẵng</h5></li>
                                <li><h5><i class="fas fa-phone-square mr-2"></i>0978175506</h5></li>
                                <li><h5><i class="fas fa-envelope mr-2"></i>taiembkdn@gmail.com</h5></li>
                            </ul>
                        </div>

                        <!-- Social Networks -->
                        <div class="col-xs-12 col-md-6 col-lg-4">

                            <img class="svgcenter mt-4 logo-light" src="/templates/travel/assets/svgs/logolight.png" alt="Du lịch Lý Sơn">
                    
                            <ul class="list-unstyled list-inline mt-3 social text-center">
                                <li class="list-inline-item"><a href="http://www.facebook.com/hoangphuc.car.quangngai"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="list-inline-item"><a href="http://www.facebook.com/hoangphuc.car.quangngai"><i class="fab fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="http://www.facebook.com/hoangphuc.car.quangngai"><i class="fab fa-instagram"></i></a></li>
                            </ul>

                            <ul class="list-unstyled text-center quick-links mt-3">
                                <li><a href="/"><i class="fa fa-angle-double-right"></i>Trang chủ</a></li>
                                <li><a href="{{ route('travel.tour.index') }}"><i class="fa fa-angle-double-right"></i>Tour du lịch</a></li>
                                <li><a href="{{ route('travel.post.index') }}"><i class="fa fa-angle-double-right"></i>Blog</a></li>
                                <li><a href="{{ route('travel.travel.index') }}"><i class="fa fa-angle-double-right"></i>Thuê xe</a></li>
                            </ul>

                        </div>


                        <!-- Instagram Feed -->
                        <div class="col-xs-12 col-md-6 col-lg-4 grid mx-auto ">

                                <h6 class="white mt-4 mb-3">Ảnh du lịch</h6>

                                <div class="grid-sizer"></div>
                                <span id="btnFA">
                            @foreach($allpictures as $allpicture)
                                <a role="button" href="#gallery-1" class="grid-item btn-gallery"><img src="/upload/{{ $allpicture->name }}"></a>
                            @endforeach
                                </span>
                                
                        </div>
                        <div id="gallery-1" class="hidden">
                            @foreach($allpictures as $allpicture)
                                <a href="/upload/{{ $allpicture->name }}">Du lịch Lý Sơn</a>
                            @endforeach
                        </div>

                    </div>

                    <!-- GO UP rectangle -->
                    <div class="scale-up">
                        <a  class="smooth-scroll  rectangle-right" href="#" >
                            <div class="go-up px-1">
                                <i class="fas mb-2 fa-arrow-up"></i><br>
                                <h6 class="text-center letters-up">GO<br>UP</h6> 
                            </div>
                        </a>  
                    </div>

                    <!-- Copyright Info-->
                    <div class="row">
                        <div class="col-12 mt-2 mt-sm-2 text-center text-white">
                            <div class="separatorfullwidth"></div> 
                            <p class="white footer-bottom">Copyright ©2019 All rights reserved | This template is made with by VinaSofts</p>
                        </div>
                    </div>	            
                </div>

            </section>

        </footer>
        <!-- End of Footer -->
                            
    </body>
</html> 