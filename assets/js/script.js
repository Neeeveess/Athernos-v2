jQuery(document).ready(function ($) {
    $(".input2").each(function () {
        $(this).on("blur", function () {
            if ($(this).val().trim() != "") {
                $(this).addClass("has-val");
            } else {
                $(this).removeClass("has-val");
            }
        });
    });

    const menuHamburguer = $("#menu-hamburguer");
    const menuLateral = $("#menu-lateral");
    menuHamburguer.on("click", () => {
        if (menuLateral.hasClass("close")) {
            //Abrir menu
            menuLateral.removeClass("close");
            menuLateral.addClass("show");
        } else {
            //Fechar menu
            menuLateral.removeClass("show");
            menuLateral.addClass("close");
        }
    });
});
