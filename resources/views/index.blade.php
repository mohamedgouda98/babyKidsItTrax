@include('assets.navbar')
        <div class="nicdark_section nicdark_navigation fade-down">

    <div class="nicdark_menu_boxed">

        <div class="nicdark_section nicdark_bg_greydark nicdark_displaynone_responsive">
            <div class="nicdark_container nicdark_clearfix">
                <div class="grid grid_6">
                    <div class="nicdark_focus">
                        <h6 class="white">
                            <i class="icon-calendar-outlilne"></i>&nbsp;&nbsp;<a class="white" href="events.html">OUR EVENTS</a>
                            &nbsp;&nbsp;&nbsp;&nbsp;<span class="grey">·</span>&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="icon-pencil-1"></i>&nbsp;&nbsp;<a class="white" href="blog-masonry.html">NEWS</a>
                            &nbsp;&nbsp;&nbsp;&nbsp;<span class="grey">·</span>&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="icon-phone-outline"></i>&nbsp;&nbsp;(00) +51278934
                        </h6>
                    </div>
                </div>
                <div class="grid grid_6 right">
                    <div class="nicdark_focus right">
                        <h6 class="white">
                            <i class="icon-globe-alt-outline"></i>&nbsp;&nbsp;<a class="white nicdark_mpopup_window" href="#nicdark_window">LANGUAGES</a>
                            &nbsp;&nbsp;&nbsp;&nbsp;<span class="grey">·</span>&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="icon-plus-outline"></i>&nbsp;&nbsp;<a class="white nicdark_mpopup_ajax" href="form-register.html">REGISTER</a>
                            &nbsp;&nbsp;&nbsp;&nbsp;<span class="grey">·</span>&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="icon-lock-1"></i>&nbsp;&nbsp;<a class="white nicdark_mpopup_ajax" href="form-login.html">LOG IN</a>
                        </h6>
                    </div>
                </div>

                <!--info window for languages-->
                <div id="nicdark_window" class="nicdark_bg_white nicdark_radius zoom-anim-dialog mfp-hide">

                    <div class="nicdark_textevidence nicdark_bg_red nicdark_radius_top">
                        <div class="nicdark_margin20">
                            <h4 class="white">LANGUAGES</h4>
                        </div>
                    </div>

                    <div class="nicdark_margin20">

                        <ul class="nicdark_list border">

                            <li class="nicdark_border_grey">
                                <p><a class="grey" href="index.html">ENGLISH</a><a href="index.html" class="nicdark_btn right nicdark_opacity"><img alt="" width="30" src="{{asset('EndUserAssets/img/flag/img1.png')}}"></a></p>
                                <div class="nicdark_space15"></div>
                            </li>

                            <li class="nicdark_border_grey">
                                <div class="nicdark_space15"></div>
                                <p><a class="grey" href="index.html">RUSSIAN</a><a href="index.html" class="nicdark_btn right nicdark_opacity"><img alt="" width="30" src="{{asset('EndUserAssets/img/flag/img2.png')}}"></a></p>
                                <div class="nicdark_space15"></div>
                            </li>

                            <li class="nicdark_border_grey">
                                <div class="nicdark_space15"></div>
                                <p><a class="grey" href="index.html">ARABIC</a><a href="index.html" class="nicdark_btn right nicdark_opacity"><img alt="" width="30" src="{{asset('EndUserAssets/img/flag/img3.png')}}"></a></p>
                                <div class="nicdark_space15"></div>
                            </li>

                            <li class="nicdark_border_grey">
                                <div class="nicdark_space15"></div>
                                <p><a class="grey" href="index.html">ITALIAN</a><a href="index.html" class="nicdark_btn right nicdark_opacity"><img alt="" width="30" src="{{asset('EndUSerAssets/img/flag/img4.png')}}"></a></p>
                            </li>

                        </ul>

                    </div>
                </div>
                <!--end window-->

            </div>
        </div>

        <div class="nicdark_space3 nicdark_bg_gradient"></div>

        <div class="nicdark_section nicdark_bg_grey nicdark_shadow nicdark_radius_bottom">
            <div class="nicdark_container nicdark_clearfix">

                <div class="grid grid_12 percentage">

                        <div class="nicdark_space20"></div>

                        <div class="nicdark_logo nicdark_marginleft10">
                            <a href="index.html"><img alt="" src="img/logo.png"></a>
                        </div>

                        <a class="nicdark_btn_icon nicdark_zoom nicdark_bg_yellow_hover nicdark_right_sidebar_btn_open nicdark_marginright10 nicdark_bg_orange extrasmall nicdark_radius white right"><i class="icon-basket-1"></i></a>

                        <nav>
                            <ul class="nicdark_menu nicdark_margin010 nicdark_padding50">

                                <li class="orange">
                                    <a href="index.html">HOME</a>
                                    <ul class="sub-menu">
                                        <li><a href="index.html">Home Default</a></li>
                                        <li><a href="index-2.html">Color Sections</a></li>
                                        <li><a href="index-3.html">Home Boxed</a></li>
                                    </ul>
                                </li>
                                <li class="red">
                                    <a href="#">PAGES</a>
                                    <ul class="sub-menu">
                                        <li><a href="prices.html">Prices</a></li>
                                        <li>
                                            <a href="teachers.html">Teachers</a>
                                            <ul class="sub-menu">
                                                <li><a href="teachers.html">All Teachers</a></li>
                                                <li><a href="single-teacher.html">Single Teacher</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="excursions.html">Excursion</a>
                                            <ul class="sub-menu">
                                                <li><a href="excursions.html">All Excursion</a></li>
                                                <li><a href="single-excursion.html">Single Excursion</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="courses.html">Courses</a>
                                            <ul class="sub-menu">
                                                <li><a href="courses.html">All Courses</a></li>
                                                <li><a href="single-course.html">Single Course</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="events.html">Events</a>
                                            <ul class="sub-menu">
                                                <li><a href="events.html">All Events</a></li>
                                                <li><a href="single-event.html">Single Event</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="shop.html">Shop</a>
                                            <ul class="sub-menu">
                                                <li><a href="shop.html">Products</a></li>
                                                <li><a href="shop-cart.html">Cart</a></li>
                                                <li><a href="shop-checkout.html">Checkout</a></li>
                                                <li><a href="single-product.html">Single Product</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="components.html">Some Components</a>
                                            <ul class="sub-menu">
                                                <li><a href="components-forms.html">Forms Solutions</a></li>
                                                <li><a href="components-archives.html">Archives Solutions</a></li>
                                                <li><a href="components-focus.html">Focus Solutions</a></li>
                                                <li><a href="components-widgets.html">Widgets Solutions</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="faq.html">Faq</a></li>
                                        <li><a href="404.html">404</a></li>
                                    </ul>
                                </li>
                                <li class="blue">
                                    <a href="courses.html">COURSES</a>
                                    <ul class="sub-menu">
                                        <li><a href="courses.html">All Courses</a></li>
                                        <li><a href="single-course.html">Single Course</a></li>
                                    </ul>
                                </li>
                                <li class="yellow nicdark_megamenu">
                                    <a href="#">MEGA MENU</a>
                                    <ul class="sub-menu">
                                        <li class="mm_grid mm_grid_3">
                                            <a href="#">Lorem Ipsum Dolor</a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Lorem Ipsum Dolor</a></li>
                                                <li><a href="#">Lorem Ipsum Dolor</a></li>
                                                <li><a href="#">Lorem Ipsum Dolor</a></li>
                                            </ul>
                                        </li>
                                        <li class="mm_grid mm_grid_3">
                                            <a href="#">Lorem Ipsum Dolor</a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Lorem Ipsum Dolor</a></li>
                                                <li><a href="#">Lorem Ipsum Dolor</a></li>
                                                <li><a href="#">Lorem Ipsum Dolor</a></li>
                                            </ul>
                                        </li>
                                        <li class="mm_grid mm_grid_3">
                                            <a href="#">Lorem Ipsum Dolor</a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Lorem Ipsum Dolor</a></li>
                                                <li><a href="#">Lorem Ipsum Dolor</a></li>
                                                <li><a href="#">Lorem Ipsum Dolor</a></li>
                                            </ul>
                                        </li>
                                        <li class="mm_grid mm_grid_3">
                                            <a href="#">Lorem Ipsum Dolor</a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Lorem Ipsum Dolor</a></li>
                                                <li><a href="#">Lorem Ipsum Dolor</a></li>
                                                <li><a href="#">Lorem Ipsum Dolor</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="green">
                                    <a href="blog-masonry.html">BLOG</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog-masonry.html">Masonry Layout</a></li>
                                        <li>
                                            <a href="single-post-right-sidebar.html">Single Post</a>
                                            <ul class="sub-menu">
                                                <li><a href="single-post-left-sidebar.html">Left Sidebar</a></li>
                                                <li><a href="single-post-right-sidebar.html">Right Sidebar</a></li>
                                                <li><a href="single-post-full-width.html">Full Width</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="orange">
                                    <a href="events.html">EVENTS</a>
                                    <ul class="sub-menu">
                                        <li><a href="events.html">All Events</a></li>
                                        <li><a href="single-event.html">Single Event</a></li>
                                    </ul>
                                </li>
                                <li class="grey">
                                    <a href="contact-1.html">CONTACTS</a>
                                </li>
                            </ul>
                        </nav>

                        <div class="nicdark_space20"></div>

                </div>

            </div>
            <!--end container-->

        </div>
        <!--end header-->

    </div>

