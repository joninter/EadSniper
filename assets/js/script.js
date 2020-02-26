function marcarAssistido(obj) {
    var id = $(obj).attr('data-id');

    $(obj).remove();

    $.ajax({
        url:'/sniper/ajax/marcar_assistido/'+id,
        type:'GET'
    });}

$(document).ready(function() {
    console.log("document is ready");
    $('[data-toggle="offcanvas"], #navToggle').on("click", function() {
        $(".offcanvas-collapse").toggleClass("open");
    });
});
window.onload = function() {
    console.log("window is loaded");
};
