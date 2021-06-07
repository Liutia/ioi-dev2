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

      //menu
      function scrollFunction() {
        if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
          $("#navbar-main").css({
            height: '60px',
            background: 'white',
            borderBottom: 'none',
          });
          $("#block-headerlogo").css("display", "none");
          $("#block-headerlogoonscroll").css("display", "block");
          $('.nav-link').css("color", "black");
        } else {
          $("#navbar-main").css({
            height: '100px',
            borderBottom: '1px solid white',
            background: 'rgba(0, 0, 0, 0)',
          });
          $("#block-headerlogoonscroll").css("display", "none");
          $("#block-headerlogo").css("display", "block");
          $('.nav-link').css("color", "white");
        }
      }

      if($(window).width() < 580) {
        $("#block-headerlogoonscroll").css("display", "none");
        $("#block-headerlogo").css("display", "none");
        $('.nav-link').css("color", "white");
      } else {
        console.log('it is not working properly');
      }

      //burger menu on the main page button
      $(function() {
        $('.navbar-toggler-right').on('click', function () {
          console.log(1);
          $(".collapse").get(0).classList.toggle("menu-drop-active");
        });
      });

    }
  };

})(jQuery, Drupal);
