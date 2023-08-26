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
    const svgEsquerda = $(".svg-esquerda");
    const svgDireita = $(".svg-direita");
    svgDireita.hide();
    console.log(svgDireita);

    menuHamburguer.on("click", () => {
        if (menuLateral.hasClass("close")) {
            //Abrir menu
            menuLateral.removeClass("close").addClass("show");
            svgDireita.hide();
            svgEsquerda.show();
        } else {
            //Fechar menu
            menuLateral.removeClass("show").addClass("close");

            svgDireita.show();
            svgEsquerda.hide();
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
