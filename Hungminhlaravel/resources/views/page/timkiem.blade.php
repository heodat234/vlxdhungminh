@extends('master')
@section('content')
<div class="fvc" style="float:left;width:100%;">


	<div class="banner_page_list">

		<h1>Tìm Kiếm</h1>

	</div>
	<div class="breadcrumbs">
		<div class="container">
			<ul>
				<li class="home"> <a href="/" title="Trang chủ">Trang chủ &nbsp;</a></li>
				<!-- blog -->

				<li class="active"><strong>nhà ở - Mendover Theme</strong></li> 

				<style>

					.breadcrumb-title {
						text-transform: capitalize;
					}
				</style>

				<!-- list_collections -->

				<!-- current_tags -->				
			</ul>
		</div>
	</div>

	<section class="no-bg-color-parallax parallax-black theme-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12" style="margin:15px 0px;">
					<h3 class="text-uppercase paralax-header"> 		
						<strong>Tìm kiếm</strong>
					</h3>
				</div>
			</div>
		</div>
	</section>
	<div class="main-container col2-right-layout">
		<div class="main container">
			<div class="row">
				<section class="col-main col-sm-12">
					<div class="my-account search-page-main">
						<div class="sort-select" style="padding: 0px;">
							<form action="/search" method="get" class="search-form" role="search">
								<div class="ip_search">
									<input class="src_input" type="text" name="query" value="nhà ở">
									<input class="button_src" type="submit" value="Tìm kiếm">
								</div>
							</form>
						</div>

						<div class="my-wishlist" style="margin-top:30px;">

							<div class="single-product">
								<div class="col-lg-3 col-md-3 col-sm-3">
									<div class="product-img">
										<a href="/mau-nha-pho-dep-5-tang-voi-tong-mau-don-sac" title="Mẫu nhà phố đẹp 5 tầng với tông màu đơn sắc">
											<img src="//bizweb.dktcdn.net/thumb/medium/100/069/071/products/13.jpg?v=1458794721177" class="primary-image" alt="Mẫu nhà phố đẹp 5 tầng với tông màu đơn sắc">
										</a>
									</div>
								</div>
								<div class="col-lg-9 col-md-9 col-sm-9 stl_search" style="margin-bottom: 15px;">
									<div class="product-info">
										<h3 class="product-name">
											<a href="/mau-nha-pho-dep-5-tang-voi-tong-mau-don-sac" class="text2line">Mẫu nhà phố đẹp 5 tầng với tông màu đơn sắc</a>
										</h3>
										<div class="price-box-small">


											<small>
												2.500.000.000₫
												&nbsp;&nbsp;
												<em>
													2.700.000.000₫			
												</em>

											</small>



										</div>
										<div class="product-desc">
											<p style="font-size: 16px;" class="text3line">

												Ngôi nhà phố đẹp 5 tầng này có thiết kế đơn giản hiện đại với nội và ngoại thất đều được dùng những tông màu đơn sắc bình dị nhưng vẫn tạo được một sự thanh lịch mang đậm phong cách hiện đại trẻ trung cho ngôi nhà. 

											</p>
										</div>
									</div>
								</div>
							</div>

							<div class="single-product">
								<div class="col-lg-3 col-md-3 col-sm-3">
									<div class="product-img">
										<a href="/nha-pho-dep-3-tang-khac-phuc-nang-huong-tay" title="Nhà phố đẹp 3 tầng khắc phục nắng hướng tây">
											<img src="//bizweb.dktcdn.net/thumb/medium/100/069/071/products/16.jpg?v=1458793716283" class="primary-image" alt="">
										</a>
									</div>
								</div>
								<div class="col-lg-9 col-md-9 col-sm-9 stl_search" style="margin-bottom: 15px;">
									<div class="product-info">
										<h3 class="product-name">
											<a href="/nha-pho-dep-3-tang-khac-phuc-nang-huong-tay" class="text2line">Nhà phố đẹp 3 tầng khắc phục nắng hướng tây</a>
										</h3>
										<div class="price-box-small">


											<small>4.100.000.000₫</small>



										</div>
										<div class="product-desc">
											<p style="font-size: 16px;" class="text3line">

												Điểm bất lợi của ngôi nhà phố đẹp 3 tầng này là có mặt tiền hướng tây, thường làm cho ngôi nhà của bạn có cảm giác như đang bị nung nóng bởi một bếp lò khổng lồ của những tia nắng mặt trời chiếu rọi. 

											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<style>
		.breadcrumbs{display:none;}
	</style>
</div>
@endsection