$(function() {

    /**
     *
     *  VARIABLES
     * 
     */

    let windowWidth = window.innerWidth;
    let url = "../app/ajax/get-chat.php";
    let searchParam = new URLSearchParams(window.location.search);
    let dataConv;


    $(".conv_last_msg").each(function() {
        let str = $(this).text();

        if (str.length < 35) {
            $(this).html(str.substring(0, 35));
        } else {
            $(this).html(str.substring(0, 35) + "...");
        }

    });


    /**
     *
     *  SHOW MODALS WITH 3 DOT BTN
     * 
     */

    $(".btn_dot").click(function() {
        $(this).next().css({
            "opacity": "1",
            "visibility": "visible"
        });
        $(document).on("click", function(event) {
            if (!$(event.target).closest(".modal_container").length) {
                $(".btn_dot").next().css({
                    "opacity": "0",
                    "visibility": "hidden"
                });
            }
        });
    });

    /**
     *
     *  WHEN SELECT CONV ITEM, LAUNCH AJAX REQUEST, ADD CLASS TO SHOW ACTIVE CONVERSATION
     * 
     */

    if (windowWidth < 992) {
        $(".item_conv").click(function() {
            $("#chat").css("left", 0);
        })

        if ($(".btn_back")) {
            $(".btn_back").click(function() {
                $("#chat").css("left", "-100%");
            })
        }
    } else {
        $(".item_conv").first().addClass("actif_conv");

        $(".item_conv").click(function() {
            if (!$(this).hasClass("actif_conv")) {
                $(".item_conv").each(function() {
                    $(".item_conv").removeClass("actif_conv");
                    // REQUEST AJAX
                });
                $(this).addClass("actif_conv");
            }
        });
    }

    $(".item_conv").each(function() {
        $(this).click(function() {
            dataConv = $(this).attr("data-conv");
            let data = {
                "data_conv": dataConv
            };
            // setAjax(url, data);
        })
    });





});

/**
 *  CHAT BAR
 */

// Si l'on appuie sur le bouton enoyer ou que l'on appuie sur entrer lorsque nous sommes dans l'input, le message s'envoi dans la conversation
if ($("#chat_bar") && $("#send_msg_btn")) {
    $("#chat_bar").keydown(function(event) {
        if (event.keyCode == 13) {
            //lancer une requete ajax pour récuperer le contenue de l'input et l'afficher dans la conversation
            let data = {
                    "data_conv": dataConv,
                    "msg": $(this).val()
                }
                // setAjax(url, data);

            $(this).val("");
        }
    });
    $("#send_msg_btn").click(function() {
        //lancer une requete ajax pour récuperer le contenue de l'input et l'afficher dans la conversation
        let data = {
                "data_conv": dataConv,
                "msg": $(this).val()
            }
            // setAjax(url, data);

        $("#chat_bar").val("");
    });
} else {
    console.log("suce");
}

/**
 *  FUNCTION SET AJAX
 */

function chatAjax(data) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: "POST",
        url: 'requestPraticien',
        data: {
            praticien_id: $(this).attr("data-id")
        },
        success: function(data) {
            $('.profil_praticien_container').html(data);
        },
        error: function(data) {
            console.log(data);
        }
    });
}


// setInterval(() => {
//     let data = {
//         "data_conv": dataConv
//     }
//     setAjax(url, data);
// }, 2000);


// setInterval(() => {
//     $("#chat").load("../public/ajax/get-chat.php");
// }, 500)