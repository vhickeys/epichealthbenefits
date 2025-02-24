/*-----------------------------------------------------------------------------------

    Theme Name: Yoga - Health Fitness & Yoga HTML Template
    Description: Health Fitness & Yoga HTML Template
    Author: Chitrakoot Web
    Version: 1.0
        
    ---------------------------------- */    

(function($) {

    "use strict";

    var $window = $(window);

        $("#preloader").fadeOut("normall",function(){$(this).remove()}),$window.on("scroll",function(){var e=$window.scrollTop(),o=$(".navbar-brand img"),t=$(".navbar-brand.logodefault img");e<=175?($("header").removeClass("scrollHeader").addClass("fixedHeader"),o.attr("src","img/logos/logo-inner.png")):($("header").removeClass("fixedHeader").addClass("scrollHeader"),o.attr("src","img/logos/logo.png")),t.attr("src","img/logos/logo.png")}),$window.on("scroll",function(){500<$(this).scrollTop()?$(".scroll-to-top").fadeIn(400):$(".scroll-to-top").fadeOut(400)}),$(".scroll-to-top").on("click",function(e){e.preventDefault(),$("html, body").animate({scrollTop:0},600)});var pageSection=$(".parallax,.bg-img");pageSection.each(function(e){$(this).attr("data-background")&&$(this).css("background-image","url("+$(this).data("background")+")")});var wow=new WOW({boxClass:"wow",animateClass:"animated",offset:0,mobile:!1,live:!0});function fullScreenHeight(){var e=$(".full-screen"),o=$window.height();e.css("min-height",o)}function ScreenFixedHeight(){var e=$("header").height(),o=$(".screen-height"),e=$window.height()-e;o.css("height",e)}function SetResizeContent(){fullScreenHeight(),ScreenFixedHeight(),$(window).width()<992&&$(".navbar-nav .dropdown-menu.sub-menu").css("display","none")}wow.init(),$(".story-video").magnificPopup({delegate:".video",type:"iframe"}),$(".source-modal").magnificPopup({type:"inline",mainClass:"mfp-fade",removalDelay:160}),$(".current-year").text((new Date).getFullYear()),0!==$(".copy-clipboard").length&&(new ClipboardJS(".copy-clipboard"),$(".copy-clipboard").on("click",function(){var e=$(this);e.text();e.text("Copied"),setTimeout(function(){e.text("Copy")},2e3)})),$window.resize(function(e){setTimeout(function(){SetResizeContent()},500),e.preventDefault()}),SetResizeContent();

    $(document).ready(function(){

        $(".testimonial-carousel1").owlCarousel({loop:!0,responsiveClass:!0,autoplay:!0,smartSpeed:1500,nav:!1,dots:!1,thumbs:!0,thumbsPrerendered:!0,center:!1,margin:50,responsive:{0:{items:1,margin:0},768:{items:1},992:{items:1},1200:{items:1}}}),$(".testimonial-carousel3").owlCarousel({loop:!0,responsiveClass:!0,autoplay:!0,autoplayTimeout:5e3,smartSpeed:1500,nav:!1,dots:!1,thumbs:!1,thumbsPrerendered:!1,center:!1,margin:50,items:1}),$(".portfolio-carousel3").owlCarousel({loop:!0,responsiveClass:!0,autoplay:!0,smartSpeed:1500,nav:!1,dots:!0,center:!1,margin:20,responsive:{0:{items:1},576:{items:2},768:{items:2},992:{items:3},1200:{items:4}}}),$(".history-carousel").owlCarousel({loop:!0,responsiveClass:!0,autoplay:!1,autoplayTimeout:5e3,smartSpeed:1500,nav:!1,dots:!1,center:!1,responsive:{0:{items:1},481:{items:2},768:{items:2},992:{items:3},1200:{items:4},1400:{items:5}}}),$(".client-carousel").owlCarousel({loop:!0,responsiveClass:!0,autoplay:!0,autoplayTimeout:5e3,smartSpeed:1500,nav:!1,dots:!1,center:!1,margin:30,responsive:{0:{items:1},481:{items:2},768:{items:3},992:{items:4},1200:{items:6}}}),$(".client-style1").owlCarousel({loop:!0,nav:!1,dots:!1,autoplay:!0,smartSpeed:800,autoplayTimeout:3e3,responsiveClass:!0,autoplayHoverPause:!1,responsive:{0:{items:2,margin:10},481:{items:2,margin:15},576:{items:4,margin:20},992:{items:5,margin:30},1200:{items:6,margin:50}}}),$(".slider-fade").owlCarousel({items:1,loop:!0,dots:!0,margin:0,nav:!1,autoplay:!0,smartSpeed:1500,animateIn:"fadeIn",animateOut:"fadeOut"}),$(".owl-carousel").owlCarousel({items:1,loop:!0,dots:!1,margin:0,autoplay:!0,smartSpeed:500});var owl=$(".slider-fade");owl.on("changed.owl.carousel",function(e){e=e.item.index-2;$("span").removeClass("animated fadeInUp"),$("h1").removeClass("animated fadeInUp"),$("a").removeClass("animated fadeInUp"),$(".owl-item").not(".cloned").eq(e).find("span").addClass("animated fadeInUp"),$(".owl-item").not(".cloned").eq(e).find("h1").addClass("animated fadeInUp"),$(".owl-item").not(".cloned").eq(e).find("a").addClass("animated fadeInUp")}),$(".countup").counterUp({delay:25,time:2e3}),$(".navbar-nav li.has-sub").removeClass("active");

        /*------------------------------------
            14. Cursor Helper
        --------------------------------------*/
        
        if ($(".cursor-helper").length) {

            var cursor = document.querySelector('.cursor-helper-outer');
            var cursorinner = document.querySelector('.cursor-helper-inner');
            var a = document.querySelectorAll('a');
            var footer = document.querySelectorAll('footer');
            var owlcarousel = document.querySelectorAll('.owl-carousel');
            
            document.addEventListener('mousemove', function (e) {
              var x = e.clientX;
              var y = e.clientY;
              cursor.style.transform = `translate3d(calc(${e.clientX}px - 50%), calc(${e.clientY}px - 50%), 0)`
            });

            document.addEventListener('mousemove', function (e) {
              var x = e.clientX;
              var y = e.clientY;
              cursorinner.style.left = x + 'px';
              cursorinner.style.top = y + 'px';
            });

            document.addEventListener('mousedown', function () {
              cursor.classList.add('click');
              cursorinner.classList.add('cursor-helper-innerhover')
            });

            document.addEventListener('mouseup', function () {
              cursor.classList.remove('click')
              cursorinner.classList.remove('cursor-helper-innerhover')
            });

            a.forEach(s=>{s.addEventListener("mouseover",()=>{cursor.classList.add("cursor-link")}),s.addEventListener("mouseleave",()=>{cursor.classList.remove("cursor-link")})}),footer.forEach(s=>{s.addEventListener("mouseover",()=>{cursor.classList.add("cursor-light")}),s.addEventListener("mouseleave",()=>{cursor.classList.remove("cursor-light")})}),owlcarousel.forEach(s=>{s.addEventListener("mouseover",()=>{cursor.classList.add("cursor-slider")}),s.addEventListener("mouseleave",()=>{cursor.classList.remove("cursor-slider")})});

          }
      
    });

    $window.on("load",function(){$(".portfolio-gallery").lightGallery(),$(".portfolio-link").on("click",o=>{o.stopPropagation()})});

})(jQuery);