$(document).ready(function(){
	var $window = $(window);
	//Fade and shrink stuff	
	$(window).scroll(function() {
		var y = $window.scrollTop() / 75; 
		var titleFade = 1 - y/.85;
		
		$('div.customyiningkarlli').css("opacity",titleFade);	
		if($(window).scrollTop()<=65){
			$('div.customcodeandvisuals').css("opacity",titleFade);
				
		}else{
			var nameFade = ($window.scrollTop()-65)/20;
			nameFade = Math.min(1,nameFade);
			$('div.customcodeandvisuals').css("opacity",nameFade);
			$('div.customyiningkarlli').css("opacity",nameFade);
		}
	});
});
		  
//Pin navbar
$(window).scroll(function(){
	if($(window).scrollTop()>65){
	
		$('div.customtopbar-position').css("height","45px");
		$('div.customtopbar-position').css("position","fixed");
		$('div.content').css("margin-top","80px");
		$('div.customcodeandvisuals').css("font",'30px "futura-pt"');
		$('div.customcodeandvisuals').css("margin-top",'-2.5px');
		$('div.customcodeandvisuals').css("margin-left",'-50px');
		$('div.customcodeandvisuals').css("position",'absolute');
		
		$('div.customyiningkarlli').css("font",'20px "futura-pt"');
		$('div.customyiningkarlli').css("margin-top",'7px');
		$('div.customyiningkarlli').css("margin-left",'0px');
		$('div.customyiningkarlli').css("margin-right",'40px');
		$('div.customyiningkarlli').css("text-align",'right');
	}else{
	
		$('div.customtopbar-position').css("height","110px");
		$('div.customtopbar-position').css("position","");
		$('div.content').css("margin-top","");
		$('div.customcodeandvisuals').css("font",'');
		$('div.customcodeandvisuals').css("margin-top",'');
		$('div.customcodeandvisuals').css("margin-left",'');
		$('div.customcodeandvisuals').css("position",'');
		
		$('div.customyiningkarlli').css("font",'');
		$('div.customyiningkarlli').css("margin-top",'');
		$('div.customyiningkarlli').css("margin-left",'');
		$('div.customyiningkarlli').css("margin-right",'');
		$('div.customyiningkarlli').css("text-align",'');
	}
	console.log($(window).scrollTop())
});