</div>




<!--start-->
<!--start section-->
<section class="nicdark_section">

	<div class="tp-banner-container">
		<div class="nicdark_slide1" >

			<ul>

				<!--start second-->
				<li data-transition="fade" data-slotamount="7" data-masterspeed="1000" data-saveperformance="on"  data-title="LESSON">
					<img src="img/slide/img3.jpg"  alt="" data-lazyload="img/slide/img3.jpg" data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat">
				</li>
				<!--end second-->

				<!--start first-->
				<li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on"  data-title="FRIENDS">
					<img src="img/slide/img1.jpg"  alt="" data-lazyload="img/slide/img1.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
				</li>
				<!--end first-->

			</ul>

		</div>
	</div>

</section>
<!--end section--><!--start section-->
<section class="nicdark_section nicdark_margintop45_negative">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">

		<div class="grid grid_12 percentage nomargin">
			<div class="nicdark_textevidence center">
			    <div class="nicdark_textevidence nicdark_width_percentage25 nicdark_bg_blue nicdark_shadow nicdark_radius_left">
			        <div class="nicdark_textevidence">
			            <div class="nicdark_margin30">
			                <h2 class="white subtitle"><a class="white" href="courses.html">COURSES</a></h2>
			           </div>
			            <i class="nicdark_zoom icon-pencil-2 nicdark_iconbg left extrabig blue nicdark_displaynone_ipadland nicdark_displaynone_ipadpotr"></i>
			        </div>
			    </div>
			    <div class="nicdark_textevidence nicdark_width_percentage25 nicdark_bg_yellow nicdark_shadow">
			        <div class="nicdark_textevidence">
			            <div class="nicdark_margin30">
			                <h2 class="white subtitle"><a class="white" href="prices.html">PRICES</a></h2>
			           </div>
			            <i class="nicdark_zoom icon-money-1 nicdark_iconbg left extrabig yellow nicdark_displaynone_ipadland nicdark_displaynone_ipadpotr"></i>
			        </div>
			    </div>
			    <div class="nicdark_textevidence nicdark_width_percentage25 nicdark_bg_orange nicdark_shadow">
			        <div class="nicdark_textevidence">
			            <div class="nicdark_margin30">
			                <h2 class="white subtitle"><a class="white" href="events.html">EVENTS</a></h2>
			           </div>
			            <i class="nicdark_zoom icon-music-2 nicdark_iconbg left extrabig orange nicdark_displaynone_ipadland nicdark_displaynone_ipadpotr"></i>
			        </div>
			    </div>
			    <div class="nicdark_textevidence nicdark_width_percentage25 nicdark_bg_green nicdark_shadow nicdark_radius_right">
			        <div class="nicdark_textevidence">
			            <div class="nicdark_margin30">
			                <h2 class="white subtitle"><a class="white" href="teachers.html">TEACHERS</a></h2>
			           </div>
			            <i class="nicdark_zoom icon-graduation-cap-1 nicdark_iconbg left extrabig green nicdark_displaynone_ipadland nicdark_displaynone_ipadpotr"></i>
			        </div>
			    </div>
			    <div class="nicdark_space5"></div>
			</div>
		</div>

	</div>
    <!--end nicdark_container-->

