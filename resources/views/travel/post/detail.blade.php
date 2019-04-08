@extends('templates.travel.master')
@section('content')
	<div class="tour-title ">         
            <img class="blog-background w-100 h-100" src="/upload/{{ $post->picture }}" alt="Tin tức du lịch Lý Sơn">
            <h1 class="white text-center shadow-text front center-text">{{ $post->title }}</h1>   


            <div>
                <a class="smooth-scroll" href="#read-tour">
                    <img class="curvechevron" src="/templates/travel/assets/svgs/curvesingle.png" alt="{{ $post->title }}">
                    <div class="chevroncurve">
                        <i class="fas  hoverchevron white fa-chevron-down"> </i>
                    </div>
                </a>
            </div>

        </div>
         <!-- End section Title-->

         <section id="section3" class="tour-list-sidebar">
      
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12 col-md-6 col-lg-3 ml-lg-5 order-lg-first order-last mt-3 mt-lg-0">


                            <div class="mx-lg-0 my-4">

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
                        </div>
                            
                            <div class="more-info tags my-4">
                                <h6 class="black semibold text-center mx-4 mt-3 mb-3 info-title">Popular Tags</h6>   
                                <div class="text-center px-3 px-lg-2 pb-3">   

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
                        
                            <div  id="instasidebar" class="grid2 runsidebar mx-auto">
                                <h6 class="black semibold text-center mx-4 mt-3 mb-2 info-title">Instagram Gallery</h6>                            
                                <div class="grid-sizer w-100"></div>
                            </div>

                            <div class=" mt-4">
                                <a href="#"><img src="/templates/travel/assets/images/promotion.jpg" class="img-fluid mx-auto d-block mt-5" alt="Tin tức du lịch Lý Sơn"></a>
                            </div>
                        </div>

                        <div class="col-xs-12 col-md-12 col-lg-8  single-tour">
                            <h4 id="read-tour" class="black text-left mb-3 bold">{{ $post->title }}</h4>
                         
                
                            <div class="separator-tour"></div>

                            <div class="">    
                                    <div class="tour-schedule">
                                        {!! $post->detail !!}

                                    </div>  
                                    <h6 class="bold mt-5 black">Những bình luận trước </h6>

                                            <div class="comments-container">
                                        
                                                <ul id="comments-list" class="comments-list">
                                                @foreach($post->comment as $comment)
                                                    <li>
                                                        <div class="comment-main-level ">
                                                            <div class="comment-avatar  d-none d-md-block"><img src="/templates/travel/assets/images/avatar.jpg" alt="{{ $post->detail }}"></div>
                                                            <div class="comment-box">
                                                                <div class="comment-head">
                                                                    <h6 class="comment-name"><a href="#">{{ $comment->name }}</a></h6>
                                                                    @php    
                                                                        $date = $comment->created_at;
                                                                        date_modify($date, "+5 hours");
                                                                    @endphp
                                                                    <span class="time-blog">{{ date_format($date, 'h:m:s a  d-m-y ') }}</span>
                                                                
                                                                </div>
                                                                <div class="comment-content">
                                                                    {{ $comment->description }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                @endforeach
                                                </ul>
                                            </div>

                                    <div class="mt-5  mx-auto my-auto" id="result">
                                        <h6 class="black bold mt-5 ml-md-0 ml-4 text-center">Để lại bình luận</h6>
                                        <form class="form-comment" id="myForm" method="POST" action="">
                                            {{ csrf_field() }}
                                            <div class="row ">

                                                <div class="col-md-6 col-12 text-center">
                                                    <label  for="inputname">Họ và tên</label>
                                                    <input required type="text" class="form-control mb-3" id="inputname" placeholder="Your name" id="name">
                                                </div>
                                                
                                                <div class="col-md-6 col-12  text-center">
                                                    <label for="inputmail">Địa chỉ email</label>
                                                    <input required type="email" class="form-control" id="inputmail" placeholder="Your email" id="email">
                                                </div>
                                            </div>
                    
                                            <div class="row mt-3">
                                                <div class="col-12 ">
                                                    <div class="form-group text-center">
                                                        <label for="exampleFormControlTextarea1">Nội dung bình luận</label>
                                                        <textarea required class="form-control" placeholder="Your comment" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 offset-lg-3 col-12">
                                                    <button type="submit" class="btn col-sm-12 mt-2 btn-primary">Bình luận</button>
                                                </div>
                                            </div>
                                        </form>
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
            url: "{{ route('travel.post.comment', $post->id) }}",
            data: { 
                "_token": '{{ csrf_token() }}',
                "name": $("#inputname").val(),
                "email": $("#inputmail").val(),
                "description": $("#exampleFormControlTextarea1").val(),
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
        <title>Tin tức du lịch Lý Sơn</title>
        <meta name="keywords" content="du lich ly son, tour du lich ly son, du lịch Lý Sơn giá rẻ, tour du lịch Lý Sơn, thuê xe du lịch Lý Sơn, thuê xe đi Lý Sơn" />
        <meta name="description" content='Du lịch đảo Lý Sơn - Đảo Bé giá rẻ với xe đưa đón và nghỉ dưỡng tại khách sạn Mường Thanh. Thuê xe du lịch đảo Lý Sơn. Thuê xe Đà Nẵng đi cảng Sa Kỳ, thuê xe Đà Nẵng Quảng Ngãi' />
        <meta name="news_keywords" content="du lich ly son, tour du lich ly son, du lịch Lý Sơn giá rẻ, tour du lịch Lý Sơn, thuê xe du lịch Lý Sơn, thuê xe đi Lý Sơn">

        <meta property="og:title" content="Tin tức du lịch Lý Sơn" />
        <meta property="og:description" content="Du lịch đảo Lý Sơn - Đảo Bé giá rẻ với xe đưa đón và nghỉ dưỡng tại khách sạn Mường Thanh. Thuê xe du lịch đảo Lý Sơn. Thuê xe Đà Nẵng đi cảng Sa Kỳ, thuê xe Đà Nẵng Quảng Ngãi" />
        <meta property="og:image" content= "/upload/{{ $post->picture }}" />
        <meta property="og:url" itemprop="url" content="{{ route('travel.post.detail', ['slug' => str_slug($post->title), 'id' => $post->id]) }}">

        <meta itemprop="name" content="Tin tức du lịch Lý Sơn" />
        <meta itemprop="description" content="Du lịch đảo Lý Sơn - Đảo Bé giá rẻ với xe đưa đón và nghỉ dưỡng tại khách sạn Mường Thanh. Thuê xe du lịch đảo Lý Sơn. Thuê xe Đà Nẵng đi cảng Sa Kỳ, thuê xe Đà Nẵng Quảng Ngãi" />
        <meta itemprop="image" content= "/upload/{{ $post->picture }}" />
@endsection