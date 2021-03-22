$(document).ready(function() {

    $('#form-overlay-valid').hide();

    function reset() {
        $('.wrong-entry').remove();
    }

    $('form').submit(function(event) {
        // console.info('Envoyer');
        event.preventDefault();
        reset();
        envoiFormulaire();
    })

    $('input').on('focus', function() {
        $(this).removeClass('invalid');
        $(this).next('.wrong-entry').remove();
    })


    function envoiFormulaire() {
        console.info('Démarrage de la fonction');

        var postData = $('form').serialize();

        console.info(postData);

         $.ajax ({
             datatype: 'json',
             type: 'POST',
             url: 'validation.php',
             data: postData,
             success: function(answer) {

                if (JSON.parse(answer) === true) {
                    console.log('Tout fonctionne');
                    $('#form-overlay-valid').fadeIn();
                }

                else {
                    $.each(JSON.parse(answer), function(field, error) {
                        console.log('Il y a des erreurs');
                        msgError = '<div class="wrong-entry">' + error + '</div></div>';
                        $('#' + field).addClass('invalid').after(msgError);
                    })
                }
             },

             error: function() {
                console.log('Problème de validation');
             }
         })


    }

});