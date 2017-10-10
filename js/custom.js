/*=============================================================
SISTEMA DE LOGIN V1.0  
===============================================================  */
(function ($) {
    "use strict";
    var mainApp = {
        main_fun: function () {
            /*====================================
              MENU BAR
           ======================================*/
            $(window).bind("load resize", function () {
                if ($(this).width() < 768) {
                    $('div.sidebar-collapse').addClass('collapse')
                } else {
                    $('div.sidebar-collapse').removeClass('collapse')
                }
            });
        },
        initialization: function () {
            mainApp.main_fun();
        }
    }
    // Inicializando... ///
    $(document).ready(function () {
        mainApp.main_fun();
    });
}(jQuery));