@extends('master')
@section('content')
<div class="fvc" style="float:left;width:100%;">

	<div class="banner_page_list">

		<h1>Đăng ký tài khoản</h1>

	</div>
	<div class="breadcrumbs">
		<div class="container">
			<ul>
				<li class="home"> <a href="/" title="Trang chủ">Trang chủ &nbsp;</a></li>
				<!-- blog -->

				<li><strong>Đăng ký tài khoản</strong></li>

				<!-- current_tags -->
			</ul>
		</div>
	</div>

	<section class="tzpage-default">
		<h3 class="tz-title-bold-3">ĐĂNG KÝ THÔNG TIN TÀI KHOẢN</h3>
		<div class="container">
			<div class="joom-login">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">					
						<form accept-charset="UTF-8" action="/account/register" id="tzrgister" class="shopform" method="post">

							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<input placeholder="Họ: *" type="text" name="LastName" id="last_name" required="">
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<input placeholder="Tên: *" type="text" name="FirstName" id="first_name" required="">
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<input placeholder="Email: *" type="text" name="email" id="email" required="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$" data-validation="email">
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<input placeholder="Mật khẩu: *" type="password" name="password" id="creat_password" required="">
								</div>
							</div>
							<div class="submit-form">
								<button type="submit"><span>ĐĂNG KÝ</span></button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
@endsection