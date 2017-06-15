$(document).ready(function() {

	$("#owl-demo").owlCarousel({

		navigation : true, // Show next and prev buttons
		slideSpeed : 300,
		paginationSpeed : 400,
		singleItem:true
	});
	$("#best-seller-slider .slider-items").owlCarousel({
		items: 1,
		itemsDesktop: [1024, 1],
		itemsDesktopSmall: [991, 1],
		itemsTablet: [600, 1],
		itemsMobile: [320, 1],
		navigation: !0,
		navigationText: ['<a class="flex-prev"></a>', '<a class="flex-next"></a>'],
		slideSpeed: 500,
		autoHeight: true,
		pagination: !1
	});
	/* featured-slider */
	$("#featured-slider .slider-items").owlCarousel({
		items: 4,
		itemsDesktop: [1024, 4],
		itemsDesktopSmall: [900, 3],
		itemsTablet: [600, 2],
		itemsMobile: [414, 1],
		navigation: !0,
		navigationText: ['<a class="flex-prev"></a>', '<a class="flex-next"></a>'],
		slideSpeed: 500,
		autoHeight: true,
		pagination: !1
	});


	/**
     *  Method For Slider Blog
     * -----------------------------------------------------------------------------
     */
	jQuery(".tzblog-slider-content").owlCarousel({
		items : 1,
		itemsDesktop : [1199,1],
		itemsDesktopSmall : [979,1],
		itemsTablet: [768, 1],
		itemsMobile: [479, 1],
		slideSpeed:500,
		paginationSpeed:800,
		rewindSpeed:1000,
		autoPlay:false,
		stopOnHover: false,
		singleItem:false,
		rewindNav:false,
		pagination:false,
		paginationNumbers:false,
		itemsScaleUp:false
	});
	// Custom Navigation Events
	jQuery(".tz_slider_prev").click(function(){
		jQuery(".tzblog-slider-content").trigger('owl.prev');
	}) ;
	jQuery(".tz_slider_next").click(function(){
		jQuery(".tzblog-slider-content").trigger('owl.next');
	}) ;

	// jQuery for flexslider------------------

	jQuery( ".click_show" ).click(function() {
		$(this).toggleClass('change_icon');
		$( ".click_hiden" ).toggle( "slow", function() {
		});
	});
	$( ".show_nav_bar1" ).click(function() {
		$( ".show1" ).toggle( "slow", function() {
		});
	});
	$(".sub_minus").click(function(){
		$(this).next('.level0_415').toggle();      
	});
	$('.plazart-mainnav').css({'height':(($('.fix_height_mobile').height()))+'px'});
	$('.header-search > button').on('click', function(){
		$( ".hiden_search" ).slideToggle();
	});
});