// Scrollmagic
var controller = new ScrollMagic.Controller();
var tween = TweenMax.to("nav", 1, { className: "+=nav--change" });
var scene = new ScrollMagic.Scene({ triggerElement: "#main", duration: 300 })
  .setTween(tween)
  .addTo(controller);

var controller = new ScrollMagic.Controller();
var tween = TweenMax.to("nav", 1, { className: "+=nav--bg" });
var scene = new ScrollMagic.Scene({ triggerElement: "#main", duration: 300, offset: 300 })
  .setTween(tween)
  .addTo(controller);

var controller = new ScrollMagic.Controller();
var tween = TweenMax.to(".running-your-energy", 1, { className: "+=running-your-energy--change" });
var scene = new ScrollMagic.Scene({ triggerElement: "#main", duration: 300 })
  .setTween(tween)
  .addTo(controller);


var controller = new ScrollMagic.Controller();
var tween = TweenMax.to(".elix", 1, { className: "+=elixcanged" });
var scene = new ScrollMagic.Scene({ triggerElement: "#main", duration: 300 })
  .setTween(tween)
  .addTo(controller);

// regio's
jQuery(document).ready(function () {
  jQuery("body").on('click', '.regio--name', function () {
    jQuery(this).next('.branches').slideToggle(200);
    jQuery(this).toggleClass('is--open');
  });
});

// Faq
jQuery(document).ready(function () {
  jQuery("body").on('click', '.faq', function () {
    jQuery(this).find('.answ').slideToggle(200);
    jQuery(this).toggleClass('is--open');
  });
});

// Nice select

jQuery(window).scroll(function () {
  var scroll = jQuery(window).scrollTop();
  if (scroll >= 160) {
    jQuery(".main-nav ul li a").addClass("colr--changed");
    jQuery(".main-nav").addClass("colr--changed");
  } else {
    jQuery(".main-nav").removeClass("colr--changed");
    jQuery(".main-nav ul li a").removeClass("colr--changed");
  }
});

// No opener
function noOpener() {
  //get elements
  var e = document.querySelectorAll('a[target="_blank"]:not([rel~="noopener"])');
  if (e.length) {
    //loop through
    for (i = 0; i < e.length; ++i) {
      //check for existing rel
      var rel = e[i].getAttribute('rel');
      if (rel) {
        //we don't want doubel noreferrer
        rel = rel.replace('noreferrer', '');
        e[i].setAttribute('rel', rel + ' noopener noreferrer nofollow');
      } else {
        e[i].setAttribute('rel', 'noopener noreferrer');
      }

    }
  }
}

jQuery(document).ready(function () {
  noOpener()
});


// Scroll to top button
jQuery(window).scroll(function () {
  var scroll = jQuery(window).scrollTop();
  if (scroll >= 600) {
    jQuery(".btp").addClass("is--visible");
  } else {
    jQuery(".btp").removeClass("is--visible");
  }
});

jQuery('.btp').on('click', function (e) {
  e.preventDefault();
  jQuery('html, body').animate({ scrollTop: 0 }, '300');
});

// Progress bar
jQuery(window).scroll(function (event) {
  var scrollTop = jQuery(window).scrollTop();
  docHeight = jQuery(document).height(),
    winHeight = jQuery(window).height(),
    scrollPercent = (scrollTop) / (docHeight - winHeight),
    scrollPercentageString = (scrollPercent * 100) + "%",
    readingIndicator = jQuery(".reading-progress");
  readingIndicator.width(scrollPercentageString);
});


// Mega
jQuery("body").on('click', '.mtgo', function () {
  jQuery(this).toggleClass('h--open');
  jQuery('.mgm').toggleClass('clickable');
  jQuery('.l').animate({ 'height': 'toggle' }, 400);
  jQuery('.r').animate({ 'width': 'toggle' }, 400);
  jQuery('.mgm .le').toggleClass('op');
  jQuery('.mgm .ri').toggleClass('op-r');
  jQuery('.news-nav').toggleClass('is--v');
  jQuery('.mgm--nav li').toggleClass('is--shown');
  jQuery('nav').toggleClass('mgm--open');
});

// Hamburger menu
jQuery("body").on('click', '.hamburger', function () {
  jQuery('.mobile-nav-fs').toggleClass('is_visible');
  jQuery('nav').toggleClass('mobile_is_visible');
  jQuery('.hamburger').toggleClass('is__open');
  jQuery('.mobile-nav-fs ul li a').toggleClass('show__me');
});

jQuery("body").on('click', '.mobile-nav-fs .menu-item-has-children', function () {
  jQuery(this).find('.sub-menu').slideToggle();
});


// Smooth scroll to anchor 

jQuery('a[href*=\\#]').on('click', function (event) {
  target = jQuery(this).attr('href');
  if (target === '#') {
    event.preventDefault();
    return;
  } else if (target.slice(0, 1) === '#') {
    event.preventDefault();
    jQuery('html,body').animate({ scrollTop: jQuery(this.hash).offset().top }, 1000);
  }
});


jQuery(".dwn").click(function () {
  var cls = jQuery(this).closest("section").next().offset().top + -100;
  jQuery("html, body").animate({ scrollTop: cls }, "slow");
});



jQuery(".wp-block-group").addClass("container");


var maxHeight = 0;

jQuery(".in").each(function(){
   if (jQuery(this).height() > maxHeight) { maxHeight = jQuery(this).height(); }
});

jQuery(".in").height(maxHeight);