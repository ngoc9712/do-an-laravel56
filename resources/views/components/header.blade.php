<div class="header">
		<div class="container">
			<div class="header-grid">
				<div class="header-grid-left animated wow slideInLeft" data-wow-delay=".5s">
					<ul>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true">
						</i><a href="nngoc6215@gmail.com">nngoc6215@gmail.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>0931.971.411</li>
						<li><i class="glyphicon glyphicon-log-in" aria-hidden="true"></i><a href="{{route('get.login')}}">Đăng nhập</a></li>
						<li><i class="glyphicon glyphicon-book" aria-hidden="true"></i><a href="{{route('get.register')}}">Đăng kí</a></li>
					</ul>
				</div>
				<div class="header-grid-right animated wow slideInRight" data-wow-delay=".5s">
					<ul class="social-icons">
						<li><a href="#" class="facebook"></a></li>
						<li><a href="#" class="twitter"></a></li>
						<li><a href="#" class="g"></a></li>
						<li><a href="#" class="instagram"></a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
<header class="short-stor">
    <div class="container-fluid">
        <div class="row">
            <!-- logo start -->
            <div class="logo-nav">
				<div class="logo-nav-left animated wow zoomIn" data-wow-delay=".5s">
					<h1><a href="{{route('home')}}">Ngoc Studio <span>	[Camera]</span></a></h1>
				</div>
				<div class="logo-nav-left1">
					<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header nav_2">
						<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div> 
            <!-- logo end -->
            <!-- mainmenu area start -->
            <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav">
                            <li class="active"><a href="{{route('home')}}" class="act">Home</a></li>
                            <!-- Mega Menu -->
							<li class="expand">
                                <a href="#"  class="dropdown-toggle" data-toggle="dropdown">Product<b class="caret"></b></a>
								<ul class="dropdown-menu multi-column columns-3">
								<div class="row">
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
									<ul class="restrain sub-menu">
                                    @if (isset($categories))
                                        @foreach($categories as $cate)
                                            <li><a href="{{route('get.list.product',[$cate->c_slug,$cate->id])}}">{{$cate->c_name}}</a></li>
                                        @endforeach
                                    @endif
                                </ul>
								</ul>
								</ul>
                            </li>
                            <li class="expand"><a href="{{route('get.list.article')}}" title="Tin tức">News</a></li>
                            <li class="expand"><a href="{{route('get.contact')}}">Liên hệ</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- top details area start -->
            <div class="header-right">
					<div class="cart box_1">
						<a href="{{route('get.list.shopping.cart')}}">
							<h3> <div class="total">
								<span class="simpleCart_total">{{Cart::count()}}</span> (<span id="simpleCart_quantity" class="simpleCart_quantity">{{Cart::count()}}</span> items)</div>
								<img src="images/bag.png" alt="" />
							</h3>
						</a>
						<p><a href="javascript:;" class="simpleCart_empty">GIỎ HÀNG</a></p>
						<div class="clearfix"> </div>
					</div>
                    <div class="clearfix"> </div>	
				</div>
                    <!-- addcart top start -->
                    <!-- search divition start -->
                    <div class="logo-nav-right">
					<div class="search-box">
						<div id="sb-search" class="sb-search">
							<form>
								<input class="sb-search-input" placeholder="Enter your search term..." type="search" id="search">
								<input class="sb-search-submit" type="submit" value="">
								<span class="sb-icon-search"> </span>
							</form>
						</div>
					</div>
						<!-- search-scripts -->
						<script src="newcss/js/classie.js"></script>
						<script src="newcss/js/uisearch.js"></script>
							<script>
								new UISearch( document.getElementById( 'sb-search' ) );
							</script>
						<!-- //search-scripts -->
				</div>
                    <!-- search divition end -->
                </div>
            </div>
            <!-- top details area end -->
        </div>
    </div>
</header>