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

    $("#menu-hamburguer").on("click", () => {
        if ($("#menu-lateral").hasClass("close")) {
            setTimeout(() => {
                $(".conteudo-esquerdo").show("slow"); //MOSTRAR CONTEUDO
                $("#menu-lateral").css({
                    justifyContent: "flex-end",
                });
            }, 300);

            $("#menu-lateral").removeClass("close");
            $("#menu-lateral").addClass("show");
        } else {
            $(".conteudo-esquerdo").hide(1000); //OCULTAR CONTEUDO
            $("#menu-lateral").removeClass("show");
            $("#menu-lateral").addClass("close");

            setTimeout(() => {
                $("#menu-lateral").css({
                    justifyContent: "center",
                });
            }, 300);
        }
    });
});
