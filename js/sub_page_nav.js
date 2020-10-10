const main_menu = document.querySelectorAll('.menu__category .main');
main_menu[0].addEventListener('click', () => {
  main_menu[0].classList.toggle('open-menu');
});
main_menu[1].addEventListener('click', () => {
  main_menu[1].classList.toggle('open-menu');
});
main_menu[2].addEventListener('click', () => {
  main_menu[2].classList.toggle('open-menu');
});
/* main_menu[3].addEventListener('click', () => {
  main_menu[3].classList.toggle('open-menu');
}); */

const _main_menu = document.querySelectorAll('.menu__category ._main');
_main_menu[0].addEventListener('click', () => {
  _main_menu[0].classList.toggle('open-menu');
});
const toggleicons = document.querySelectorAll('header .icon');
toggleicons.forEach (icon => {  
  icon.addEventListener('click', (event) => {
    icon.classList.toggle('close');
  });
}); 

const menu = document.querySelector('header .menu');
const menu_list = document.querySelector('.menu__category');
const toggleicon = document.querySelector('header .icon');
toggleicon.addEventListener('click', () => {
  menu.classList.toggle('menu-slide');
  menu_list.classList.toggle('menu-fadein');
});

$(function(){
  $('._main').click(function(){
      $('._sub').eq(0).slideToggle(500);
      $('._sub').eq(1).slideToggle(500);
      $('._sub').eq(2).slideToggle(500);
  });
	

  $('.main').eq(0).click(function(){
      $('.sub').eq(0).slideToggle(500);
      $('.sub').eq(1).slideToggle(500);
  });

  $('.main').eq(1).click(function(){
      $('.sub').eq(2).slideToggle(500);
  });

  $('.main').eq(2).click(function(){
      $('.sub').eq(3).slideToggle(500);
      $('.sub').eq(4).slideToggle(500);
      $('.sub').eq(5).slideToggle(500);
  });
});
$(function() {
    var tabBtn = $(".menu__category > ul > ._sub");
    tabBtn.click(function() {
        var target = $(this);
        tabBtn.removeClass("active");
        target.addClass("active");
    });
});
$(function() {
	$(".mainmove-btn span").hover(function() {
		$(this).text("홈으로");
	},function() {
		$(this).text("Home");
	});
});