</section>
<!--end section--><!--start section-->
<section class="nicdark_section">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">


        <div class="nicdark_space50"></div>


        <div class="grid grid_12">
            <h1 class="subtitle greydark">OUR ACTIVITIES</h1>
            <div class="nicdark_space20"></div>
            <h3 class="subtitle grey">OUR BEST SERVICES FOR YOUR KIDS</h3>
            <div class="nicdark_space20"></div>
            <div class="nicdark_divider left big"><span class="nicdark_bg_yellow nicdark_radius"></span></div>
            <div class="nicdark_space10"></div>
        </div>


        <div class="grid grid_4 nicdark_relative">

            <div class="nicdark_btn_iconbg nicdark_bg_yellow nicdark_absolute extrabig nicdark_shadow nicdark_radius">
                <div>
                    <i class="icon-leaf-1 nicdark_iconbg left big white"></i>
                </div>
            </div>

            <div class="nicdark_activity nicdark_marginleft100">
                <h4>CUSTOM FOOD</h4>
                <div class="nicdark_space20"></div>
                <p>Lorem ipsum dolor sit amet, consec adipiscing elit. Pellentesque tincidunt rutrum sapien, sed ultricies diam.</p>
                <div class="nicdark_space20"></div>
                <a href="#" class="nicdark_btn grey"><i class="icon-right-open-outline"></i> More</a>
                <div class="nicdark_space20"></div>
            </div>

        </div>

        <div class="grid grid_4 nicdark_relative">

            <div class="nicdark_btn_iconbg nicdark_bg_orange nicdark_absolute extrabig nicdark_shadow nicdark_radius">
                <div>
                    <i class="icon-stopwatch nicdark_iconbg left big white"></i>
                </div>
            </div>

            <div class="nicdark_activity nicdark_marginleft100">
                <h4>MANY SPORTS</h4>
                <div class="nicdark_space20"></div>
                <p>Lorem ipsum dolor sit amet, consec adipiscing elit. Pellentesque tincidunt rutrum sapien, sed ultricies diam.</p>
                <div class="nicdark_space20"></div>
                <a href="#" class="nicdark_btn grey"><i class="icon-right-open-outline"></i> More</a>
                <div class="nicdark_space20"></div>
            </div>

        </div>

        <div class="grid grid_4 nicdark_relative">

            <div class="nicdark_btn_iconbg nicdark_bg_green nicdark_absolute extrabig nicdark_shadow nicdark_radius">
                <div>
                    <i class="icon-cab nicdark_iconbg left big white"></i>
                </div>
            </div>

            <div class="nicdark_activity nicdark_marginleft100">
                <h4>BUS SERVICE</h4>
                <div class="nicdark_space20"></div>
                <p>Lorem ipsum dolor sit amet, consec adipiscing elit. Pellentesque tincidunt rutrum sapien, sed ultricies diam.</p>
                <div class="nicdark_space20"></div>
                <a href="#" class="nicdark_btn grey"><i class="icon-right-open-outline"></i> More</a>
                <div class="nicdark_space20"></div>
            </div>

        </div>


        <div class="grid grid_4 nicdark_relative">

            <div class="nicdark_btn_iconbg nicdark_bg_blue nicdark_absolute extrabig nicdark_shadow nicdark_radius">
                <div>
                    <i class="icon-headphones-1 nicdark_iconbg left big white"></i>
                </div>
            </div>

            <div class="nicdark_activity nicdark_marginleft100">
                <h4>MUSIC LESSON</h4>
                <div class="nicdark_space20"></div>
                <p>Lorem ipsum dolor sit amet, consec adipiscing elit. Pellentesque tincidunt rutrum sapien, sed ultricies diam.</p>
                <div class="nicdark_space20"></div>
                <a href="#" class="nicdark_btn grey"><i class="icon-right-open-outline"></i> More</a>
            </div>

        </div>

        <div class="grid grid_4 nicdark_relative">

            <div class="nicdark_btn_iconbg nicdark_bg_violet nicdark_absolute extrabig nicdark_shadow nicdark_radius">
                <div>
                    <i class="icon-map nicdark_iconbg left big white"></i>
                </div>
            </div>

            <div class="nicdark_activity nicdark_marginleft100">
                <h4>EXCURSIONS</h4>
                <div class="nicdark_space20"></div>
                <p>Lorem ipsum dolor sit amet, consec adipiscing elit. Pellentesque tincidunt rutrum sapien, sed ultricies diam.</p>
                <div class="nicdark_space20"></div>
                <a href="#" class="nicdark_btn grey"><i class="icon-right-open-outline"></i> More</a>
            </div>

        </div>

        <div class="grid grid_4 nicdark_relative">

            <div class="nicdark_btn_iconbg nicdark_bg_red nicdark_absolute extrabig nicdark_shadow nicdark_radius">
                <div>
                    <i class="icon-globe-2 nicdark_iconbg left big white"></i>
                </div>
            </div>

            <div class="nicdark_activity nicdark_marginleft100">
                <h4>LANGUAGES</h4>
                <div class="nicdark_space20"></div>
                <p>Lorem ipsum dolor sit amet, consec adipiscing elit. Pellentesque tincidunt rutrum sapien, sed ultricies diam.</p>
                <div class="nicdark_space20"></div>
                <a href="#" class="nicdark_btn grey"><i class="icon-right-open-outline"></i> More</a>
            </div>

        </div>

        <div class="nicdark_space50"></div>

    </div>
    <!--end nicdark_container-->

</section>
<!--end section--><!--start section-->
<div id="nicdark_parallax_2_btns" class="nicdark_section nicdark_imgparallax nicdark_parallax_img2">

    <div class="nicdark_filter greydark">

        <!--start nicdark_container-->
        <div class="nicdark_container nicdark_clearfix">

            <div class="nicdark_space40"></div>
            <div class="nicdark_space50"></div>

            <div class="grid grid_6 nicdark_aligncenter_iphoneland nicdark_aligncenter_iphonepotr">
                <a href="courses.html" class="nicdark_disable_floatright_iphoneland nicdark_disable_floatright_iphonepotr nicdark_btn nicdark_bg_blue medium right nicdark_shadow nicdark_radius white nicdark_press"><i class="icon-th-outline"></i>&nbsp;&nbsp;&nbsp;ALL COURSES</a>
            </div>
            <div class="grid grid_6 nicdark_aligncenter_iphoneland nicdark_aligncenter_iphonepotr">
                <a href="contact-1.html" class=" nicdark_btn nicdark_bg_blue medium nicdark_shadow nicdark_radius white nicdark_press"><i class="icon-pencil-1"></i>&nbsp;&nbsp;&nbsp;CONTACT US</a>
            </div>

            <div class="nicdark_space40"></div>
            <div class="nicdark_space50"></div>

        </div>
        <!--end nicdark_container-->

    </div>

