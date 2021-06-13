// Paralax 
$(window).scroll(function () {
    var scroll = $(this).scrollTop();

    // Jumbotron
    $('.jumbotron .divider').css({
        'transform': 'translate(0, ' + scroll / 7 + '%)'
    });

    $('.jumbotron h1').css({
        'transform': 'translate(0, ' + scroll / 6.8 + '%)'
    });

    $('.jumbotron p').css({
        'transform': 'translate(0, ' + scroll / 6.8 + '%)'
    });

    $('.jumbotron .order, a#button-h').css({
        'transform': 'translate(0, ' + scroll / 6.8 + '%)'
    });

    // tentang
    $('.paragraf').addClass('tView');
    $('aside.img_tentang').addClass('img_tentangView');

    // Mobil
    if (scroll > $('.mobil').offset().top - 220) {
        $('.mobil .thumbnail-img').each(function (i) {
            setTimeout(function () {
                $('.mobil .thumbnail-img').eq(i).addClass('mView');
            }, 450 * (i + 1));
        });
    }
});