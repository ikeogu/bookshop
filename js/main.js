$(document).ready(function(){
    $('.accord h3').click(function(){
        $(this).toggleClass('change');
        $(this).siblings('p').slideToggle();
        $(this).parent('div').siblings().find('p').slideUp();
        $(this).parent('div').siblings().find('h3').removeClass('change');        
    });
});
$(window).load(function(){
  	$('#pt_custommenu .pt_menu').find('.active').removeClass('active');
	var url = window.location.href;
	$('#pt_custommenu .pt_menu a').filter(function() {
	    return this.href == url;
	}).parent().parent().addClass('act');
	$('#column-left .nav > li, #column-left .list-group').find('.active').removeClass('active');
	var url = window.location.href;
	$('#column-left .nav > li > a, #column-left .list-group a').filter(function() {
	    return this.href == url;
	}).addClass('active');
});

$(document).ready( function() {
    /* Check width on page load*/
    if ( $(window).width() < 993) {
     $('#main-menu-navbar-collapse').addClass('collapse');
    }
    else {}
});

$(window).resize(function() {
    /*If browser resized, check width again */
    if ($(window).width() < 993) {
     $('#main-menu-navbar-collapse').addClass('collapse');
    }
    else {
      $('#main-menu-navbar-collapse').removeClass('collapse');
    }
});

$(document).ready( function() {
    /* Check width on page load*/
    if ( $(window).width() < 768) {
     $('.footer-content , .col ul.link-follow').addClass('footer-toggle');
    }
    else {}
});

$(window).resize(function() {
    /*If browser resized, check width again */
    if ($(window).width() < 768) {
     $('.footer-content , .col ul.link-follow').addClass('footer-toggle');
    }
    else {
      $('.footer-content , .col ul.link-follow').removeClass('footer-toggle');
    }
});
$(document).ready(function(){
    $(".footer-btn").click(function(){
        $(this).next().slideToggle();
        $(this).toggleClass('turn');
        $('.footer-toggle').not($(this).next()).slideUp();
        $('.footer-btn').not($(this)).removeClass('turn');
    });
});
$(function() {
  $('#ChangeToggle').click(function() {
    $('#navbar-hamburger').toggleClass('hidden');
    $('#navbar-close').toggleClass('hidden');  
  });
});