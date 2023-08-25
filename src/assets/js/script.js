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

    //MENU LATERAL
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

    //Notificação de Mensagem
    const divMessage = $(".div-alert");
    let msg = "Teste";

    function showMessage(msg, type = "success") {
        const message = $("<div>", {
            class: "message-" + type,
        })
            .text(msg)
            .appendTo(divMessage);
        setTimeout(() => {
            message.hide("fast");
        }, 3000);
    }

    menuHamburguer.on("click", () => {
        showMessage(msg, "success");
    });
});