</div>
<!--end section--><!--start section-->
<section class="nicdark_section">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">


        <div class="nicdark_space50"></div>


        <div class="grid grid_12">
            <h1 class="subtitle greydark">OUR EVENTS</h1>
            <div class="nicdark_space20"></div>
            <h3 class="subtitle grey">DON'T MISS OUR EVENTS</h3>
            <div class="nicdark_space20"></div>
            <div class="nicdark_divider left big"><span class="nicdark_bg_green nicdark_radius"></span></div>
            <div class="nicdark_space10"></div>
        </div>


        <div class="grid grid_3">

            <!--archive1-->
            <div class="nicdark_archive1 nicdark_bg_green nicdark_radius nicdark_shadow">

                <a href="single-event.html" class="nicdark_btn nicdark_bg_greydark white medium nicdark_radius nicdark_absolute_left">21<br/><small>DEC</small></a>

                <img alt=""  src="img/events/img1.jpg">

                <div class="nicdark_textevidence nicdark_bg_greydark">
                    <h4 class="white nicdark_margin20">A DAY IN THE PARK</h4>
                </div>

                <div class="nicdark_margin20">
                    <h5 class="white"><i class="icon-pin-outline"></i> New York, Times Square</h5>
                    <div class="nicdark_space10"></div>
                    <h5 class="white"><i class="icon-clock-1"></i> 9:00 To 14:00</h5>
                    <div class="nicdark_space20"></div>
                    <div class="nicdark_divider left small"><span class="nicdark_bg_white nicdark_radius"></span></div>
                    <div class="nicdark_space20"></div>
                    <p class="white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque tincidunt rutrum.</p>
                    <div class="nicdark_space20"></div>
                    <a href="single-event.html" class=" nicdark_press nicdark_btn nicdark_bg_greendark white nicdark_radius nicdark_shadow medium">CHECK IT</a>
                </div>

            </div>
            <!--archive1-->

        </div>

        <div class="grid grid_3">

            <!--archive1-->
            <div class="nicdark_archive1 nicdark_bg_blue nicdark_radius nicdark_shadow">

                <a href="single-event.html" class="nicdark_btn nicdark_bg_greydark white medium nicdark_radius nicdark_absolute_left">10<br/><small>MAY</small></a>

                <img alt="" src="img/events/img2.jpg">

                <div class="nicdark_textevidence nicdark_bg_greydark">
                    <h4 class="white nicdark_margin20">ART SESSION</h4>
                </div>

                <div class="nicdark_margin20">
                    <h5 class="white"><i class="icon-pin-outline"></i> Our School</h5>
                    <div class="nicdark_space10"></div>
                    <h5 class="white"><i class="icon-clock-1"></i> 9:00 To 14:00</h5>
                    <div class="nicdark_space20"></div>
                    <div class="nicdark_divider left small"><span class="nicdark_bg_white nicdark_radius"></span></div>
                    <div class="nicdark_space20"></div>
                    <p class="white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque tincidunt rutrum.</p>
                    <div class="nicdark_space20"></div>
                    <a href="single-event.html" class="nicdark_press nicdark_btn nicdark_bg_bluedark white nicdark_radius nicdark_shadow medium">CHECK IT</a>
                </div>

            </div>
            <!--archive1-->

        </div>

        <div class="grid grid_3">

            <!--archive1-->
            <div class="nicdark_archive1 nicdark_bg_yellow nicdark_radius nicdark_shadow">

                <a href="single-event.html" class="nicdark_btn nicdark_bg_greydark white medium nicdark_radius nicdark_absolute_left">24<br/><small>MAR</small></a>

                <img alt=""  src="img/events/img3.jpg">

                <div class="nicdark_textevidence nicdark_bg_greydark">
                    <h4 class="white nicdark_margin20">WATERCOLOR PRACTICE</h4>
                </div>

                <div class="nicdark_margin20">
                    <h5 class="white"><i class="icon-pin-outline"></i> Secondary School</h5>
                    <div class="nicdark_space10"></div>
                    <h5 class="white"><i class="icon-clock-1"></i> 9:00 To 14:00</h5>
                    <div class="nicdark_space20"></div>
                    <div class="nicdark_divider left small"><span class="nicdark_bg_white nicdark_radius"></span></div>
                    <div class="nicdark_space20"></div>
                    <p class="white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque tincidunt rutrum.</p>
                    <div class="nicdark_space20"></div>
                    <a href="single-event.html" class="nicdark_press nicdark_btn nicdark_bg_yellowdark white nicdark_radius nicdark_shadow medium">CHECK IT</a>
                </div>

            </div>
            <!--archive1-->

        </div>

        <div class="grid grid_3">

            <!--archive1-->
            <div class="nicdark_archive1 nicdark_bg_orange nicdark_radius nicdark_shadow">

                <a href="single-event.html" class="nicdark_btn nicdark_bg_greydark white medium nicdark_radius nicdark_absolute_left">30<br/><small>DEC</small></a>

                <img alt=""  src="img/events/img4.jpg">

                <div class="nicdark_textevidence nicdark_bg_greydark">
                    <h4 class="white nicdark_margin20">SPORT TRAINING</h4>
                </div>

                <div class="nicdark_margin20">
                    <h5 class="white"><i class="icon-pin-outline"></i> Central Park (NY)</h5>
                    <div class="nicdark_space10"></div>
                    <h5 class="white"><i class="icon-clock-1"></i> 9:00 To 14:00</h5>
                    <div class="nicdark_space20"></div>
                    <div class="nicdark_divider left small"><span class="nicdark_bg_white nicdark_radius"></span></div>
                    <div class="nicdark_space20"></div>
                    <p class="white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque tincidunt rutrum.</p>
                    <div class="nicdark_space20"></div>
                    <a href="single-event.html" class="nicdark_press nicdark_btn nicdark_bg_orangedark white nicdark_radius nicdark_shadow medium">CHECK IT</a>
                </div>

            </div>
            <!--archive1-->

        </div>

        <div class="nicdark_space50"></div>

   </div>
   <!--end nicdark_container-->

