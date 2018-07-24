$(function(){
	$(".ktsc_con ul li .rsp").hide();	
	$(".ktsc_con ul li").hover(function(){
		$(this).find(".rsp").stop().fadeTo(10500,0.5)
		$(this).find(".text").stop().animate({left:'0'}, {duration: 500})
	},
	function(){
		$(this).find(".rsp").stop().fadeTo(10500,0)
		$(this).find(".text").stop().animate({left:'300'}, {duration: "fast"})
		$(this).find(".text").animate({left:'-300'}, {duration: 0})
	});
});