$(document).ready(function ($) {
	awe_backtotop();

	awe_category();
	awe_menumobile();
});
$(window).on("load resize",function(e){	
	setTimeout(function(){					 
		awe_resizeimage();
	},200);
	setTimeout(function(){	
		awe_resizeimage();
	},1000);
	setTimeout(function(){	
		awe_owl();
		awe_blog();
	},1000);
});
$(document).on('click','.overlay, .close-popup, .btn-continue, .fancybox-close', function() {   
	hidePopup('.awe-popup'); 	
	setTimeout(function(){
		$('.loading').removeClass('loaded-content');
	},500);
	return false;
})

/********************************************************
# SHOW NOITICE
********************************************************/
function awe_showNoitice(selector) {
	$(selector).animate({right: '0'}, 500);
	setTimeout(function() {
		$(selector).animate({right: '-300px'}, 500);
	}, 3500);
}  window.awe_showNoitice=awe_showNoitice;

/********************************************************
# SHOW LOADING
********************************************************/
function awe_showLoading(selector) {
	var loading = $('.loader').html();
	$(selector).addClass("loading").append(loading); 
}  window.awe_showLoading=awe_showLoading;

/********************************************************
# HIDE LOADING
********************************************************/
function awe_hideLoading(selector) {
	$(selector).removeClass("loading"); 
	$(selector + ' .loading-icon').remove();
}  window.awe_hideLoading=awe_hideLoading;

/********************************************************
# SHOW POPUP
********************************************************/
function awe_showPopup(selector) {
	$(selector).addClass('active');
}  window.awe_showPopup=awe_showPopup;

/********************************************************
# HIDE POPUP
********************************************************/
function awe_hidePopup(selector) {
	$(selector).removeClass('active');
}  window.awe_hidePopup=awe_hidePopup;

/********************************************************
# CONVERT VIETNAMESE
********************************************************/
function awe_convertVietnamese(str) { 
	str= str.toLowerCase();
	str= str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g,"a"); 
	str= str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g,"e"); 
	str= str.replace(/ì|í|ị|ỉ|ĩ/g,"i"); 
	str= str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g,"o"); 
	str= str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g,"u"); 
	str= str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g,"y"); 
	str= str.replace(/đ/g,"d"); 
	str= str.replace(/!|@|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\;|\'| |\"|\&|\#|\[|\]|~|$|_/g,"-");
	str= str.replace(/-+-/g,"-");
	str= str.replace(/^\-+|\-+$/g,""); 
	return str; 
} window.awe_convertVietnamese=awe_convertVietnamese;

/********************************************************
# RESIDE IMAGE PRODUCT BOX
********************************************************/
function awe_resizeimage() { 
	/*$('.product-box .product-thumbnail a img').each(function(){
		var t1 = (this.naturalHeight/this.naturalWidth);
		var t2 = ($(this).parent().height()/$(this).parent().width());
		if(t1<= t2){
			$(this).addClass('bethua');
		}
		var m1 = $(this).height();
		var m2 = $(this).parent().height();
		if(m1 <= m2){
			$(this).css('padding-top',(m2-m1)/2 + 'px');
		}
	})	*/
} window.awe_resizeimage=awe_resizeimage;

/********************************************************
# SIDEBAR CATEOGRY
********************************************************/
function awe_category(){
	$('.nav-category .fa-angle-down').click(function(e){
		$(this).parent().toggleClass('active');
	});
} window.awe_category=awe_category;

/********************************************************
# MENU MOBILE
********************************************************/
function awe_menumobile(){
	$('.menu-baxxr').click(function(e){
		e.preventDefault();
		$('#menu-mobilexx').toggleClass('open');
	});
	$('#naxxv .fa').click(function(e){		
		e.preventDefault();
		$(this).parent().parent().toggleClass('open');
	});
} window.awe_menumobile=awe_menumobile;


$('.menu-bar').click(function(event){
	event.stopPropagation();
	$("#menu-mobile").slideToggle("fast");
});
$("#menu-mobile").on("click", function (event) {
	event.stopPropagation();
});

$('.ct-mb .mn-item .fa').click(function(){
	$(this).closest('li').find('>ul').slideToggle("fast");
});


$("span:contains('- 0 %')").text("-1%");

$('.footer-widget h2').click(function(){

	var wDW = $(window).width();

	if(wDW <= 767){
		$(this).next('ul').slideToggle('300');
	} 
});



/********************************************************
# ACCORDION
********************************************************/
function awe_accordion(){
	$('.accordion .nav-link').click(function(e){
		e.preventDefault;
		$(this).parent().toggleClass('active');
	})
} window.awe_accordion=awe_accordion;

