/*============================================================================
                      ALL CUSTOM JS FOR THE SITE
============================================================================*/
jQuery(document).ready(function($) {
        $(".royalSlider").royalSlider({
            // options go here
            // as an example, enable keyboard arrows nav
            keyboardNavEnabled: true,
            usePreloader:  true,
            sliderDrag:true,
        });  
   



/*certificate page lightbox*/
    $("#cert").fancybox({
          helpers: {
              title : {
                  type : 'float'
              }
          }
      });










     });