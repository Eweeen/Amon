$(function() {


    //Lors de la soumission du formulaire (click sur le bouton), le js vérifi si tout les champs sont remplie et envoi une requête ajax
    $("form > button").click(function(event) {
        // event.preventDefault();

        // console.log(getParameterByName("form"));
    });

    $(".input_password > .bx").click(function() {
        $(this).toggleClass('bx-lock-alt').toggleClass('bx-lock-open-alt');

        if ($(this).prev().attr('type') == "password") {
            $(this).prev().attr('type', 'text');
        } else {
            $(this).prev().attr('type', 'password');
        }

    });

    $("#password").keyup(function() {
        let score = 0;
        let mdp = $(this).val();

        // Vérification du mot de passe
        if (mdp.length >= 8) {
            score += 2;
        }
        if (/(?=.{0,}[0-9])/.test(mdp)) {
            score += 1;
        }
        if (/(?=.{0,}[a-z])/.test($("#password").val())) {
            score += 1;
        }
        if (/(?=.{0,}[A-Z])/.test($("#password").val())) {
            score += 1;
        }
        if (/(?=.{0,}\W)/.test($("#password").val())) {
            score += 1;
        }

        // En fonction du score, les classes s'ajoute dans la barre
        if (score >= 2) {
            $(".critere_bar > span:nth-of-type(1)").addClass("good");
        } else {
            $(".critere_bar > span:nth-of-type(1)").removeClass("good");
        }
        if (score >= 4) {
            $(".critere_bar > span:nth-of-type(2)").addClass("good");
        } else {
            $(".critere_bar > span:nth-of-type(2)").removeClass("good");
        }
        if (score >= 6) {
            $(".critere_bar > span:nth-of-type(3)").addClass("good");
        } else {
            $(".critere_bar > span:nth-of-type(3)").removeClass("good");
        }
    });

});