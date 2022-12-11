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

   var valueA = parseInt($("#range-a").val());
   var valueB = parseInt($("#range-b").val());
   var max = parseInt($("#range-a").attr("max"));
   var percent1 = valueA*100/max;
   var percent2 = valueB*100/max;
   $("#min").val("$" + valueA);
   $("#max").val("$" + valueB);
   fillColor(percent1, percent2);
   sliderTwoSide();
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

function sliderTwoSide() {
	const minGap = 0;
	var valueA, valueB;

	$("#range-a").on("input", function() {
		valueA =  parseInt($(this).val());
		valueB =  parseInt($("#range-b").val());

		if(valueB - valueA <= minGap) {
			valueA = valueB-minGap;
			$("#range-a").val(valueA);
		}
		$("#min").val("$" + valueA);
		var max = parseInt($("#range-a").attr("max"));
		var percent1 = valueA*100/max;
		var percent2 = valueB*100/max;

		fillColor(percent1, percent2);
	})

	$("#range-b").on("input", function() {
		valueA =  parseInt($("#range-a").val());
		valueB =parseInt($(this).val());


		if(valueB - valueA <= minGap) {
			valueB = valueA+minGap;

			$("#range-b").val(valueB);
		}
		$("#max").val("$" + valueB);

		var max = parseInt($("#range-a").attr("max"));
		var percent1 = valueA*100/max;
		var percent2 = valueB*100/max;

		fillColor(percent1, percent2);
	})

	$("#min").on("change", function() {
		valueA = parseInt($(this).val().split("$")[1]);
		valueB =  parseInt($("#range-b").val());
		if(valueB - valueA > minGap) {
			$("#range-a").val(valueA);
		}
		else {
			valueA = valueB-minGap;
			$("#min").val("$" + valueA);
			$("#range-a").val(valueA);
		}
		
		var max = parseInt($("#range-a").attr("max"));
		var percent1 = valueA*100/max;
		var percent2 = valueB*100/max;

		fillColor(percent1, percent2);
	})

	$("#max").on("change", function() {
		valueA =  parseInt($("#range-a").val());
		valueB = parseInt($(this).val().split("$")[1]);
		if(valueB - valueA > minGap) {
			$("#range-b").val(valueB);
		}
		else {
			valueB = valueA+minGap;
			$("#max").val("$" + valueB);
			$("#range-b").val(valueB);
		}

		var max = parseInt($("#range-a").attr("max"));
		var percent1 = valueA*100/max;
		var percent2 = valueB*100/max;

		fillColor(percent1, percent2);
	})
}

function fillColor(percent1, percent2) {
	$(".slider-track").css('background-image', `linear-gradient(to right, #C3C2C2 ${percent1}%,#FBCF23 ${percent1}%, #FBCF23 ${percent2}%, #C3C2C2 ${percent2}%`);
}