</section>
<!--end section--><!--start section-->
<section id="nicdark_parallax_countdown" class="nicdark_section nicdark_imgparallax nicdark_parallax_img3">

    <div class="nicdark_filter greydark">

        <!--start nicdark_container-->
        <div class="nicdark_container nicdark_clearfix">

            <div class="nicdark_space40"></div>
            <div class="nicdark_space50"></div>

            <div class="grid grid_12">
                <h1 class="white center subtitle">FIRST DAY AT SCHOOL !</h1>
                <div class="nicdark_space10"></div>
                <h3 class="subtitle center white">ARE YOU READY ?</h3>
                <div class="nicdark_space20"></div>
                <div class="nicdark_divider center big"><span class="nicdark_bg_white nicdark_radius"></span></div>
                <div class="nicdark_space20"></div>
            </div>

            <div class="nicdark_countdown"></div>

            <div class="nicdark_space40"></div>
            <div class="nicdark_space50"></div>

        </div>
        <!--end nicdark_container-->

    </div>

</section>
<!--end section--><!--start section-->
<section class="nicdark_section">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">


        <div class="nicdark_space50"></div>


        <div class="grid grid_12">
            <h1 class="subtitle greydark">ORANGE CLASS</h1>
            <div class="nicdark_space20"></div>
            <h3 class="subtitle grey">FULL TIME · AGE: 3-6 YEARS OLD</h3>
            <div class="nicdark_space20"></div>
            <div class="nicdark_divider left big"><span class="nicdark_bg_orange nicdark_radius"></span></div>
            <div class="nicdark_space10"></div>
        </div>



        <div class="grid grid_6">

            <div class="nicdark_archive1 nicdark_bg_orange nicdark_radius nicdark_shadow">

                <div class="nicdark_textevidence nicdark_width_percentage40 nicdark_width100_responsive">
                    <img alt=""  class="nicdark_radius_left nicdark_opacity" src="img/team/img1.jpg">
                </div>

                <div class="nicdark_textevidence nicdark_width_percentage50 nicdark_width100_responsive">
                    <div class="nicdark_margin20">

                        <h4 class="white"><a class="white" href="single-teacher.html">JULIETTE LIGHT</a></h4>
                        <div class="nicdark_space20"></div>
                        <div class="nicdark_divider left small"><span class="nicdark_bg_white nicdark_radius"></span></div>
                        <div class="nicdark_space20"></div>
                        <p class="white">Lorem ipsum dolor sit amet, ipsum dolor sit amet, ipsum dolor sit amet, ipsum dolor sit amet.</p>
                        <div class="nicdark_space20"></div>
                        <a href="single-teacher.html" class="white nicdark_btn"><i class="icon-graduation-cap-1"></i> Know Me :)</a>

                    </div>
                </div>

                <div class="nicdark_textevidence nicdark_width_percentage10 nicdark_displaynone_responsive">
                    <div class="nicdark_space20"></div>
                    <div class="nicdark_space5"></div>
                    <a title="CURRICULUM" href="single-teacher.html" class="nicdark_rotate nicdark_tooltip nicdark_btn_icon small nicdark_bg_orangedark nicdark_radius_circle white"><i class="icon-download-outline"></i></a>
                    <div class="nicdark_space20"></div>
                    <a title="DOCUMENTS" href="single-teacher.html" class="nicdark_rotate nicdark_tooltip nicdark_btn_icon small nicdark_bg_orangedark nicdark_radius_circle white"><i class="icon-attach-outline"></i></a>
                    <div class="nicdark_space20"></div>
                    <a title="COURSES" href="single-teacher.html" class="nicdark_rotate nicdark_tooltip nicdark_btn_icon small nicdark_bg_orangedark nicdark_radius_circle white"><i class="icon-mic-outline"></i></a>
                    <div class="nicdark_space20"></div>
                </div>

            </div>

        </div>

        <div class="grid grid_6">

            <div class="nicdark_archive1 nicdark_bg_blue nicdark_radius nicdark_shadow">

                <div class="nicdark_textevidence nicdark_width_percentage40 nicdark_width100_responsive">
                    <img alt=""  class="nicdark_radius_left nicdark_opacity" src="img/team/img2.jpg">
                </div>

                <div class="nicdark_textevidence nicdark_width_percentage50 nicdark_width100_responsive">
                    <div class="nicdark_margin20">

                        <h4 class="white"><a class="white" href="single-teacher.html">JENNY MGRAYAN</a></h4>
                        <div class="nicdark_space20"></div>
                        <div class="nicdark_divider left small"><span class="nicdark_bg_white nicdark_radius"></span></div>
                        <div class="nicdark_space20"></div>
                        <p class="white">Lorem ipsum dolor sit amet, ipsum dolor sit amet, ipsum dolor sit amet, ipsum dolor sit amet.</p>
                        <div class="nicdark_space20"></div>
                        <a href="single-teacher.html" class="white nicdark_btn"><i class="icon-graduation-cap-1"></i> Know Me :)</a>

                    </div>
                </div>

                <div class="nicdark_textevidence nicdark_width_percentage10 nicdark_displaynone_responsive">
                    <div class="nicdark_space20"></div>
                    <div class="nicdark_space5"></div>
                    <a title="CURRICULUM" href="single-teacher.html" class="nicdark_rotate nicdark_tooltip nicdark_btn_icon small nicdark_bg_bluedark nicdark_radius_circle white"><i class="icon-download-outline"></i></a>
                    <div class="nicdark_space20"></div>
                    <a title="DOCUMENTS" href="single-teacher.html" class="nicdark_rotate nicdark_tooltip nicdark_btn_icon small nicdark_bg_bluedark nicdark_radius_circle white"><i class="icon-attach-outline"></i></a>
                    <div class="nicdark_space20"></div>
                    <a title="COURSES" href="single-teacher.html" class="nicdark_rotate nicdark_tooltip nicdark_btn_icon small nicdark_bg_bluedark nicdark_radius_circle white"><i class="icon-mic-outline"></i></a>
                    <div class="nicdark_space20"></div>
                </div>

            </div>

        </div>



        <div class="grid grid_6">

            <div class="nicdark_archive1 nicdark_bg_yellow nicdark_radius nicdark_shadow">

                <div class="nicdark_textevidence nicdark_width_percentage40 nicdark_width100_responsive">
                    <img alt=""  class="nicdark_radius_left nicdark_opacity" src="img/team/img3.jpg">
                </div>

                <div class="nicdark_textevidence nicdark_width_percentage50 nicdark_width100_responsive">
                    <div class="nicdark_margin20">

                        <h4 class="white"><a class="white" href="single-teacher.html">MARGARET GREY</a></h4>
                        <div class="nicdark_space20"></div>
                        <div class="nicdark_divider left small"><span class="nicdark_bg_white nicdark_radius"></span></div>
                        <div class="nicdark_space20"></div>
                        <p class="white">Lorem ipsum dolor sit amet, ipsum dolor sit amet, ipsum dolor sit amet, ipsum dolor sit amet.</p>
                        <div class="nicdark_space20"></div>
                        <a href="single-teacher.html" class="white nicdark_btn"><i class="icon-graduation-cap-1"></i> Know Me :)</a>

                    </div>
                </div>

                <div class="nicdark_textevidence nicdark_width_percentage10 nicdark_displaynone_responsive">
                    <div class="nicdark_space20"></div>
                    <div class="nicdark_space5"></div>
                    <a title="CURRICULUM" href="single-teacher.html" class="nicdark_rotate nicdark_tooltip nicdark_btn_icon small nicdark_bg_yellowdark nicdark_radius_circle white"><i class="icon-download-outline"></i></a>
                    <div class="nicdark_space20"></div>
                    <a title="DOCUMENTS" href="single-teacher.html" class="nicdark_rotate nicdark_tooltip nicdark_btn_icon small nicdark_bg_yellowdark nicdark_radius_circle white"><i class="icon-attach-outline"></i></a>
                    <div class="nicdark_space20"></div>
                    <a title="COURSES" href="single-teacher.html" class="nicdark_rotate nicdark_tooltip nicdark_btn_icon small nicdark_bg_yellowdark nicdark_radius_circle white"><i class="icon-mic-outline"></i></a>
                    <div class="nicdark_space20"></div>
                </div>

            </div>

        </div>

        <div class="grid grid_6">

            <div class="nicdark_archive1 nicdark_bg_violet nicdark_radius nicdark_shadow">

                <div class="nicdark_textevidence nicdark_width_percentage40 nicdark_width100_responsive">
                    <img alt=""  class="nicdark_radius_left nicdark_opacity" src="img/team/img4.jpg">
                </div>

                <div class="nicdark_textevidence nicdark_width_percentage50 nicdark_width100_responsive">
                    <div class="nicdark_margin20">

                        <h4 class="white"><a class="white" href="single-teacher.html">NICK HOPE</a></h4>
                        <div class="nicdark_space20"></div>
                        <div class="nicdark_divider left small"><span class="nicdark_bg_white nicdark_radius"></span></div>
                        <div class="nicdark_space20"></div>
                        <p class="white">Lorem ipsum dolor sit amet, ipsum dolor sit amet, ipsum dolor sit amet, ipsum dolor sit amet.</p>
                        <div class="nicdark_space20"></div>
                        <a href="single-teacher.html" class="white nicdark_btn"><i class="icon-graduation-cap-1"></i> Know Me :)</a>

                    </div>
                </div>

                <div class="nicdark_textevidence nicdark_width_percentage10 nicdark_displaynone_responsive">
                    <div class="nicdark_space20"></div>
                    <div class="nicdark_space5"></div>
                    <a title="CURRICULUM" href="single-teacher.html" class="nicdark_rotate nicdark_tooltip nicdark_btn_icon small nicdark_bg_violetdark nicdark_radius_circle white"><i class="icon-download-outline"></i></a>
                    <div class="nicdark_space20"></div>
                    <a title="DOCUMENTS" href="single-teacher.html" class="nicdark_rotate nicdark_tooltip nicdark_btn_icon small nicdark_bg_violetdark nicdark_radius_circle white"><i class="icon-attach-outline"></i></a>
                    <div class="nicdark_space20"></div>
                    <a title="COURSES" href="single-teacher.html" class="nicdark_rotate nicdark_tooltip nicdark_btn_icon small nicdark_bg_violetdark nicdark_radius_circle white"><i class="icon-mic-outline"></i></a>
                    <div class="nicdark_space20"></div>
                </div>

            </div>

        </div>


        <div class="nicdark_space50"></div>


	</div>
	<!--end nicdark_container-->

