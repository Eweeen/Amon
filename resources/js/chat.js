$(function() {

    /**
     *
     *  VARIABLES
     * 
     */

    let windowWidth = window.innerWidth;

    /**
     *
     *  WHEN SELECT CONV ITEM, LAUNCH AJAX REQUEST, ADD CLASS TO SHOW ACTIVE CONVERSATION
     * 
     */

    if (windowWidth < 992) {
        $(".item_conv").click(function() {
            $("#chat").css("left", 0);
            RequestAjaxShowConversation($(this).attr("data-conv"));
        });

        if ($(".btn_back")) {
            $(".btn_back").click(function() {
                $("#chat").css("left", "-100%");
            });
        }
    } else {
        $(".item_conv").first().addClass("actif_conv");

        $(".item_conv").click(function() {
            if (!$(this).hasClass("actif_conv")) {
                $(".item_conv").each(function() {
                    $(".item_conv").removeClass("actif_conv");
                });
                $(this).addClass("actif_conv");
                RequestAjaxShowConversation($(this).attr("data-conv"));
            }
        });
    }

    /**
     *
     *  SHOW LIST OF NEW CONVERSATION
     * 
     */

    $(".bar_add_conversation").click(function() {
        $(".list_new_conv").toggleClass("active_list_new_conv");
    });


    /**
     *
     *  SHOW MODALS WITH 3 DOT BTN
     * 
     */

    $(".btn_dot").click(function() {
        $(this).next().toggleClass("active_modal");
        // IF CLICK IS OUT OF .modal_settings_chat, THE FUNCTION DESACTIVAT MODAL
        $(".modal_bg").click(function(event) {
            if (!$(event.target).closest(".modal_settings_chat").length) {
                $(this).removeClass("active_modal");
            }
        });
        $(".modal_settings_chat").click(function() {
            $(this).parents().removeClass("active_modal");
        });
    });



    /**
     *
     *  AJAX REQUEST WHEN USER CLICK ON ITEM IN LIST CONVERSATION
     * 
     */


    function RequestAjaxShowConversation(data) {
        console.log(data);

        let dataConv = data;

        if (dataConv == "") {
            // id of chat general
            // dataConv = ;
        }

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "POST",
            url: 'request',
            data: {
                id_conv: dataConv
            },
            success: function(response) {
                $('.profil_praticien_container').html(response);
            },
            error: function(response) {
                console.log(response);
            }
        });
    }

    /**
     *
     *  AJAX REQUEST WHEN USER DELETE CONVERSATION
     * 
     */
    $(".delete_conversation").click(function() {
        console.log($(this).closest(".item_conv").attr("data-conv"));
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "POST",
            url: 'request',
            data: {
                id_conv_delete: $(this).closest(".item_conv").attr("data-conv")
            },
            success: function(response) {
                $('.profil_praticien_container').html(response);
            },
            error: function(response) {
                console.log(response);
            }
        });
    });

    /**
     *
     *  AJAX REQUEST WHEN USER DELETE MESSAGE
     * 
     */

    $(".delete_message").click(function() {
        console.log($(this).closest(".msg_content").children("p").attr("data-id-msg"));
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "POST",
            url: 'request',
            data: {
                id_msg_delete: $(this).closest(".item_conv").attr("data-conv")
            },
            success: function(response) {
                $('.profil_praticien_container').html(response);
            },
            error: function(response) {
                console.log(response);
            }
        });
    });

    /**
     *
     *  AJAX REQUEST WHEN USER SIGNAL MESSAGE
     * 
     */

    $(".signal_message").click(function() {
        console.log($(this).closest(".msg_content").children("p").attr("data-id-msg"));
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "POST",
            url: 'request',
            data: {
                id_msg_signal: $(this).closest(".msg_content").children("p").attr("data-id-msg"),
            },
            success: function(response) {
                $('.profil_praticien_container').html(response);
            },
            error: function(response) {
                console.log(response);
            }
        });
    });


    /**
     *
     *  CHAT BAR / AJAX REQUEST WHEN USER SEND MESSAGE (press enter or click on send button)
     * 
     */

    if ($("#chat_bar") && $("#send_msg_btn")) {
        $("#chat_bar").keydown(function(event) {
            if (event.keyCode == 13) {
                RequestAjaxSendMessage($(this).val());
                $("#chat_bar").val("");
            }
        });
        $("#send_msg_btn").click(function() {
            RequestAjaxSendMessage($("#chat_bar").val());
            $("#chat_bar").val("");
        });


    }

    function RequestAjaxSendMessage(data) {
        console.log(data)
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "POST",
            url: 'request',
            data: {
                id_conv: data
            },
            success: function(response) {
                $('.profil_praticien_container').html(response);
            },
            error: function(response) {
                console.log(response);
            }
        });
    }

    /**
     *
     *  AJAX REQUEST WHEN USER SCROLL TO TOP AND LOAD OLD MESSAGE IN CHAT
     * 
     */


    /**
     *
     *  LOOP TO REFRESH ACTIVE CHAT
     * 
     */

    // setInterval(() => {
    //     let data = {
    //         "data_conv": dataConv
    //     }
    //     setAjax(url, data);
    //     $("#chat").load("../public/ajax/get-chat.php");
    // }, 2000);
});