$(function() {
        $(".bx_slider").bxSlider({
            mode : "horizontal", // 화면전환 모드 "horizontal","fade","vertical"
            speed : 300, // 슬라이드 전환 속도(click했을 때)
            easing : 'ease-in-out', // 움직이는 방식
            captions : true, // title 내용 표시
            slideWidth : 1100, // slide 프레임 폭
            pager : false, // 슬라이드 아래쪽에 있는 불릿버튼
            controls : true // 이전/다음 버튼 (previous / next)
        });
    });
$(function() {
	$("article").animate({
		opacity : 1
	},1000);
	$(".slider_box").delay(500).animate({
		opacity : 1
	},1000);
	$(".bigbox").animate({
		justify : "space-around"
	},1000);
	$(".fruit_box").css("display","block").delay(1000).animate({
		opacity : 1
	},1000);
	$(".fruit_text").css("display","block").delay(1500).animate({
		opacity : 1
	},1000);
});
$(function() {
	$(window).resize(function() {
	// width값을 가져오기
		var width_size = window.outerWidth;
	
    	if(width_size <= 1000) {
			$(".bx_slider").bxSlider({
        	    mode : "horizontal", // 화면전환 모드 "horizontal","fade","vertical"
        	    speed : 300, // 슬라이드 전환 속도(click했을 때)
        	    easing : 'ease-in-out', // 움직이는 방식
        	    captions : true, // title 내용 표시
        	    slideWidth : 1100, // slide 프레임 폭
        	    pager : true, // 슬라이드 아래쪽에 있는 불릿버튼
        	    controls : false // 이전/다음 버튼 (previous / next)
        	});
		};
	});
});
$(function() {
	$('._sub').eq(2).css("display","block").css("background","rgb(38, 143, 134)");
  $('._sub span ').eq(2).css("width","4px");
  $('._sub').eq(0).css("display","block");
  $('._sub').eq(1).css("display","block");
		
});