 <header class="tz-header tz-header2">
                  <div class="overlay"></div>
                  <div class="header-top-bar">
                    <div class="container no-pad-768">
                      <div class="fvc">
                        <div class="col-sm-4 col-xs-2 col-lg-9 col-md-9 no-pad-left">
                          <div class="header-left">
                            <div class="menu-top-menu visible-xs">
                              
                              <a href="https://mendover-theme-1.bizwebvietnam.net/account/login" class=""><i class="fa fa-user"></i></a>

                              
                              <ul class="reg_mobile">
                                
                                <li><a href="{{route('Login')}}">Đăng nhập</a></li>
                                <li><a href="{{route('register')}}">Đăng ký</a></li>
                                
                              </ul>
                            </div>
                            <div class="menu-top-menu hidden-xs">
                              <ul>
                                
                                <li><a href="{{route('Login')}}">Đăng nhập</a></li>
                                <li><a href="{{route('register')}}">Đăng ký</a></li>
                                
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-8 col-xs-10 col-lg-3 col-md-3 no-pad-right">
                          <div class="search-cart-list">
                            <div class="header-search">
                              <form action="/search" method="get">
                                <div class="hiden_search">
                                  <input placeholder="Tìm kiếm..." name="query" maxlength="70" type="text">
                                  <input class="hidden" value="" type="submit">
                                  <button style="border:none;">
                                    <i class="fa fa-search"></i>
                                  </button>
                                </div>
                              </form>
                              <button>
                                <i class="fa fa-search"></i>
                              </button>
                            </div>
                            <div class="cart-total">
                              <ul>
                                <li>
                                  <a class="cart-toggler" href="https://mendover-theme-1.bizwebvietnam.net/cart">
                                    <span class="cart-no"> <span class="cart-icon"></span> 
                                    <span class="hidden-xs" style="color:#848484;"> Giỏ hàng:</span> (<spam class="count_item_pr" id="cart-total">0</spam>) sản phẩm</span>
                                  </a>
                                  <div class="mini-cart-content shopping_cart"><div class="no-item"><p>Không có sản phẩm nào trong giỏ hàng.</p></div></div>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="container" id="open_menu_mobile">
                    <h3 class="tz-logo pull-left">
                      
                      <a class="logo" href="https://mendover-theme-1.bizwebvietnam.net/">         
                        <img src="image/logo.png" alt="logo ">          
                      </a>
                      
                    </h3>
                    
                    <button class="btn-navbar tz_icon_menu pull-right  visible-xs visible-sm" type="button">
                      <i class="fa fa-bars"></i> MENU
                    </button>
                    <nav class="pull-right">
                      <ul class="nav-collapse">
                        
                        
                        <li>
                          <a href="{{route('home')}}">Trang chủ</a>
                        </li>
                        
                        
                        
                        <li>
                          <a href="{{route('info')}}">Giới thiệu</a>
                        </li>
                        
                        
                        
                        <li>
                          <a href="https://mendover-theme-1.bizwebvietnam.net/collections/all">Sản phẩm<span data-toggle="dropdown" class="dropdown-toggle fa fa-angle-down"></span></a>

                          <div class="nav-child dropdown-menu mega-dropdown-menu">
                            <div class="mega-dropdown-inner">
                              <div class="row">
                                <div data-width="12" class="col-md-12 mega-col-nav">
                                  <div class="mega-inner">
                                    <ul class="mega-nav level1">
                                      
                                      
                                      <li>
                                        <a href="https://mendover-theme-1.bizwebvietnam.net/nha-o">Nhà ở</a>
                                        <i style="float:right;line-height: 30px;" class="click_show fa fa-angle-right"></i>
                                        <ul class="mega-nav level1 click_hiden">
                                          
                                          <li>
                                            <a href="https://mendover-theme-1.bizwebvietnam.net/">sub1</a>
                                          </li>
                                          
                                        </ul>
                                      </li>
                                      
                                      
                                      
                                      <li>
                                        <a href="https://mendover-theme-1.bizwebvietnam.net/can-ho">Căn hộ</a>
                                        <i style="float:right;line-height: 30px;" class="click_show fa fa-angle-right"></i>
                                        <ul class="mega-nav level1 click_hiden">
                                          
                                          <li>
                                            <a href="https://mendover-theme-1.bizwebvietnam.net/">Sub2</a>
                                          </li>
                                          
                                        </ul>
                                      </li>
                                      
                                      
                                      
                                      <li>
                                        <a href="https://mendover-theme-1.bizwebvietnam.net/chung-cu">Chung cư</a>
                                      </li>
                                      
                                      
                                      
                                      <li>
                                        <a href="https://mendover-theme-1.bizwebvietnam.net/van-phong">Văn phòng</a>
                                      </li>
                                      
                                      
                                      
                                      <li>
                                        <a href="https://mendover-theme-1.bizwebvietnam.net/nha-du-an">Nhà ở dự án</a>
                                      </li>
                                      
                                      
                                      
                                      <li>
                                        <a href="https://mendover-theme-1.bizwebvietnam.net/loai-khac">Loại khác</a>
                                      </li>
                                      
                                      
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                        
                        
                        
                        <li>
                          <a href="{{route('news')}}">Tin tức</a>
                        </li>
                        
                        
                        
                        <li>
                          <a href="{{route('contact')}}">Liên hệ</a>
                        </li>
                        
                        
                      </ul>
                    </nav>
                  </div><!--end class container-->
                </header><!--end class tz-header-->