</section>
<!--end section--><!--start section-->
<section id="nicdark_parallax_counter" class="nicdark_section nicdark_imgparallax nicdark_parallax_img1">

    <div class="nicdark_filter greydark">

        <!--start nicdark_container-->
        <div class="nicdark_container nicdark_clearfix">

            <div class="nicdark_space40"></div>
            <div class="nicdark_space50"></div>


            <div class="grid grid_3">
                <div class="nicdark_textevidence center">
                    <a href="#" class="nicdark_width50 white nicdark_btn nicdark_bg_blue nicdark_bg_bluedark_hover nicdark_transition nicdark_shadow extrasize nicdark_radius_circle subtitle nicdark_counter" data-to="69" data-speed="1000">69</a>
                    <div class="nicdark_space20"></div>
                    <h4 class="white">TEACHERS</h4>
                </div>
            </div>
            <div class="grid grid_3">
                <div class="nicdark_textevidence center">
                    <a href="#" class="nicdark_width50 white nicdark_btn nicdark_bg_green nicdark_bg_greendark_hover nicdark_transition nicdark_shadow extrasize nicdark_radius_circle subtitle nicdark_counter" data-to="32" data-speed="1000">32</a>
                    <div class="nicdark_space20"></div>
                    <h4 class="white">COURSES</h4>
                </div>
            </div>
            <div class="grid grid_3">
                <div class="nicdark_textevidence center">
                    <a href="#" class="nicdark_width50 white nicdark_btn nicdark_bg_yellow nicdark_bg_yellowdark_hover nicdark_transition nicdark_shadow extrasize nicdark_radius_circle subtitle nicdark_counter" data-to="48" data-speed="1000">48</a>
                    <div class="nicdark_space20"></div>
                    <h4 class="white">LESSONS</h4>
                </div>
            </div>
            <div class="grid grid_3">
                <div class="nicdark_textevidence center">
                    <a href="#" class="nicdark_width50 white nicdark_btn nicdark_bg_violet nicdark_bg_violetdark_hover nicdark_transition nicdark_shadow extrasize nicdark_radius_circle subtitle nicdark_counter" data-to="72" data-speed="1000">72</a>
                    <div class="nicdark_space20"></div>
                    <h4 class="white">ACTIVITIES</h4>
                </div>
            </div>

            <div class="nicdark_space40"></div>
            <div class="nicdark_space50"></div>

        </div>
        <!--end nicdark_container-->

    </div>

