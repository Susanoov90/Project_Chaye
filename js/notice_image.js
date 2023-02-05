$(document).ready(function() {
    $('.id0').popover({
        placement: 'top',
        trigger: 'hover',
        html: true,
        content: 'VEUILLEZ ENTRER VOTRE CATEGORIE DE COLIS. (exemple : catégorie "stylo" pour un colis qui sera un stylo bleu)'
    });

    $('.id1').popover({
        placement: 'top',
        trigger: 'hover',
        html: true,
        content: 'VOTRE COLIS NE DOIT PAS EXCÉDER 20 KILO'
    });

    $('.id2').popover({
        placement: 'top',
        trigger: 'hover',
        html: true,
        content: '<div class="media"><img src="images/largeur.png" witdh="220" height="220" class="mr-3" alt="Sample Image"></div>'
    });

    $('.id3').popover({
        placement: 'top',
        trigger: 'hover',
        html: true,
        content: '<div class="media"><img src="images/longueur.png" witdh="220" height="220" class="mr-3" alt="Sample Image"></div>'
    });

    $('.id4').popover({
        placement: 'top',
        trigger: 'hover',
        html: true,
        content: '<div class="media"><img src="images/largeur.png" witdh="220" height="220" class="mr-3" alt="Sample Image"></div>'
    });

    $('.id5').popover({
        placement: 'top',
        trigger: 'hover',
        html: true,
        content: '<div class="media"><img src="images/profondeur.png" witdh="220" height="220" class="mr-3" alt="Sample Image"></div>'
    });

    $('.id6').popover({
        placement: 'top',
        trigger: 'hover',
        html: true,
        content: 'VOTRE IMAGE DOIT ETRE VISIBLE'
    });
})