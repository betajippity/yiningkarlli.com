$(document).ready(function(){
	var $window = $(window);
	//Fade and shrink stuff	
	$(window).scroll(function() {
		var y = $window.scrollTop() / 50; 
		var titleFade = 1 - y/.85;
		$('.codeandvisuals').css("opacity",titleFade);
		if($(window).scrollTop()<=49){
			$('.yiningkarlli').css("opacity",titleFade);
			var titlebarShrink = 110-$window.scrollTop();
			titlebarShrink = Math.max(titlebarShrink,94);
			$('.topmenubar').css("height",titlebarShrink+"px");
		}else{
			$('.topmenubar-hover').css("height","");
			var nameFade = ($window.scrollTop()-49)/20;
			nameFade = Math.min(1,nameFade);
			$('.yiningkarlli').css("opacity",nameFade);
		}
	});
});
		  
//Pin navbar
$(window).scroll(function(){
	if($(window).scrollTop()>49){
	    $('.topmenubar').attr("class", "topmenubar-hover");
		$('body').css("margin-top","94px");
	}else{
		$('.topmenubar-hover').attr("class", "topmenubar");
		$('body').css("margin-top","0px");
	}
});

