$( document ).ready(function() {
    $('.navbar a').click(function(e){
        e.preventDefault();
        $('html, body').animate({'scrollTop': $(
        $(this).attr('href') ).offset().top - parseInt( $( $(this).attr('href')
        ).css('paddingTop').replace('px', '') ) });
    }); // Fin click
});