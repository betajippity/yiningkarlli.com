$(document).ready(function(){
	var $window = $(window);
	//Fade and shrink stuff	
	$(window).scroll(function() {
		var y = $window.scrollTop() / 50; 
		var titleFade = 1 - y/.95;
		$('.codeandvisuals').css("opacity",titleFade);
		if($(window).scrollTop()<=55){
			$('.yiningkarlli').css("opacity",titleFade);
			var titlebarShrink = 110-$window.scrollTop();
			titlebarShrink = Math.max(titlebarShrink,102);
			$('.topmenubar').css("height",titlebarShrink+"px");
		}else{
			$('.topmenubar-hover').css("height","");
			var nameFade = ($window.scrollTop()-55)/20;
			nameFade = Math.min(1,nameFade);
			$('.yiningkarlli').css("opacity",nameFade);
		}
	});
});
		  
//Pin navbar
$(window).scroll(function(){
	if($(window).scrollTop()>55){
	    $('.topmenubar').attr("class", "topmenubar-hover");
		$('body').css("margin-top","102px");
	}else{
		$('.topmenubar-hover').attr("class", "topmenubar");
		$('body').css("margin-top","0px");
	}
});

