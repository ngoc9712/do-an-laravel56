@extends('layouts.app')

@section('content')
<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
            <li><a href="{{route('home')}}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="category3">Đăng kí</li>
			</ol>
		</div>
	</div>
    <div class="register">
		<div class="container">
			<h3 class="animated wow zoomIn" data-wow-delay=".5s">Đăng kí</h3>
			<p class="est animated wow zoomIn" data-wow-delay=".5s">Hãy là người nhà của chúng tôi !!</p>
			<div class="login-form-grids">
                        <form method="post" class="login" action="">
                            @csrf
                            <form class="animated wow slideInUp" data-wow-delay=".5s">
                                <p class="form-row form-row-wide">
                                    <label for="username">Họ tên<span class="required">*</span></label>
                                    <input type="text" class="input-text" name="name" id="username" value="" placeholder="" >
                                    @if($errors->has('name'))
                                        <span class="error-text">
                                        {{$errors->first('name')}}
                                         </span>
                                    @endif
                                </p>
                                <p class="form-row form-row-wide">
                                    <label for="username">Email<span class="required">*</span></label>
                                    <input type="text" class="input-text" name="email" id="username" value="" placeholder="" >
                                    @if($errors->has('email'))
                                        <span class="error-text">
                                        {{$errors->first('email')}}
                                         </span>
                                    @endif
                                </p>
                                <p class="form-row form-row-wide">
                                    <label for="username">Địa chỉ<span class="required">*</span></label>
                                    <input type="text" class="input-text" name="address" id="username" value="" placeholder="" >
                                    @if($errors->has('address'))
                                        <span class="error-text">
                                        {{$errors->first('address')}}
                                         </span>
                                    @endif
                                </p>
                                <p class="form-row form-row-wide">
                                    <label for="password">Password <span class="required">*</span></label>
                                    <input class="input-text" type="password" name="password" id="password" placeholder=""  >
                                    @if($errors->has('password'))
                                        <span class="error-text">
                                        {{$errors->first('password')}}
                                         </span>
                                    @endif
                                </p>
                                <p class="form-row form-row-wide">
                                    <label for="username">Số điện thoại<span class="required">*</span></label>
                                    <input type="text" class="input-text" name="phone" id="username" value="" placeholder="" >
                                    @if($errors->has('phone'))
                                        <span class="error-text">
                                        {{$errors->first('phone')}}
                                         </span>
                                    @endif
                                </p>
                                <div class="form-action">
                                <label for="rememberme" class="inline">
                                    <input name="rememberme" type="checkbox" id="rememberme" value="forever"> Remember me </label>
					<input type="submit" value="Đăng kí">
				</p form>
                            </div>
                           
                </div>
                               
                                    <div class="register-home animated wow slideInUp" data-wow-delay=".5s">
				<a href="{{route('home')}}">Home</a>
			</div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
