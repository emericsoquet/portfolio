// On déclare les variables
var nb = 8 ; // On fixe le nombre d'image
var current = 0 ; // On donne l'image courante (de départ)
var imgsrep = '../img/diapo/' ; // On donne le chemin du répertoire d'images
var imgs = new Array() ; // on crée un tableau des images pour le préchargement
var t; // timer
//On nomme les images image0.png, image1.png, etc, dans le tableau
for (i=0;i<nb;i++){
imgs.push(imgsrep + 'image' + i + '.png');
};
//fonction de préchargement des images
function charge_images(){
    $(imgs).each(function(){// pour chaque image
    $("<img/>").src = this; // on affecte à un img virtuel un attribut src avec la valeur de l'élément(this)
    });
}
$(document).ready(function(){//lorsque la page est chargée
    //préchargement des images

    charge_images();
    // On insert un élément img dans la div d'id conteneurdiapo
    $('<img id=\'diapoimage\' alt=\'une image\' />').attr('src', imgsrep + 'image0.png').appendTo($
    ('#conteneurdiapo'));

    // On démarre le timer t
    t = setInterval(change_image, 1000);

    $('#diapoimage').mouseover(function(){
        clearInterval(t);// alors on arrête le timer t
    });
    $('#diapoimage').mouseleave(function(){
        t = setInterval(change_image, 1000); //on démarre le timer t
    });
    //fonction changement d'image
    function change_image(){
    current++; // on incrémente current
    if(current===nb){current=0;} // test de dépassement
    $('#diapoimage').attr('src', imgs[current]);// on écrit la nouvelle source
    }

    $('#conteneurdiapo').mouseover(function(){
        $('#diapotexte').fadeOut();
    });
    $('#conteneurdiapo').mouseleave(function(){
        $('#diapotexte').fadeIn();
    });
});