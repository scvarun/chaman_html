(function($) {
  'use strict';

  var Unifato = {
    init: function() {
      this.header();
      this.sidebar();
      this.content();
      this.enablePlugins();
    },

    header: function() {
      this.enableNavToggle();
    },

    enableNavToggle: function() {
      var navToggles = document.getElementsByClassName('nav-toggle');
      _.each(navToggles, function(navToggle) {
        var target = document.querySelector(navToggle.dataset.target);
        navToggle.addEventListener('click', function(e) {
          e.preventDefault();
          target.classList.toggle('active');
          document.body.classList.toggle('navigation-overlay');
        });
      })
    },

    sidebar: function() {
    },

    content: function() {
      this.enableSmoothScroll();
    },

    enableSmoothScroll: function() {
      $('a').on('click', function(e) {
        if( this.hash !== '' ) {
          e.preventDefault();
          var hash = this.hash;
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 800, function() {
            window.location.hash = hash;
          });
        }
      });
    },

    
    
    enablePlugins: function() {
      this.enableSticky();
    },

    enableSticky: function() {
      var $el = $('.sticky-wrapper');
      if( !$el.length ) return;
      var defaults = {
        useStickyClasses: true
      };
      $el.each(function() {
        var $sticky = $(this);
        var options = $sticky.data('plugin-options');
        options = $.extend({}, defaults, options);
        stickybits($sticky[0], options);

        // Workaround for firefox bug
        var posY = window.pageYOffset;
        var posX = window.pageXOffset;
        window.scrollTo(posY, window.pageYOffset - 1);
        window.scrollTo(posY, window.pageYOffset);
      });
    },
  };

  function elementInViewport(el) {
    var top = el.offsetTop;
    var left = el.offsetLeft;
    var width = el.offsetWidth;
    var height = el.offsetHeight;

    while(el.offsetParent) {
      el = el.offsetParent;
      top += el.offsetTop;
      left += el.offsetLeft;
    }

    return (
      top < (window.pageYOffset + window.innerHeight) &&
      left < (window.pageXOffset + window.innerWidth) &&
      (top + height) > window.pageYOffset &&
      (left + width) > window.pageXOffset
    );
  }

  document.addEventListener('DOMContentLoaded', function() {
    Unifato.init();
  });
})(jQuery);