$(document).ready(function() {  
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
	$(".button, .menu-item").on("click", function() {
		const name = $(this).attr("id").split("-")[0];

		const active = $(".filter-board").hasClass("active");
		const activeName = $(".board.active").attr("id") ?? "";
		if(active && name == activeName.split("-")[0]) {
			$(".filter-board").removeClass("active");
		}
		else {
			$(".board").removeClass("active");
			$(".menu-item").removeClass("active");

			$(".filter-board").addClass("active");
			$(`#${name}-board`).addClass("active");
			$(`#${name}-menu`).addClass("active");
		}

	})
}