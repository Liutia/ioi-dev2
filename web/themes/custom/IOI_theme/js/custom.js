/**
 * @file
 * Global utilities.
 *
 */
(function($, Drupal) {

  'use strict';

  Drupal.behaviors.IOI_theme = {
    attach: function(context, settings) {

      window.onscroll = function() {scrollFunction()};

      function scrollFunction() {
        if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
          $("#navbar-main").css("height", "60px");
          $("#navbar-main").css("background", "white");
          $("#navbar-main").css("border-bottom", "none");
          $("#block-headerlogo").css("display", "none");
          $("#block-headerlogoonscroll").css("display", "block");
          $('.nav-link').css("color", "black");
        } else {
          $("#navbar-main").css("height", "100px");
          $("#navbar-main").css("border-bottom", "1px solid white");
          $("#navbar-main").css("background", "rgba(0, 0, 0, 0)");
          $("#block-headerlogoonscroll").css("display", "none");
          $("#block-headerlogo").css("display", "block");
          $('.nav-link').css("color", "white");

        }
      }
    }
  };

})(jQuery, Drupal);



