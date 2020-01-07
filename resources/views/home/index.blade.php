@extends('layouts.app')
@section('content')
    <!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
    <style>
        .active {
        color: #ff9705 !important;
        }

    </style>
<!-- Add your site or application content here -->
<!-- header area start -->
    <!-- header area end -->
<!-- banner -->
<div class="banner">
		<div class="container">
			<div class="banner-info animated wow zoomIn " data-wow-delay=".5s">
				<h3>Free Online Shopping</h3>
				<h4>Up to <span>50% <i>Off/-</i></span></h4>
				<div class="wmuSlider example1">
					<div class="wmuSliderWrapper">
						<article style="position: absolute; width: 100%; opacity: 0; "> 
							<div class="banner-wrap">
								<div class="banner-info1">
									<p>CANON DSLR</p>
								</div>
							</div>
						</article>
						<article style="position: absolute; width: 100%; opacity: 0;"> 
							<div class="banner-wrap">
								<div class="banner-info1">
									<p>NIKON DSLR</p>
								</div>
							</div>
						</article>
						<article style="position: absolute; width: 100%; opacity: 0;"> 
							<div class="banner-wrap">
								<div class="banner-info1">
									<p>FUJIFILM</p>
								</div>
							</div>
						</article>
					</div>
				</div>
					
			</div>
		</div>
	</div>
