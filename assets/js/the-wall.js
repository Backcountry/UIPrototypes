$(document).ready(function() {
	/* solicitations */
	map = {"content-type review":".solicitation.review", "content-type question":".solicitation.question", 
		   "content-type photo":".solicitation.photo", "content-type video":".solicitation.video"};
	
	$('.cta.display-form').click(function(){
		$(this).hide();
		$(".solicitation.review").removeClass("collapsed");
		$('div.step').removeClass("hidden");
	});
	
	$('#content-types a').click(function(event){
		event.preventDefault();
		toDisplay = map[$(this).attr('class')];
		$('section.solicitation').addClass("hidden")
		$(toDisplay).removeClass("hidden");
	});
	
	/* content */
	mapa2 = {"#all-content":"article", "#only-reviews":".hreview", "#only-questions":".question", "#only-photos":".photo", "#only-videos":".video"};	
	$("#wall-content nav a").click(function(event){
		$("#wall-content > article").hide();
		$("#wall-content " + mapa2[$(this).attr("href")]).show();
	});
	
});