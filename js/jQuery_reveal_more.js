jQuery(function ($) {
            $( document ).ready(function() {
              // -- show read more
              var myRevealPanel = $('.read_more_btn');
                       myReveal = $('.read_more_txt');
              //
              myRevealPanel.on('click', function(){
                  //
                  //$('.read_more_row').children('.read_more_txt').toggleClass('package-unfade');
                  myReveal.toggleClass('package-unfade');
                  //$('.read_more_row').toggleClass('package-unfade');
                  //
                  myReveal.one('webkitTransitionEnd oTransitionEnd oTransitionEnd msTransitionEnd transitionend');
                  //$('.read_more_row').one('webkitTransitionEnd oTransitionEnd oTransitionEnd msTransitionEnd transitionend');
                  //
                  //$('.read_more_row').children('.read_more_txt').css({opacity: "1"});
                  myReveal.css({opacity: "1"});
                  //$('.read_more_row').css({opacity: "1"});
                  //
              });

              $('.gylb_col_02', '.get_your_back_life', '.t_and_c').animate({
                    height: $('.gylb_col_02', '.get_your_back_life', '.t_and_c').get(0).scrollHeight
                }, 1000, function(){
                    $(this).height('auto');
                });



            });
        });
