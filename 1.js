$(document).ready(function() {
	$(function(){
		khoimonan = $('.nhieumon').isotope({
		 itemSelector: '.motmon',
		 layoutMode: 'masonry'
	   });
   
	   khoimonan.imagesLoaded().progress( function() {
		 khoimonan.isotope('layout');
	   });
   
	   $('.tieudect a').click(function() {
		   dulieu = $(this).data('monan'); 
	   //	console.log(dulieu);
		   khoimonan.isotope({ filter:  dulieu })
			return false ; 
	   });
   
	   // xu ly phan responsive bang jquery . 
	   // tinh ra so div ten .motmon
   
	   //soluongmon = $('.motmon').length ;
	   //docao = soluongmon* 120; 
	   //console.log(docao );
   
	   //$('.noidungct').css({'height':docao})
   
	   // xem div .motmon co ton tai hay khong 
		
		new WOW().init();
   })  
   
   $('.owl-carousel').owlCarousel({
	   loop:false,
	   margin:10,
	   lazyload:true,
	   nav: false,
	   dots:true,
	   responsive:{
		   0:{
			   items:1
		   },
		   600:{
			   items:3
		   },
		   1000:{
			   items:5
		   }
	   }
   })

   clickFilter();
})


function clickFilter() {
	$(".button").on("click", function() {
		const name = $(this).attr("id");
		$(".filter-board").removeClass("active");
		$(`#${name}-board`).addClass("active");
	})
}