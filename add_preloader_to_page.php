<?php

  /*-------------------------------------------------------------------------------
  Add Preloader
  -------------------------------------------------------------------------------*/


  // add div wrapper after body tag

  add_action( 'wp_head', 'custom_header_alt');
  function custom_header_alt() { ?>

    <script type="text/javascript">
          (function ($, document, undefined) {

              jQuery(document).ready( function($) {
                  $('body').prepend('<div id="preloader"><div id="status">&nbsp;</div></div>');
                  $('#page-container').css({'opacity':'1'});
              });

              $(window).on('load', function() { // makes sure the whole site is loaded
                  $('#status').fadeOut(); // will first fade out the loading animation
                  $('#preloader').delay(350).fadeOut('slow'); // will fade out the preloader DIV that covers the website.
                  $('body').delay(350).css({'overflow':'visible'});
              });

        }(jQuery, document))

    </script>

    <style>


    /* ==============
        PRELOADER
       ============== */



    body {
       overflow: hidden;
    }
    .page-container { opacity: 0; }
    /* */
    #page-container {
        /*overflow: hidden;*/
        opacity: 0;
        transition: 1s opacity;
    }
    #page-container.fade-out {
        opacity: 1;
        transition: all 4s cubic-bezier(.4,0,.2,1);
    }

       /* Preloader */

    #preloader {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: #c4c4c4;
      /* change if the mask should have another color then white */
      z-index: 999999;
      /* makes sure it stays on top */
      /*background: linear-gradient(270deg, #00ff4e, #c4c4c4);*/
      -webkit-background-size: 100% 100%;
    	-moz-background-size: 100% 100%;
    	background-size: 100% 100%;

      /*-webkit-animation: gradientBG 30s ease infinite;
      -moz-animation: gradientBG 30s ease infinite;
      animation: gradientBG 30s ease infinite;*/
    }
      /*
      @-webkit-keyframes gradientBG {
          0%{background-position:0% 50%}
          50%{background-position:100% 50%}
          100%{background-position:0% 50%}
      }
      @-moz-keyframes gradientBG {
          0%{background-position:0% 50%}
          50%{background-position:100% 50%}
          100%{background-position:0% 50%}
      }
      @keyframes gradientBG {
          0%{background-position:0% 50%}
          50%{background-position:100% 50%}
          100%{background-position:0% 50%}
      }
      */

    #status {
        width: 300px;
        height: 300px;
        position: absolute;
        left: 50%;
        /* centers the loading animation horizontally one the screen */
        top: 50%;
        /* centers the loading animation vertically one the screen */
        background-image: url(http://www.omgcreative.com.au/wp-content/themes/omgreboot/library/loader/OMG_loader.gif);
        /* path to your loading animation */
        background-repeat: no-repeat;
        background-position: center;
        margin: -150px 0 0 -150px;
        /* is width and height divided by two */
    }

    </style>

  <?php
  }
