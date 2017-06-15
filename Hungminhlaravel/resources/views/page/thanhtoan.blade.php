@extends('master')
@section('content')

<body class="body--custom-background-color ">
	<form method="post" action="" data-toggle="validator" class="formCheckout" novalidate="true">
		<div context="checkout" define="{checkout: new Bizweb.Checkout(this,{ existCode: false, totalOrderItemPrice: 250000000.0000, discount: 0, shippingFee: 0, freeShipping: false, requiresShipping: true, code: &quot;&quot;, settingLanguage: &quot;vi&quot;, moneyFormat: &quot;{{amount_no_decimals_with_comma_separator}}₫&quot;, discountLabel: &quot;Miễn phí&quot;, districtPolicy: &quot;optional&quot;, district: &quot;&quot;, province:&quot;&quot; })}" class="container checkout">
			<div class="header">
				<div class="wrap">
					<div class="shop logo logo--left ">
						
						<h1 class="shop__name">
							<a href="/">
								Mendover Theme
							</a>
						</h1>
						
					</div>
				</div>
			</div>
			<div class="main">
				<div class="wrap clearfix">
					<div class="row">
						<div class="col-md-4 col-sm-12 order-info" define="{order_expand: false}">
							<div class="order-summary order-summary--custom-background-color ">
								<div class="order-summary-header summary-header--thin summary-header--border">
									<h2>
										<label class="control-label">Đơn hàng</label>
										<label class="control-label">(1)</label>
									</h2>
									<a class="underline-none expandable expandable--pull-right mobile" bind-event-click="toggle(this, '.order-items')" bind-class="{open: order_expand}" href="javascript:void(0)">
										Xem chi tiết
									</a>
								</div>
								<div class="order-items mobile--is-collapsed" bind-class="{'mobile--is-collapsed': !order_expand}">
									<div class="summary-body summary-section summary-product">
										<div class="summary-product-list">
											<ul class="product-list">
												
												<li class="product product-has-image clearfix">
													<div class="product-thumbnail pull-left">
														<div class="product-thumbnail__wrapper">
															
															<img src="//bizweb.dktcdn.net/thumb/thumb/100/069/071/products/5.jpg?v=1458791853847" alt="Bán căn hộ Pearl Plaza 2 phòng ngủ tầng 15" class="product-thumbnail__image">
															
														</div>
														<span class="product-thumbnail__quantity" aria-hidden="true">1</span>
													</div>
													<div class="product-info pull-left">
														<span class="product-info-name">
															
															<strong>Bán căn hộ Pearl Plaza 2 phòng ngủ tầng 15</strong>
														</span>
														
														
													</div>
													<strong class="product-price pull-right">
														250.000.000₫
													</strong>
												</li>
												
											</ul>
										</div>
									</div>
									<div define="{showDiscountTextBox: false}" class="summary-section">
										<a bind-event-click="showDiscountTextBox =!showDiscountTextBox" bind-show="!showDiscountTextBox &amp;&amp; (!existCode ||code == null || !code.length)" class="more hidden-xs hidden-sm" href="javascript:void(0)">Nhập mã giảm giá</a>
										<div bind-show="showDiscountTextBox &amp;&amp; (!existCode ||code == null || !code.length)" class="form-group m0 hide visible-md visible-lg">
											<div class="input-group">
												<input bind="code" name="code" type="text" class="form-control" placeholder="Nhập mã giảm giá">
												<span class="input-group-btn">
													<button bind-event-click="caculateShippingFee()" class="btn btn-primary event-voucher-apply" type="button">Áp dụng</button>
												</span>
											</div>
										</div>
										<div bind-show="(!existCode ||code == null || !code.length)" class="form-group m0 visible-xs visible-sm">
											<div class="input-group">
												<input bind="code" name="code" type="text" class="form-control" placeholder="Nhập mã giảm giá">
												<span class="input-group-btn">
													<button bind-event-click="caculateShippingFee()" class="btn btn-primary event-voucher-apply" type="button">Áp dụng</button>
												</span>
											</div>
										</div>
										<div bind-class="{'warning' : existCode &amp;&amp; !freeShipping &amp;&amp; discount == 0,'success' : existCode &amp;&amp; ( freeShipping || discount >0 )}" class="clearfix hide" bind-show="code!= null &amp;&amp; code.length &amp;&amp; existCode">
											<div class="pull-left">
												<i class="applied-discount-status"></i>
											</div>
											<div bind="code" class="pull-left applied-discount-code"></div>
											<div bind="(discountShipping &amp;&amp; freeShipping) ? 'Miễn phí' : money(discount,'{{amount_no_decimals_with_comma_separator}}₫')" class="pull-right">0₫</div>
											<input bind-event-click="removeCode()" class="btn btn-delete" type="button" value="×" name="commit">
										</div>
										<div class="error mt10 hide" bind-show="inValidCode">
											Mã khuyến mãi không hợp lệ
										</div>
									</div>
								</div>
								<div class="summary-section border-top-none--mobile">
									<div class="total-line total-line-subtotal clearfix">
										<span class="total-line-name pull-left">
											Tạm tính
										</span>
										<span bind="money(totalOrderItemPrice - discount,'{{amount_no_decimals_with_comma_separator}}₫')" class="total-line-subprice pull-right">250.000.000₫</span>
									</div>
									<div class="total-line total-line-shipping clearfix" bind-show="requiresShipping">
										<span class="total-line-name pull-left">
											Phí vận chuyển
										</span>
										<span bind="shippingFee >  0 ? money(shippingFee,'{{amount_no_decimals_with_comma_separator}}₫') : ((requiresShipping &amp;&amp; shippingMethods.length == 0) ? 'Khu vực này không hỗ trợ vận chuyển': 'Miễn phí')" class="total-line-shipping pull-right" bind-show="ShippingProvinceId || BillingProvinceId &amp;&amp; !otherAddress || (requiresShipping &amp;&amp; shippingMethods.length > 0)">40.000₫</span>
									</div>
									<div class="total-line total-line-total clearfix">
										<span class="total-line-name pull-left">
											Tổng cộng
										</span>
										<span bind="money(totalOrderItemPrice + (isNaN(shippingFee) ? 0 : shippingFee) - discount,'{{amount_no_decimals_with_comma_separator}}₫')" class="total-line-price pull-right">250.040.000₫</span>
									</div>
								</div>
							</div>
							<div class="form-group clearfix hidden-sm hidden-xs">
								<input class="btn btn-primary col-md-12 mt10 btn-checkout" type="button" bind-event-click="paymentCheckout('AIzaSyDWReBlPxFt-i145Gsd502wOqRS0KXFHW4;AIzaSyAbtwApDToQWn7snVio3Y9PWFbcpdnOWdk;AIzaSyA5rJOu8wci0li24bnZ1WogMEH93p-DGlM')" value="ĐẶT HÀNG">
							</div>
							<div class="form-group has-error">
								<div class="help-block ">
									<ul class="list-unstyled">
										
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-12 customer-info">
							<div define="{billing_address: {}, billing_expand:true}" class="form-group m0">
								<h2>
									<label class="control-label">Thông tin mua hàng</label>
								</h2>
							</div>
							
							<div class="form-group">
								<a href="/account/register">Đăng ký tài khoản mua hàng</a>
								<span style="padding: 0 5px;">/</span>
								<a href="/account/login?returnUrl=/checkout">Đăng nhập </a>
							</div>
							
							<hr class="divider">
							
							
							<div class="form-group" bind-class="{'has-error' : invalidEmail}">
								<input data-error="Vui lòng nhập email đúng định dạng" required="" name="Email" value="" type="email" class="form-control" placeholder="Email" pattern="^([a-zA-Z0-9_\-\.\+]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$">
								<div class="help-block with-errors">
								</div>
							</div>
							
							<div class="billing">
								<div class="form-group">
									<a class="underline-none open" bind-event-click="billing_expand = !billing_expand" bind-class="{expandable: otherAddress, open: billing_expand}" href="javascript:void(0)">
										<span bind-show="!otherAddress">Thông tin thanh toán và nhận hàng</span>
										<span bind-show="otherAddress" class="hide">Thông tin thanh toán</span>
									</a>
								</div>
								<div bind-show="billing_expand || !otherAddress">
									<div class="form-group">
										<input data-error="Vui lòng nhập họ tên" required="" bind="billing_address.full_name" name="BillingAddress.LastName" class="form-control" placeholder="Họ và tên">
										<div class="help-block with-errors"></div>
									</div>
									
									<div class="form-group">
										<input bind="billing_address.phone" name="BillingAddress.Phone" class="form-control" placeholder="Số điện thoại" data-error="Vui lòng nhập số điện thoại">
										<div class="help-block with-errors"></div>
									</div>
									
									
									<div class="form-group">
										<input bind="billing_address.address1" name="BillingAddress.Address1" class="form-control" placeholder="Địa chỉ">
										<div class="help-block with-errors"></div>
									</div>
									
									
									
									<div class="form-group">
										<div class="next-select__wrapper">
											<select id="billingProvince" bind-event-change="billingProviceChange()" bind="BillingProvinceId" name="BillingProvinceId" class="form-control next-select" required="" data-error="Bạn chưa chọn tỉnh thành">
												<option value="">--- Chọn Tỉnh thành ---</option>
												
												<option value="1">Hà Nội</option>

												<option value="2">TP Hồ Chí Minh</option>

												<option value="3">An Giang</option>

												<option value="4">Bà Rịa-Vũng Tàu</option>

												<option value="5">Bắc Giang</option>

												<option value="6">Bắc Kạn</option>

												<option value="7">Bạc Liêu</option>

												<option value="8">Bắc Ninh</option>

												<option value="9">Bến Tre</option>

												<option value="10">Bình Định</option>

												<option value="11">Bình Dương</option>

												<option value="12">Bình Phước</option>

												<option value="13">Bình Thuận</option>

												<option value="14">Cà Mau</option>

												<option value="15">Cần Thơ</option>

												<option value="16">Cao Bằng</option>

												<option value="17">Đà Nẵng</option>

												<option value="18">Đắk Lắk</option>

												<option value="19">Đắk Nông</option>

												<option value="20">Điện Biên</option>

												<option value="21">Đồng Nai</option>

												<option value="22">Đồng Tháp</option>

												<option value="23">Gia Lai</option>

												<option value="24">Hà Giang</option>

												<option value="25">Hà Nam</option>

												<option value="26">Hà Tĩnh</option>

												<option value="27">Hải Dương</option>

												<option value="28">Hải Phòng</option>

												<option value="29">Hậu Giang</option>

												<option value="30">Hòa Bình</option>

												<option value="31">Hưng Yên</option>

												<option value="32">Khánh Hòa</option>

												<option value="33">Kiên Giang</option>

												<option value="34">Kon Tum</option>

												<option value="35">Lai Châu</option>

												<option value="36">Lâm Đồng</option>

												<option value="37">Lạng Sơn</option>

												<option value="38">Lào Cai</option>

												<option value="39">Long An</option>

												<option value="40">Nam Định</option>

												<option value="41">Nghệ An</option>

												<option value="42">Ninh Bình</option>

												<option value="43">Ninh Thuận</option>

												<option value="44">Phú Thọ</option>

												<option value="45">Phú Yên</option>

												<option value="46">Quảng Bình</option>

												<option value="47">Quảng Nam</option>

												<option value="48">Quảng Ngãi</option>

												<option value="49">Quảng Ninh</option>

												<option value="50">Quảng Trị</option>

												<option value="51">Sóc Trăng</option>

												<option value="52">Sơn La</option>

												<option value="53">Tây Ninh</option>

												<option value="54">Thái Bình</option>

												<option value="55">Thái Nguyên</option>

												<option value="56">Thanh Hóa</option>

												<option value="57">Thừa Thiên Huế</option>

												<option value="58">Tiền Giang</option>

												<option value="59">Trà Vinh</option>

												<option value="60">Tuyên Quang</option>

												<option value="61">Vĩnh Long</option>

												<option value="62">Vĩnh Phúc</option>

												<option value="63">Yên Bái</option>

											</select>
											<span class="next-icon next-icon--size-12">
												<img src="//bizweb.dktcdn.net/assets/themes_support/angle-down.png?4" alt="" class="img-responsive">
											</span>
										</div>
										<div class="help-block with-errors"></div>
									</div>
									
									<div bind-show="!otherAddress" class="form-group">
										<div class="next-select__wrapper">
											<select bind="BillingDistrictId" id="billingDistrict" bind-event-change="billingDistrictChange()" name="BillingDistrictId" class="form-control next-select" data-error="Bạn chưa chọn quận huyện"><option value="">--- Chọn quận huyện ---</option></select>
											<span class="next-icon next-icon--size-12">
												<img src="//bizweb.dktcdn.net/assets/themes_support/angle-down.png?4" alt="" class="img-responsive">
											</span>
										</div>
										<div class="help-block with-errors"></div>
									</div>
									
									
									<div bind-show="!otherAddress" class="form-group">
										<div class="error hide" bind-show="requiresShipping &amp;&amp; loadedShippingMethods &amp;&amp; shippingMethods.length == 0  &amp;&amp; BillingProvinceId  ">
											<label>Khu vực này không hỗ trợ vận chuyển</label>
										</div>
									</div>
									<hr class="divider">
								</div>
							</div>
							<div bind-show="otherAddress" define="{shipping_address: {}, shipping_expand:true,show_district:  true ,show_country:  false }" class="shipping  hide">
								<div class="form-group">
									<a class="underline-none expandable open" bind-event-click="shipping_expand = !shipping_expand" bind-class="{open: shipping_expand}" href="javascript:void(0)">
										Thông tin nhận hàng
									</a>
								</div>
								<div bind-show="shipping_expand || !otherAddress">
									<div class="form-group">
										<input data-error="Vui lòng nhập họ tên" required="" bind="shipping_address.full_name" name="ShippingAddress.LastName" class="form-control" placeholder="Họ và tên">
										<div class="help-block with-errors"></div>
									</div>
									
									<div class="form-group">
										<input bind="shipping_address.phone" name="ShippingAddress.Phone" class="form-control" placeholder="Số điện thoại">
										<div class="help-block with-errors"></div>
									</div>
									
									
									<div class="form-group">
										<input bind="shipping_address.address1" name="ShippingAddress.Address1" class="form-control" placeholder="Địa chỉ">
										<div class="help-block with-errors"></div>
									</div>
									
									
									
									<div class="form-group">
										<div class="next-select__wrapper">
											<select id="shippingProvince" bind="ShippingProvinceId" bind-event-change="shippingProviceChange()" name="ShippingProvinceId" class="form-control next-select" required="" data-error="Bạn chưa chọn tỉnh thành">
												<option value="">--- Chọn Tỉnh thành ---</option>
												
												<option value="1">Hà Nội</option>

												<option value="2">TP Hồ Chí Minh</option>

												<option value="3">An Giang</option>

												<option value="4">Bà Rịa-Vũng Tàu</option>

												<option value="5">Bắc Giang</option>

												<option value="6">Bắc Kạn</option>

												<option value="7">Bạc Liêu</option>

												<option value="8">Bắc Ninh</option>

												<option value="9">Bến Tre</option>

												<option value="10">Bình Định</option>

												<option value="11">Bình Dương</option>

												<option value="12">Bình Phước</option>

												<option value="13">Bình Thuận</option>

												<option value="14">Cà Mau</option>

												<option value="15">Cần Thơ</option>

												<option value="16">Cao Bằng</option>

												<option value="17">Đà Nẵng</option>

												<option value="18">Đắk Lắk</option>

												<option value="19">Đắk Nông</option>

												<option value="20">Điện Biên</option>

												<option value="21">Đồng Nai</option>

												<option value="22">Đồng Tháp</option>

												<option value="23">Gia Lai</option>

												<option value="24">Hà Giang</option>

												<option value="25">Hà Nam</option>

												<option value="26">Hà Tĩnh</option>

												<option value="27">Hải Dương</option>

												<option value="28">Hải Phòng</option>

												<option value="29">Hậu Giang</option>

												<option value="30">Hòa Bình</option>

												<option value="31">Hưng Yên</option>

												<option value="32">Khánh Hòa</option>

												<option value="33">Kiên Giang</option>

												<option value="34">Kon Tum</option>

												<option value="35">Lai Châu</option>

												<option value="36">Lâm Đồng</option>

												<option value="37">Lạng Sơn</option>

												<option value="38">Lào Cai</option>

												<option value="39">Long An</option>

												<option value="40">Nam Định</option>

												<option value="41">Nghệ An</option>

												<option value="42">Ninh Bình</option>

												<option value="43">Ninh Thuận</option>

												<option value="44">Phú Thọ</option>

												<option value="45">Phú Yên</option>

												<option value="46">Quảng Bình</option>

												<option value="47">Quảng Nam</option>

												<option value="48">Quảng Ngãi</option>

												<option value="49">Quảng Ninh</option>

												<option value="50">Quảng Trị</option>

												<option value="51">Sóc Trăng</option>

												<option value="52">Sơn La</option>

												<option value="53">Tây Ninh</option>

												<option value="54">Thái Bình</option>

												<option value="55">Thái Nguyên</option>

												<option value="56">Thanh Hóa</option>

												<option value="57">Thừa Thiên Huế</option>

												<option value="58">Tiền Giang</option>

												<option value="59">Trà Vinh</option>

												<option value="60">Tuyên Quang</option>

												<option value="61">Vĩnh Long</option>

												<option value="62">Vĩnh Phúc</option>

												<option value="63">Yên Bái</option>

											</select>
											<span class="next-icon next-icon--size-12">
												<img src="//bizweb.dktcdn.net/assets/themes_support/angle-down.png?4" alt="" class="img-responsive">
											</span>
										</div>
										<div class="help-block with-errors"></div>
									</div>
									
									<div class="form-group">
										<div class="next-select__wrapper">
											<select id="shippingDistrict" bind="ShippingDistrictId" bind-event-change="shippingDistrictChange()" name="ShippingDistrictId" class="form-control next-select" data-error="Bạn chưa chọn quận huyện"><option value="">--- Chọn quận huyện ---</option></select>
											<span class="next-icon next-icon--size-12">
												<img src="//bizweb.dktcdn.net/assets/themes_support/angle-down.png?4" alt="" class="img-responsive">
											</span>
										</div>
										<div class="help-block with-errors"></div>
									</div>
									
									
									<div class="form-group">
										<div class="error hide" bind-show="requiresShipping &amp;&amp; shippingMethods.length == 0 &amp;&amp; ShippingProvinceId ">
											<label>Khu vực này không hỗ trợ vận chuyển</label>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<textarea name="note" value="" class="form-control" placeholder="Ghi chú"></textarea>
							</div>
							<div class="form-group" bind-show="requiresShipping">
								<div class="checkbox">
									<label>
										<div bind-class="{'checked' : otherAddress}" class="icheckbox_square" style="position: relative;">
											<input bind-event-change="changeOtherAddress(this)" bind="otherAddress" type="checkbox" name="otherAddress" value="false" class="icheck square" style="position: absolute; opacity: 0;">
											<ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: none repeat scroll 0% 0% rgb(255, 255, 255); border: 0px none; opacity: 0;"></ins>
										</div>
										Giao hàng đến địa chỉ khác
									</label>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-12">
							<div class="shipping-method" bind-show="shippingMethods.length > 0">
								<div class="form-group">
									<h2>
										<label class="control-label">Vận chuyển</label>
									</h2>
									<div class="next-select__wrapper">
										<select bind-event-change="changeShippingMethod()" name="ShippingMethod" bind="shippingMethod" class="form-control next-select"><option fee="40000" value="77611,0">Giao hàng tận nơi - 40.000₫</option></select>
										<span class="next-icon next-icon--size-12">
											<img src="//bizweb.dktcdn.net/assets/themes_support/angle-down.png?4" alt="" class="img-responsive">
										</span>
									</div>
								</div>
							</div>
							<div class="form-group payment-method-list">
								<h2>
									<label class="control-label">Thanh toán</label>
								</h2>
								
								<div class="radio">
									<label class="radio-wrapper">
										<div class="radio_input">
											<div bind-class="{'checked' : payment_method_id == 71695}" class="iradio_square checked" style="position: relative;">
												
												<input checked="checked" bind="payment_method_id" value="71695" data-check-id="4" type="radio" class="icheck square" name="PaymentMethodId" style="position: absolute; opacity: 0;">
												
												<ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: none repeat scroll 0% 0% rgb(255, 255, 255); border: 0px none; opacity: 0;"></ins>
											</div>
										</div>
										<span>Thanh toán khi giao hàng (COD)</span>
									</label>
									
									<div bind-class="{'slidedown-visible' : payment_method_id == 71695}" class="payment-method-description slidedown-hidden slidedown-visible">
										<p>cod</p>
									</div>
									
									
									
									
								</div>

								<a href="javascript:void(0)" data-toggle="modal" data-target="#moca-modal" data-backdrop="static" data-keyboard="false" class="trigger-moca-modal" style="display: none;" title="Thanh toán qua Moca">
								</a>
								<a href="javascript:void(0)" data-toggle="modal" data-target="#moca-error-modal" class="trigger-moca-error-modal" style="display: none;" title="Lỗi thanh toán qua Moca">
								</a>
								<div class="modal fade moca-modal" id="moca-modal" tabindex="-1" role="dialog">
									<div class="modal-dialog">
										<div class="modal-content">
											<div>
												<iframe style="border: 0px; width: 100%; height: 100%;" src=""></iframe>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="moca-error-modal" data-width="" tabindex="-1" role="dialog">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-body">
												<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
												<div>
													<p>Giao dịch của bạn chưa đủ hạn mức thanh toán</p>
													<p>Hạn mức tối thiểu để thanh toán được là 1đ</p>
													<p>Vui lòng chọn hình thức thanh toán khác</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group clearfix hidden-md hidden-lg">
								<input class="btn btn-primary col-md-12 mt10 btn-checkout" type="button" bind-event-click="paymentCheckout('AIzaSyDWReBlPxFt-i145Gsd502wOqRS0KXFHW4;AIzaSyAbtwApDToQWn7snVio3Y9PWFbcpdnOWdk;AIzaSyA5rJOu8wci0li24bnZ1WogMEH93p-DGlM')" value="ĐẶT HÀNG">
							</div>
						</div>
						
					</div>
				</div>
			</div>

			<div class="main_footer footer unprint">
				
				
				
				<div class="mt10"></div>
			</div>
			<div class="modal fade" id="refund-policy" data-width="" tabindex="-1" role="dialog">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
							<h4 class="modal-title">Chính sách hoàn trả</h4>
						</div>
						<div class="modal-body">
							<pre></pre>
						</div>
					</div>
				</div>
			</div>
			<div class="modal fade" id="privacy-policy" data-width="" tabindex="-1" role="dialog">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
							<h4 class="modal-title">Chính sách bảo mật</h4>
						</div>
						<div class="modal-body">
							<pre></pre>
						</div>
					</div>
				</div>
			</div>
			<div class="modal fade" id="terms-of-service" data-width="" tabindex="-1" role="dialog">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
							<h4 class="modal-title">Điều khoản sử dụng</h4>
						</div>
						<div class="modal-body">
							<pre></pre>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>

	<script src="//bizweb.dktcdn.net/assets/themes_support/jquery-2.1.3.min.js?4" type="text/javascript"></script>
	<script src="//bizweb.dktcdn.net/assets/themes_support/bootstrap.min.js?4" type="text/javascript"></script>
	<script src="//bizweb.dktcdn.net/assets/themes_support/twine.min.js?4" type="text/javascript"></script>
	<script src="//bizweb.dktcdn.net/assets/themes_support/validator.min.js?4" type="text/javascript"></script>
	<script src="//bizweb.dktcdn.net/assets/themes_support/nprogress.js?4" type="text/javascript"></script>
	<script src="//bizweb.dktcdn.net/assets/themes_support/money-helper.js?4" type="text/javascript"></script>
	<script src="//bizweb.dktcdn.net/assets/themes_support/checkout.js?145" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ajaxStart(function () {
			NProgress.start();
		});
		$(document).ajaxComplete(function () {
			NProgress.done();
		});

		context = {}

		$(function () {
			Twine.reset(context).bind().refresh();
		});
		
		$(document).ready(function () {
			
			$("#customer-address").trigger("change");
			
			$("select[name='BillingProvinceId']").trigger("change");
			$("select[name='ShippingProvinceId']").trigger("change");
			Twine.context(document.body).checkout.caculateShippingFee();
		});
	</script>
	

</body>
@endsection