var map = {"content-type review":".solicitation.review", "content-type question":".solicitation.question", "content-type photo":".solicitation.photo", "content-type video":".solicitation.video"};
var map2 = {"#all-content":"article", "#only-reviews":".hreview", "#only-questions":".question", "#only-photos":".photo", "#only-videos":".video"};	

var takeMeTo = function(){
	var url = document.location + "";
	var pos = url.search("#");	
	if(pos > 0){
		url = url.slice(pos);
		$("#wall-content > article").hide();
		$("#wall-content " + map2[url]).show();
	}
};

var expandCommentsForm = function(){
	$(".add-upc-reply div textarea").click(function(){
		$(this).parent().parent().removeClass("collapsed");
	});
}

$(document).ready(function() {
	
	/* solicitations */	
	$('#content-types a').click(function(event){
		event.preventDefault();
		toDisplay = map[$(this).attr('class')];
		$('section.solicitation').addClass("hidden")
		$(toDisplay).removeClass("hidden");
	});
	
	/* expand review form */
	$('.cta.display-form').click(function(event){
		event.preventDefault();
		$(this).hide();
		$(".solicitation.review").removeClass("collapsed");
		$('div.step').removeClass("hidden");
	});
	
	/* content */
	$("#wall-content nav a").click(function(event){
		$("#wall-content > article").hide();
		$("#wall-content " + map2[$(this).attr("href")]).show();
	});

	// url filtering of content
	takeMeTo();
	expandCommentsForm();
	
});