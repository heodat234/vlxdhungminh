    <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">John Doe</div>
                    <div class="email">john.doe@example.com</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>

                    <li class="active">
                        <a href="{{route('ViewContentAdmin')}}">
                           <i class="fa fa-home" aria-hidden="true" style="font-size: 20px;margin-top:  5px;"></i>
                            <span>Home</span>
                        </a>
                    </li>   
{{--                     <li>
                        <a href="pages/helper-classes.html">
                            <i class="material-icons">layers</i>
                            <span>Helper Classes</span>
                        </a>
                    </li> --}}
                    <li >
                            <div style="float: left">
                                <a href="{{route('ViewProductAdmin')}}"><i class=" fa fa-product-hunt" style="font-size: 20px;margin-top:  5px;" aria-hidden="true"></i>
                           
                                    <span>Product</span>
                                    
                                </a>
                            </div>
                            <div style="float: right; margin-top: 15px;">

                                <a href="javascript:void(0);" class="menu-toggle"></a>
                                
                                    <ul class="ml-menu" style="float: left;width: 130px;" >
                                        <li>
                                            <div>
                                            @foreach($type_product as $type_pro)
                                                <a href="{{route('ViewProductByType_Admin',$type_pro->id)}}" style="font-size: 15px; padding-top: 10px; color:black">{{$type_pro->name}}</a>
                                            @endforeach
                                            </div>
                                        </li>
                                    </ul>
                            </div>
                            <div style="clear: both;"></div>
                            
                    </li>
                    <li>
                        <div style="float: left">
                                <a href="{{route('user_Admin')}}"><i class=" fa fa-user" style="font-size: 20px;margin-top:  5px;" aria-hidden="true"></i>
                           
                                    <span>User</span>
                                    
                                </a>
                            </div>
                            <div style="float: right; margin-top: 15px;">

                                <a href="javascript:void(0);" class="menu-toggle"></a>
                                
                                    <ul class="ml-menu" style="float: left;width: 130px;" >
                                        <li>
                                            <div>
                                            @foreach($type_product as $type_pro)
                                                <a href="{{route('ViewProductByType_Admin',$type_pro->id)}}" style="font-size: 15px; padding-top: 10px; color:black">{{$type_pro->name}}</a>
                                            @endforeach
                                            </div>
                                        </li>
                                    </ul>
                            </div>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">pie_chart</i>
                            <span>Charts</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/charts/morris.html">Morris</a>
                            </li>
                            <li>
                                <a href="pages/charts/flot.html">Flot</a>
                            </li>
                            <li>
                                <a href="pages/charts/chartjs.html">ChartJS</a>
                            </li>
                            <li>
                                <a href="pages/charts/sparkline.html">Sparkline</a>
                            </li>
                            <li>
                                <a href="pages/charts/jquery-knob.html">Jquery Knob</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">map</i>
                            <span>Maps</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/maps/google.html">Google Map</a>
                            </li>
                            <li>
                                <a href="pages/maps/yandex.html">YandexMap</a>
                            </li>
                            <li>
                                <a href="pages/maps/jvectormap.html">jVectorMap</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="pages/changelogs.html">
                            <i class="material-icons">update</i>
                            <span>Changelogs</span>
                        </a>
                    </li>
                    <li class="header">LABELS</li>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="material-icons col-red">donut_large</i>
                            <span>Important</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="material-icons col-amber">donut_large</i>
                            <span>Warning</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="material-icons col-light-blue">donut_large</i>
                            <span>Information</span>
                        </a>
                    </li>
                </ul>
            </div>
                        <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2017 <a href="javascript:void(0);">Team MNHL</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0
                </div>
            </div>
                        <!-- #Footer -->
                                  <!-- #Menu -->


        </aside>
    <!-- #END# Left Sidebar -->