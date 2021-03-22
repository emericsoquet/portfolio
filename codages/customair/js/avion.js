$document.ready( function() {

    if($(window).innerWidth() < 360) {
        $('#tab1').hide();
        $('#plus1').on({
            click: function(){
                $('#tab1').slideToggle();
            }
        });
        $('#tab2').hide();
        $('#plus2').on({
            click: function(){
                $('#tab2').slideToggle();
            }
        });
        $('#tab3').hide();
        $('#plus3').on({
            click: function(){
                $('#tab3').slideToggle();
            }
        });
        $('#tab4').hide();
        $('#plus4').on({
            click: function(){
                $('#tab4').slideToggle();
            }
        });
        $('#tab5').hide();
        $('#plus5').on({
            click: function(){
                $('#tab5').slideToggle();
            }
        });
        $('#tab6').hide();
        $('#plus6').on({
            click: function(){
                $('#tab6').slideToggle();
            }
        });
    } else{
        $('.tab').show();
    }
});