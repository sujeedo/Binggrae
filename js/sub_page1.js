$(function() {
        $("#article1").animate({
            opacity : 1
        },2000);
        $("#article2").delay(1000).animate({
            opacity : 1
        },1500);
		$("#article3").delay(2000).animate({
			opacity : 1
		},1700);
    });
$(function() {
	$('._sub').eq(0).css("display","block").css("background","rgb(38, 143, 134)");
  $('._sub span ').eq(0).css("width","4px");
  $('._sub').eq(1).css("display","block");
  $('._sub').eq(2).css("display","block");
});
