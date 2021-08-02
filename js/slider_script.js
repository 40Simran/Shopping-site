$(document).ready(function(){
	
	$(".play").click(function(){
		$(".slider img:last-child").animate({'opacity':'0'},5000,function(){
			var img=$(".slider img:last-child").attr("src");
			$(".slider").prepend('<img src="'+img+'"/>');
			$(".slider img:last-child").remove();
			$(".play").click();
			});
		
		});
	
   // for infinite loop
	$(".play").click();
	
	
	
	$(".prev").click(function(){
		
		$(".slider img:last-child").animate({'opacity':'0'},500,function(){
		
			var img1=$(".slider img:first-child").attr("src");		
			
			$(".slider").append('<img src="'+img1+'"/>');		
	        $(".slider img:first-child").remove();
			
			
			});
		});
	
	
	
	});
// JavaScript Document