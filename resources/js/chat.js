$(function() {

    /**
     *
     *  VARIABLES
     * 
     */

    let windowWidth = window.innerWidth;

    /**
     *
     *  WHEN SELECT CONV ITEM
     * 
     */

    if (windowWidth < 992) {
        $(".item_conv").click(function() {
            $("#chat").css("left", 0);
        });

        if ($(".btn_back")) {
            $(".btn_back").click(function() {
                $("#chat").css("left", "-100%");
            });
        }
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
     *  CHAT BAR
     * 
     */

    if ($("#chat_bar") && $("#send_msg_btn")) {
        $("#chat_bar").keydown(function(event) {
            if (event.keyCode == 13) {
                $("#chat_bar").val("");
            }
        });
        $("#send_msg_btn").click(function() {
            $("#chat_bar").val("");
        });
    }
});