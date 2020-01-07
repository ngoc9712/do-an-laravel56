@extends('layouts.app')
@section('content')

<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="{{route('home')}}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Trang chủ</a></li>
				<li class="category3">Đăng nhập</li>
			</ol>
		</div>
	</div>
    <div class="login">
		<div class="container">
			<h3 class="animated wow zoomIn" data-wow-delay=".5s">Đăng nhập</h3>
            @csrf
			<p class="est animated wow zoomIn" data-wow-delay=".5s">Hãy đăng nhập !!</p>
			<div class="login-form-grids animated wow slideInUp" data-wow-delay=".5s">
                        <form method="post" class="login" action="">
                                <p class="form-row form-row-wide">
                                    <label for="username">Email<span class="required">*</span></label>
                                    <input type="text" class="input-text" name="email" id="username" value="" required>
                                </p>
                                <p class="form-row form-row-wide">
                                    <label for="password">Password <span class="required">*</span></label>
                                    <input class="input-text" type="password" name="password" id="password" required>
                                </p>
                                <div class="form-action">
                                <p class="lost_password"> <a href="#">Lost your password?</a></p>
                                <div class="actions-log">
                                <input type="submit" class="button" name="login" value="Đăng nhập">
                                </div>
                                <label for="rememberme" class="inline">
                                    <input name="rememberme" type="checkbox" id="rememberme" value="forever"> Remember me </label>
                            </div>
                            </div>
                          
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