/********************************************************
# OWL CAROUSEL
********************************************************/
function awe_owl() { 
	$('.owl-carousel:not(.not-dqowl)').each( function(){
		var xs_item = $(this).attr('data-xs-items');
		var lg_item = $(this).attr('data-lg-items');
		var md_item = $(this).attr('data-md-items');
		var sm_item = $(this).attr('data-sm-items');	
		var margin=$(this).attr('data-margin');
		var dot=$(this).attr('data-dot');
		var nav=$(this).attr('data-nav');
		var height=$(this).attr('data-height');
		if (typeof margin !== typeof undefined && margin !== false) {    
		} else{
			margin = 30;
		}
		if (typeof xs_item !== typeof undefined && xs_item !== false) {    
		} else{
			xs_item = 1;
		}
		if (typeof sm_item !== typeof undefined && sm_item !== false) {    

		} else{
			sm_item = 3;
		}	
		if (typeof md_item !== typeof undefined && md_item !== false) {    
		} else{
			md_item = 3;
		}
		if (typeof dot !== typeof undefined && dot !== true) {   
			dot= true;
		} else{
			dot = false;
		}
		$(this).owlCarousel({
			loop:false,
			margin:Number(margin),
			responsiveClass:true,
			dots:dot,
			nav:nav,
			autoHeight:height,
			responsive:{
				0:{
					items:Number(xs_item)				
				},
				768:{
					items:Number(sm_item)				
				},
				992:{
					items:Number(md_item)				
				},
				1200:{
					items:Number(lg_item)				
				}
			}
		})
	})
} window.awe_owl=awe_owl;







function awe_blog() { 
	$("#owl-blog-index").owlCarousel({
		navigation : false, // Show next and prev buttons
		paginationSpeed : 400,
		pagination : false,
		dots: false,
		autoplay:false,
		autoplayTimeout:4500,
		autoplayHoverPause:true,
		autoHeight: true,
		loop: true,
		margin: 30,
		responsive: {
			0: {
				items: 1
			},
			543: {
				items: 1
			},
			768: {
				items: 2
			},
			991: {
				items: 3
			},
			992: {
				items: 3
			},
			1300: {
				items: 3,
			},
			1590: {
				items: 3,
			}
		}
	});
} window.awe_blog=awe_blog;


/*ENDPRODUCT*/

/*Toggle class*/

$('.showsearchfromtop').click(function(event){
	$('.searchfromtop').slideToggle("fast");
});
$('.hidesearchfromtop').click(function(event){
	$('.searchfromtop').slideToggle("up");
});
$(this).on("click", function (event) {
	event.stopPropagation();
});


/*Menumobile*/
$('.btn-navbar').click(function(e){
	e.stopPropagation();
	$('.menu_mobile').toggleClass('open_sidebar_menu');
	$('.fix_height_mobile').toggleClass('margin-left-menu');
	$('.ops').toggleClass('o_show');
});
$('.ct-mobile li .fa').click(function() {
	$(this).closest('li').find('> .sub-menu').slideToggle("fast");
	$(this).closest('i').toggleClass('fa-angle-right fa-angle-down');
	return false;              
}); 
$('.ops').click(function(){
	$('.menu_mobile').removeClass('open_sidebar_menu');
	$('.fix_height_mobile').removeClass('margin-left-menu');
	$('.ops').removeClass('o_show');
});
$(window).bind("load resize scroll",function(e){
	var heightx =  $(window).height();
	$('.sidenav').css('height', heightx );
});


$(document).ready(function(){
	var wDW = $(window).width();
	/*Footer*/
	if(wDW > 767){
		$('.menu_ft').show();
	}else {
		$('.footer-mid-menu > h3').click(function(){
			$(this).next('ul').slideToggle("fast");
		});
	}
});
/*$(document).bind( "mouseup touchend", function(e){

	var menu_mobile = $('.menu_mobile');

	if (!menu_mobile.is(e.target) // if the target of the click isn't the container...
		&& menu_mobile.has(e.target).length === 0) // ... nor a descendant of the container
	{
		menu_mobile.removeClass('open_sidebar_menu');
	}

});*/
/*Endmenu*/

/********************************************************
# BACKTOTOP
********************************************************/
function awe_backtotop() { 
	if ($('.back-to-top').length) {
		var scrollTrigger = 100, // px
			backToTop = function () {
				var scrollTop = $(window).scrollTop();
				if (scrollTop > scrollTrigger) {
					$('.back-to-top').addClass('show');
				} else {
					$('.back-to-top').removeClass('show');
				}
			};
		backToTop();
		$(window).on('scroll', function () {
			backToTop();
		});
		$('.back-to-top').on('click', function (e) {
			e.preventDefault();
			$('html,body').animate({
				scrollTop: 0
			}, 700);
		});
	}
} window.awe_backtotop=awe_backtotop;

/********************************************************
# Tab
********************************************************/
$(".e-tabs:not(.not-dqtab)").each( function(){
	$(this).find('.tabs-title li:first-child').addClass('current');
	$(this).find('.tab-content').first().addClass('current');

	$(this).find('.tabs-title li').click(function(){
		var tab_id = $(this).attr('data-tab');

		var url = $(this).attr('data-url');
		$(this).closest('.e-tabs').find('.tab-viewall').attr('href',url);

		$(this).closest('.e-tabs').find('.tabs-title li').removeClass('current');
		$(this).closest('.e-tabs').find('.tab-content').removeClass('current');

		$(this).addClass('current');
		$(this).closest('.e-tabs').find("#"+tab_id).addClass('current');
	});    
});


/********************************************************
# DROPDOWN
********************************************************/
$('.dropdown-toggle').click(function() {
	$(this).parent().toggleClass('open'); 	
}); 
$('.btn-close').click(function() {
	$(this).parents('.dropdown').toggleClass('open');
}); 
$('body').click(function(event) {
	if (!$(event.target).closest('.dropdown').length) {
		$('.dropdown').removeClass('open');
	};
});