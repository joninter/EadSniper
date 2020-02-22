setInterval(updateArea,100);
function updateArea(){
    var alturaTela = $(window).height();
    var posy = $('.curso_left').offset().top;
    var altura = alturaTela - posy;

    $('.curso_left, .curso_right').css('height',altura+'px');
}