</section>
<!--end section--><!--start section-->
<section class="nicdark_section">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">


        <div class="nicdark_space50"></div>

        <div class="grid grid_12">
            <h1 class="subtitle greydark">OUR NEWS</h1>
            <div class="nicdark_space20"></div>
            <h3 class="subtitle grey">FOLLOW OUR MOST IMPORTANT NEWS</h3>
            <div class="nicdark_space20"></div>
            <div class="nicdark_divider left big"><span class="nicdark_bg_blue nicdark_radius"></span></div>
            <div class="nicdark_space10"></div>
        </div>


        <div class="nicdark_masonry_btns">
            <div class="nicdark_margin10">
                <a data-filter="*" class="nicdark_bg_grey2_hover nicdark_transition nicdark_btn nicdark_bg_grey small nicdark_shadow nicdark_radius grey">ALL</a>
            </div>
            <div class="nicdark_margin10">
                <a data-filter=".educational" class="nicdark_bg_grey2_hover nicdark_transition nicdark_btn nicdark_bg_grey small nicdark_shadow nicdark_radius grey">EDUCATIONAL</a>
            </div>
            <div class="nicdark_margin10">
                <a data-filter=".excursions" class="nicdark_bg_grey2_hover nicdark_transition nicdark_btn nicdark_bg_grey small nicdark_shadow nicdark_radius grey">EXCURSIONS</a>
            </div>
            <div class="nicdark_space10"></div>
        </div>


        <!--start nicdark_masonry_container-->
        <div class="nicdark_masonry_container">


            <div class="grid grid_4 nicdark_masonry_item educational">
                <div class="nicdark_archive1 nicdark_bg_blue nicdark_radius nicdark_shadow">

                    <a href="single-post-right-sidebar.html" class="nicdark_zoom nicdark_btn_icon nicdark_bg_blue nicdark_border_bluedark white medium nicdark_radius_circle nicdark_absolute_left"><i class="icon-link-outline"></i></a>

                    <img alt=""  src="img/blog/img1.jpg">

                    <div class="nicdark_margin20">
                        <h4 class="white">OUR SCHOOL ANNIVERSARY</h4>
                        <div class="nicdark_space20"></div>
                        <div class="nicdark_divider left small"><span class="nicdark_bg_white nicdark_radius"></span></div>
                        <div class="nicdark_space20"></div>
                        <p class="white">Lorem ipsum dolor sit amet, consectetur adcing elit Lorem ipsum dolor sit amet, consectetur adip iscing elit psum dolor sit amet.</p>
                        <div class="nicdark_space20"></div>
                        <a href="single-post-right-sidebar.html" class="white nicdark_btn"><i class="icon-doc-text-1 "></i> Read More</a>
                    </div>

                    <i class="icon-camera-outline nicdark_iconbg right medium blue"></i>

                </div>
            </div>
            <div class="grid grid_4 nicdark_masonry_item excursions">
                <div class="nicdark_archive1 nicdark_bg_green nicdark_radius nicdark_shadow">

                    <div class="nicdark_margin20">
                        <h4 class="white">SEE OUR NEW DOWNLOAD AREA</h4>
                        <div class="nicdark_space20"></div>
                        <div class="nicdark_divider left small"><span class="nicdark_bg_white nicdark_radius"></span></div>
                        <div class="nicdark_space20"></div>
                        <p class="white">Lorem ipsum dolor sit amet, consectetur adcing elit Lorem ipsum dolor sit amet, consectetur adip iscing elit psum dolor sit amet.</p>
                        <div class="nicdark_space20"></div>
                        <a href="single-post-right-sidebar.html" class="white nicdark_btn"><i class="icon-doc-text-1 "></i> Read More</a>
                    </div>

                    <i class="icon-pencil-1 nicdark_iconbg right medium green"></i>

                </div>
            </div>
            <div class="grid grid_4 nicdark_masonry_item educational">
                <div class="nicdark_archive1 nicdark_bg_violet nicdark_radius nicdark_shadow">

                    <a href="single-post-right-sidebar.html" class="nicdark_zoom nicdark_btn_icon nicdark_bg_violet nicdark_border_violetdark white medium nicdark_radius_circle nicdark_absolute_left"><i class="icon-link-outline"></i></a>

                    <img alt=""  src="img/blog/img2.jpg">

                    <div class="nicdark_margin20">
                        <h4 class="white">SAY HALLO TO OUR TEACHERS</h4>
                    </div>

                    <i class="icon-picture-outline nicdark_iconbg right medium violet"></i>

                </div>
            </div>
            <div class="grid grid_4 nicdark_masonry_item excursions">
                <div class="nicdark_archive1 nicdark_bg_orange nicdark_radius nicdark_shadow">

                    <a href="single-post-right-sidebar.html" class="nicdark_zoom nicdark_btn_icon nicdark_bg_orange nicdark_border_orangedark white medium nicdark_radius_circle nicdark_absolute_left"><i class="icon-link-outline"></i></a>

                    <img alt=""  src="img/blog/img4.jpg">

                    <div class="nicdark_margin20">
                        <h4 class="white">MUSIC ACTIVITIES FOR ALL</h4>
                    </div>

                    <i class="icon-camera-outline nicdark_iconbg right medium orange"></i>

                </div>
            </div>
            <div class="grid grid_4 nicdark_masonry_item excursions">
                <div class="nicdark_archive1 nicdark_bg_red nicdark_radius nicdark_shadow">

                    <a href="single-post-right-sidebar.html" class="nicdark_zoom nicdark_btn_icon nicdark_bg_red nicdark_border_reddark white medium nicdark_radius_circle nicdark_absolute_left"><i class="icon-link-outline"></i></a>

                    <img alt=""  src="img/blog/img3.jpg">

                    <div class="nicdark_margin20">
                        <h4 class="white">CHRISTMAS PARTY !</h4>
                        <div class="nicdark_space20"></div>
                        <div class="nicdark_divider left small"><span class="nicdark_bg_white nicdark_radius"></span></div>
                        <div class="nicdark_space20"></div>
                        <p class="white">Lorem ipsum dolor sit amet, consectetur adcing elit Lorem ipsum dolor sit amet, consectetur adip iscing elit psum dolor sit amet.</p>
                        <div class="nicdark_space20"></div>
                        <a href="single-post-right-sidebar.html" class="white nicdark_btn"><i class="icon-doc-text-1 "></i> Read More</a>
                    </div>

                    <i class="icon-pencil-1 nicdark_iconbg right medium red"></i>

                </div>
            </div>
            <div class="grid grid_4 nicdark_masonry_item excursions">
                <div class="nicdark_archive1 nicdark_bg_green nicdark_radius nicdark_shadow">

                    <a href="single-post-right-sidebar.html" class="nicdark_zoom nicdark_btn_icon nicdark_bg_green nicdark_border_greendark white medium nicdark_radius_circle nicdark_absolute_left"><i class="icon-link-outline"></i></a>

                    <img alt=""  src="img/blog/img5.jpg">

                    <div class="nicdark_margin20">
                        <h4 class="white">BIO SPECIAL MEAL</h4>
                        <div class="nicdark_space20"></div>
                        <div class="nicdark_divider left small"><span class="nicdark_bg_white nicdark_radius"></span></div>
                        <div class="nicdark_space20"></div>
                        <p class="white">Lorem ipsum dolor sit amet, consectetur adcing elit Lorem ipsum dolor sit amet, consectetur adip iscing elit psum dolor sit amet.</p>
                        <div class="nicdark_space20"></div>
                        <a href="single-post-right-sidebar.html" class="white nicdark_btn"><i class="icon-doc-text-1 "></i> Read More</a>
                    </div>

                    <i class="icon-picture-outline nicdark_iconbg right medium green"></i>

                </div>
            </div>
            <div class="grid grid_4 nicdark_masonry_item educational">
                <div class="nicdark_archive1 nicdark_bg_yellow nicdark_radius nicdark_shadow">

                    <a href="single-post-right-sidebar.html" class="nicdark_zoom nicdark_btn_icon nicdark_bg_yellow nicdark_border_yellowdark white medium nicdark_radius_circle nicdark_absolute_left"><i class="icon-link-outline"></i></a>

                    <img alt=""  src="img/blog/img7.jpg">

                    <div class="nicdark_margin20">
                        <h4 class="white">BEST COOKING ACTIVITIES !</h4>
                        <div class="nicdark_space20"></div>
                        <div class="nicdark_divider left small"><span class="nicdark_bg_white nicdark_radius"></span></div>
                        <div class="nicdark_space20"></div>
                        <p class="white">Lorem ipsum dolor sit amet, consectetur adcing elit Lorem ipsum dolor sit amet, consectetur adip iscing elit psum dolor sit amet.</p>
                        <div class="nicdark_space20"></div>
                        <a href="single-post-right-sidebar.html" class="white nicdark_btn"><i class="icon-doc-text-1 "></i> Read More</a>
                    </div>

                    <i class="icon-picture-outline nicdark_iconbg right medium yellow"></i>

                </div>
            </div>
            <div class="grid grid_4 nicdark_masonry_item excursions">
                <div class="nicdark_archive1 nicdark_bg_blue nicdark_radius nicdark_shadow">

                    <a href="single-post-right-sidebar.html" class="nicdark_zoom nicdark_btn_icon nicdark_bg_blue nicdark_border_bluedark white medium nicdark_radius_circle nicdark_absolute_left"><i class="icon-link-outline"></i></a>

                    <img alt=""  src="img/blog/img8.jpg">

                    <div class="nicdark_margin20">
                        <h4 class="white">END OF THE SCHOOL YEAR</h4>
                        <div class="nicdark_space20"></div>
                        <div class="nicdark_divider left small"><span class="nicdark_bg_white nicdark_radius"></span></div>
                        <div class="nicdark_space20"></div>
                        <p class="white">Lorem ipsum dolor sit amet, consectetur adcing elit Lorem ipsum dolor sit amet, consectetur adip iscing elit psum dolor sit amet.</p>
                        <div class="nicdark_space20"></div>
                        <a href="single-post-right-sidebar.html" class="white nicdark_btn"><i class="icon-doc-text-1 "></i> Read More</a>
                    </div>

                    <i class="icon-camera-outline nicdark_iconbg right medium blue"></i>

                </div>
            </div>

            <div class="grid grid_4 nicdark_masonry_item excursions">
                <div class="nicdark_archive1 nicdark_bg_orange nicdark_radius nicdark_shadow">

                    <a href="single-post-right-sidebar.html" class="nicdark_zoom nicdark_btn_icon nicdark_bg_orange nicdark_border_orangedark white medium nicdark_radius_circle nicdark_absolute_left"><i class="icon-link-outline"></i></a>

                    <img alt=""  src="img/blog/img6.jpg">

                    <div class="nicdark_margin20">
                        <h4 class="white">EXCURSION PRESENTATION</h4>
                    </div>

                    <i class="icon-picture-outline nicdark_iconbg right medium orange"></i>

                </div>
            </div>

            <div class="grid grid_4 nicdark_masonry_item excursions">
                <div class="nicdark_archive1 nicdark_bg_red nicdark_radius nicdark_shadow">

                    <div class="nicdark_margin20">
                        <h4 class="white">DOCTOR IN THE SCHOOL</h4>
                        <div class="nicdark_space20"></div>
                        <div class="nicdark_divider left small"><span class="nicdark_bg_white nicdark_radius"></span></div>
                        <div class="nicdark_space20"></div>
                        <p class="white">Lorem ipsum dolor sit amet, consectetur adcing elit Lorem ipsum dolor sit amet, consectetur adip iscing elit psum dolor sit amet.</p>
                        <div class="nicdark_space20"></div>
                        <a href="single-post-right-sidebar.html" class="white nicdark_btn"><i class="icon-doc-text-1 "></i> Read More</a>
                    </div>

                    <i class="icon-pencil-1 nicdark_iconbg right medium red"></i>

                </div>
            </div>

        </div>
        <!--end nicdark_masonry_container-->

    </div>
    <!--end nicdark_container-->

</section>
<!--end section-->






<!--start section-->
<section class="nicdark_section">


    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">

        <div class="nicdark_space30"></div>

        <div class="grid grid_12">
            <div class="nicdark_textevidence center">
                <a href="blog-masonry.html" class="nicdark_zoom nicdark_btn nicdark_bg_blue medium nicdark_shadow nicdark_radius white nicdark_margin10"><i class="icon-th-outline"></i>&nbsp;&nbsp;&nbsp;VIEW MORE</a>
            </div>
        </div>

        <div class="nicdark_space40"></div>

    </div>
    <!--end nicdark_container-->


</section>
<!--end section--><!--end-->

@include('assets.footer')
