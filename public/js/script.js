$(document).ready(function () {
    $('h1').addClass("font-Yekan");
    $('h2').addClass("font-Yekan");
    $('h3').addClass("font-Yekan");
    $('p').addClass("font-Yekan");
    $('span').addClass("font-Yekan");
    $('li').addClass("font-Yekan");
    $('h1').addClass("font-Yekan");
    $('button').addClass("font-Yekan");
    $('a').addClass("font-Yekan");
    $('th').addClass("font-Yekan");
    $('td').addClass("font-Yekan");

})



// =================================================================
//userpanel->ddashboard.php
// دستورات مربوط به منو
$("#subMenuMobile li > a").click(function (e) {
    e.preventDefault();

    var tagN = $(this);
    $(tagN).find("a > svg").toggleClass('rotate-180 transition ease-in-out ');
    $(this).next('ul').slideToggle();
});
$("#icon_aside").click(function (e) {
    e.preventDefault();
    $('#idCloseNav').slideToggle();
    $('#aside_right').toggleClass("translate-x-full");
    $("#bg_sidebar").toggleClass("hidden");

});
$('#idCloseNav').click(function (e) {
    e.preventDefault();
    $('#idCloseNav').slideToggle();
    $('#aside_right').toggleClass("translate-x-full");
    $("#bg_sidebar").toggleClass("hidden");
});
// دستورات مربوط به منوی سمت راست


// دستورات مربوط یه منوی باز شونده 

$("#showDetalisAccount").click(function (e) { 
    e.preventDefault();
   var attr= $(this).attr('data-item');
  $(this).parent('#inptData').next().slideToggle('fast'); return;
    
});
// دستورات مربوط یه منوی باز شونده 
//userpanel->ddashboard.php
// =================================================================

// =================================================================
//index.php

// منو در حالت موبایل 
$("#subMenuMobile li").click(function(e) {
    e.preventDefault();

    var tagN = $(this);
    $(tagN).find("a > svg").toggleClass('rotate-180 transition ease-in-out ');
    setTimeout(() => {
       $(' > ul', this).slideToggle(200);
    }, 300);
 });
 // نو بار سمت راست 
 $('#btnNavRight').click(function(e) {
    e.preventDefault();
   
    $('#idCloseNav').slideToggle();
    $('#siRight').toggleClass('translate-x-full').toggleClass('translate-x-0');

 });
 $('#idCloseNav').click(function(e) {
    e.preventDefault();
    $('#idCloseNav').slideUp();
    $('#siRight').toggleClass('translate-x-full').toggleClass('translate-x-0');
 });
// منو در حالت موبایل 
//index.php
// =================================================================





