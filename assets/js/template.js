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
    },
    
    enablePlugins: function() {
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