<!-- //banner -->
<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container"> 
			<div class="banner-bottom-grids">
				<div class="banner-bottom-grid-left animated wow slideInLeft" data-wow-delay=".5s">
					<div class="grid">
						<figure class="effect-julia">
							<img src="images/4.jpg" alt=" " class="img-responsive" />
							<figcaption>
								<h3>Ngoc <span>Studio</span><i> in online shopping</i></h3>
								<div>
									<p>Cupidatat non proident, sunt</p>
									<p>Officia deserunt mollit anim</p>
									<p>Laboris nisi ut aliquip consequat</p>
								</div>
							</figcaption>			
						</figure>
					</div>
				</div>
				<div class="banner-bottom-grid-left1 animated wow slideInUp" data-wow-delay=".5s">
					<div class="banner-bottom-grid-left-grid left1-grid grid-left-grid1">
						<div class="banner-bottom-grid-left-grid1">
							<img src="images/1.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="banner-bottom-grid-left1-pos">
							<p>Discount 30%</p>
						</div>
					</div>
					
					<div class="banner-bottom-grid-left-grid left1-grid grid-left-grid1">
						<div class="banner-bottom-grid-left-grid1">
							<img src="images/2.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="banner-bottom-grid-left1-position">
							<div class="banner-bottom-grid-left1-pos1">
								<p>Latest New Collections</p>
							</div>
						</div>
					</div>
				</div>
				<div class="banner-bottom-grid-right animated wow slideInRight" data-wow-delay=".5s">
					<div class="banner-bottom-grid-left-grid grid-left-grid1">
						<div class="banner-bottom-grid-left-grid1">
							<img src="images/3.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="grid-left-grid1-pos">
							<p>top and classic designs <span>2016 Collection</span></p>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //banner-bottom -->
    
            <!-- direction 1 -->
{{--            <div id="slider-direction-1" class="t-cn slider-direction">--}}
{{--                <div class="slider-progress"></div>--}}
{{--                <div class="slider-content t-cn s-tb slider-1">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- direction 2 -->--}}
{{--                    <div id="slider-direction-2" class="slider-direction">--}}
{{--                        <div class="slider-progress"></div>--}}
{{--                        <div class="slider-content t-lfl s-tb slider-2 lft-pr">--}}
{{--                            <div class="title-container s-tb-c">--}}
{{--                                <h2 class="title1">minimal bags</h2>--}}
{{--                                <h3 class="title2" >collection</h3>--}}
{{--                                <h4 class="title2" >Simple is the best.</h4>--}}
{{--                                <a class="btn-title" href="">View collection</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
        </div>
        <!-- slider end-->
    </div>
    <!-- end home slider -->
    <div class="new-collections">
		<div class="container">
    @if (isset($productHot))
    <h3 class="animated wow zoomIn" data-wow-delay=".5s">New Collections</h3>
                <!-- our-product area start -->
                <p class="est animated wow zoomIn" data-wow-delay=".5s">Sản phẩm thuộc Ngọc Studio.</p>
                                <!-- single-product start -->
                                
                                @foreach($productHot as $hot)
                                <div class="new-collections-grids">
				<div class="col-md-3 new-collections-grid">
					<div class="new-collections-grid1 animated wow slideInUp" data-wow-delay=".5s">
                                                @if($hot->pro_number == 0)
                                                <span style="position: absolute;background: #e91e63;color: white;padding: 2px 6px;border-radius: 5px;font-size: 10px;">
                                                <div class="new-collections-grid1-image-pos">
                                                Tạm hết hàng</span>
                                                @endif
                                                @if($hot->pro_sale)
                                                <span style="position: absolute;font-size: 12px;background-image: linear-gradient(-90deg,#ec1f1f 0%,#ff9c00 100%);border-radius: 10px;padding: 2px 7px;color: white;right: 5px">{{$hot->pro_sale}} %</span>
                                                @endif

                                                <a href="{{route('get.detail.product',[$hot->pro_slug,$hot->id])}}">
                                                    <img class="primary-image" src="{{asset(pare_url_file($hot->pro_avatar))}}" style="width: 270px;height: 270px;" alt="" />

                                                </a>
                                                <div class="action-zoom">
                                                
							<div class="new-collections-grid1-image-pos">
                                                    <div class="add-to-cart">
                                                        <a href="{{route('get.detail.product',[$hot->pro_slug,$hot->id])}}" title="Quick View"><i class="fa fa-search-plus"></i></a>
                                                    </div>
                                                </div>
                                              </div>  
							<div class="new-collections-grid1-image-pos">
                                                <div class="actions">
                                                
                                                    <div class="action-buttons">
                                                    
                                                        <div class="add-to-links">
                                                        
                                                            <div class="add-to-wishlist">
                                                            
                                                                <a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                            </div>
                                                            <div class="compare-button">
                                                                <a href="{{route('add.shopping.cart',$hot->id)}}" title="Add to Cart"><i class="icon-bag"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="quickviewbtn">
                                                            <a href="{{route('get.detail.product',[$hot->pro_slug,$hot->id])}}" title="Add to Compare"><i class="fa fa-retweet"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="new-collections-grid1-left simpleCart_shelfItem">
                                                    <span class="new-price">{{number_format($hot->pro_price,0,',','.')}}đ</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h2 class="product-name" style="font-size: 14px;color: #333;display: -webkit-box;-webkit-line-clamp: 1;-webkit-box-orient: vertical;text-overflow: ellipsis;overflow: hidden;"><a href="#">{{$hot->pro_name}}</a></h2>
                                                <p style="overflow: hidden;white-space: normal;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;font-size: 12px;color: #333;">{{$hot->pro_description}}</p>
                                            </div>
                                        </div>
                                    </div>

                            @endforeach
                            <!-- single-product end -->
                                <!-- single-product start -->

                            </div>
                        </div>
                    </div>
                </div>
                <!-- our-product area end -->
            </div>
        </div>
    @endif
    <!-- product section end -->
    <!-- latestpost area start -->
    <!-- new-timer -->
	<div class="timer">
		<div class="container">
			<div class="timer-grids">
				<div class="col-md-8 timer-grid-left animated wow slideInLeft" data-wow-delay=".5s">
					<h3><a href="products.html">How to Make Great Videos (with Your DSLRs or Mirrorless Cameras)</a></h3>
					<div class="rating">
						<div class="rating-left">
							<img src="images/2.png" alt=" " class="img-responsive" />
						</div>
						<div class="rating-left">
							<img src="images/2.png" alt=" " class="img-responsive" />
						</div>
						<div class="rating-left">
							<img src="images/2.png" alt=" " class="img-responsive" />
						</div>
						<div class="rating-left">
							<img src="images/2.png" alt=" " class="img-responsive" />
						</div>
						<div class="rating-left">
							<img src="images/1.png" alt=" " class="img-responsive" />
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="new-collections-grid1-left simpleCart_shelfItem timer-grid-left-price">
						<p><i>$580</i> <span class="item_price">$550</span></p>
						<h4>DSLRs have a come a long way from shooting 720p HD videos to the modern behemoths that have built-in 4K / UHD capabilities and a host of video shooting features. Though a true professional would still prefer a proper video camera because it has better video shooting features, DSLRs are no pushovers.</h4>
						<p><a class="item_add timer_add" href="#">add to cart </a></p>
					</div>
					<div id="counter"> </div>
					<script src="newcss/js/jquery.countdown.js"></script>
					<script src="newcss/js/script.js"></script>
				</div>
				<div class="col-md-4 timer-grid-right animated wow slideInRight" data-wow-delay=".5s">
					<div class="timer-grid-right1">
						<img src="images/17.jpg" alt=" " class="img-responsive" />
						<div class="timer-grid-right-pos">
							<h4>Special Offer</h4>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //new-timer -->
    @if (isset($articleNews))
        <div class="latest-post-area">
            <div class="container">
                <div class="area-title">
                    <h2>Bài Viết Mới</h2>
                </div>
                <div class="row">
                    <div class="all-singlepost">
                        <!-- single latestpost start -->
                        @foreach($articleNews as $arNew)
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="single-post" style="margin-bottom: 10px">
                                    <div class="post-thumb">
                                        <a href="{{route('get.detail.article',[$arNew->a_slug,$arNew->id])}}">
                                            <img src="{{asset(pare_url_file($arNew->a_avatar))}}" alt="" style="width: 370px;height: 280px" />
                                        </a>
                                    </div>
                                    <div class="post-thumb-info">
                                        <div class="post-time">
                                            <a href="#">Beauty</a>
                                            <span>/</span>
                                            <span>Post by</span>
                                            <span>BootExperts</span>
                                        </div>
                                        <div class="postexcerpt">
                                            <p style="height: 40px">{{ $arNew->a_name }}</p>
                                            <a href="{{route('get.detail.article',[$arNew->a_slug,$arNew->id])}}" class="read-more">Xem thêm</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single latestpost end -->
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    @endif
    
            </div>
        </div>
    </div>
    <!-- block category area end -->
    <!-- FOOTER START -->
@stop