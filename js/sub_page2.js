$(function() {
        $(".bx_slider").bxSlider({
            mode : "fade", // 화면전환 모드 "horizontal","fade","vertical"
            speed : 300, // 슬라이드 전환 속도(click했을 때)
            easing : 'ease-in-out', // 움직이는 방식
            slideWidth : 500, // slide 프레임 폭
            pager : true, // 슬라이드 아래쪽에 있는 불릿버튼
            pagerCustom : '.bx_pager',
            controls : false // 이전/다음 버튼 (previous / next)
        });
    });
$(function() {
	$(".pager1").on("click",function() {
		$(".table_box,.box2,.box3,.box4,.box5").css("display","none");
		$(".table_box1,.box1").css("display","block");
		/*$(".table_box1 .fig1,.table_box1 .fig2").css("color","violet");*/
	});     
	$(".pager2").click(function() {
            $(".table_box1,.table_box3,.table_box4,.table_box5,.box1,.box3,.box4,.box5").css("display","none");
		$(".table_box2,.box2").css("display","block");
		/*$(".table_box2 .fig1,.table_box2 .fig2").css("color","#F7955D");*/
	});
	$(".pager3").click(function() {
		$(".table_box1,.table_box2,.table_box4,.table_box5,.box1,.box2,.box4,.box5").css("display","none");
		$(".table_box3,.box3").css("display","block");
		/*$(".table_box3 .fig1,.table_box3 .fig2").css("color","#FF6F61");*/
		
	});
	$(".pager4").click(function() {
		$(".table_box1,.table_box2,.table_box3,.table_box5,.box1,.box2,.box3,.box5").css("display","none");
		$(".table_box4,.box4").css("display","block");
	/*	$(".table_box4 .fig1,.table_box4 .fig2").css("color","");*/
	});
	$(".pager5").click(function() {
		$(".table_box1,.table_box2,.table_box3,.table_box4,.box1,.box2,.box3,.box4").css("display","none");
		$(".table_box5,.box5").css("display","block");
	/*	$(".table_box5 .fig1,.table_box5 .fig2").css("color","");*/
	});
});
$(function() {
	$("article").delay(500).animate({
		opacity : 1
	},1000);
});
$(function() {
	$(".table_box,.table_box1").delay(1000).animate({
		opacity : 1
	},1000);
});
$(function() {
	$(".bx_pager").delay(2000).animate({
		opacity : 1
	},1000);
});
$(function() {
	$('._sub').eq(1).css("display","block").css("background","rgb(38, 143, 134)");
  $('._sub span ').eq(1).css("width","4px");
  $('._sub').eq(0).css("display","block");
  $('._sub').eq(2).css("display","block");
});