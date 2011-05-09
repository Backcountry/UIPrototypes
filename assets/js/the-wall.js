var map = {"content-type review":".solicitation.review", "content-type question":".solicitation.question", "content-type photo":".solicitation.photo", "content-type video":".solicitation.video"};
var map2 = {"#all-content":"article", "#only-reviews":".review", "#only-questions":".question", "#only-photos":".photo", "#only-videos":".video"};	

// url mapping
var takeMeTo = function(){
	var url = document.location + "";
	var pos = url.search("#");	
	if(pos > 0){
		url = url.slice(pos);
		$("#wall-content > article").hide();
		$("#wall-content " + map2[url]).show();
	}
};

// expand the form when replying to a upc
var expandCommentsForm = function(){
	$(".add-upc-reply.collapsed textarea").click(function(){
		$(this).parent().parent().parent().removeClass("collapsed");
	});
}

// select an option in the review solicitation form
function surveyOptions(){
	$(".survey-options li dd").click(function(){
		$(this).siblings().removeClass("selected");
		$(this).toggleClass("selected");
	});
}

// solicitation tabs
function shareTabs(){
	$('#content-types a').click(function(event){
		event.preventDefault();
		toDisplay = map[$(this).attr('class')];
		$('section.solicitation').addClass("hidden")
		$(toDisplay).removeClass("hidden");
		
		if($('.solicitation.review').hasClass('collapsed')){
			$('.solicitation.review').removeClass('collapsed');
		}		
	});
}

// tabs for the content itself
function contentTabs(){
	$("#wall-content nav a").click(function(event){
		$("#wall-content > article").hide();
		$(this).siblings().removeClass("selected");
		$(this).addClass("selected");
		$("#wall-content " + map2[$(this).attr("href")]).show();
	});
}

// expand review form
function expandReviewSolicitation(){
	$('.cta.display-form').click(function(event){
		event.preventDefault();
		$(".solicitation.review").removeClass("collapsed");
	});
}

// do it
$(document).ready(function() {	
	shareTabs();
	surveyOptions();
	contentTabs();			
	expandReviewSolicitation();
	takeMeTo();
	expandCommentsForm();	
});