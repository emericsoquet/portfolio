$(document).ready(function() {

    if ($(window).width() < 905) { 

        $('#header-nav').hide();
        $('#nav-button-hamburger').show();
        let opened = false;

            function fadeIn() {

                if(opened == false) {
                    $('#header-nav').fadeIn();
                    opened = true;
                }

                else {
                    $('#header-nav').fadeOut();
                    opened = false;
                }
            }

            function fadeOut() {
                $('#header-nav').fadeOut();
                opened = false;
            }

            $('#nav-button-hamburger').on('click', fadeIn);
            $('#nav-cross-closure').on('click', fadeOut);
            $('.header-nav-el').on('click', fadeOut);

        } 

        else {
            $('#nav-button-hamburger').hide();
        }

        $(window).resize(function() { /* si la fenêtre est redimensionnée */

        if ($(window).width() < 905) {
            
            $('#header-nav').hide();
            $('#nav-button-hamburger').show();

                function fadeIn() {

                    if(opened == false) {
                        $('#header-nav').fadeIn();
                        opened = true;
                    }

                    else {
                        $('#header-nav').fadeOut();
                        opened = false;
                    }
                }

                function fadeOut() {
                    $('#header-nav').fadeOut();
                    opened = false;
                }

                $('#nav-button-hamburger').on('click', fadeIn);
                $('#nav-cross-closure').on('click', fadeOut);
                $('.header-nav-el').on('click', fadeOut);
        }

        else {
            $('#nav-button-hamburger').hide();
            $('#header-nav').show();
        }
        })
})
