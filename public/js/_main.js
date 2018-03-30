(function() {
    "use strict";
    if (typeof NEWLIFE_CHURCH_STORAGE === 'undefined') window.NEWLIFE_CHURCH_STORAGE = {};
    if (NEWLIFE_CHURCH_STORAGE['theme_font'] == '') NEWLIFE_CHURCH_STORAGE['theme_font'] = 'Raleway';
    NEWLIFE_CHURCH_STORAGE['theme_skin_color'] = '#212121';
    NEWLIFE_CHURCH_STORAGE['theme_skin_bg_color'] = '#FFFFFF';

    NEWLIFE_CHURCH_STORAGE["strings"] = {
        name_empty: "El nombre no puede estar vacío",
        name_long: "El nombre es muy largo",
        email_empty: "Correo electrónico muy corto o vacío",
        email_long: "Correo electrónico muy largo",
        email_not_valid: "Correo electrónico inválido",
        subject_empty: "El asunto no puede estar vacío",
        subject_long: "El asunto es muy largo",
        text_empty: "El mensaje no puede estar vacío",
        text_long: "El mensaje es muy largo",
        send_complete: "¡Enviaste tu mensaje!",
        send_error: "Envío fallido",
        login_empty: "El usuario no puede estar vacío",
        login_long: "El usuario es muy largo",
        login_success: "Login completado",
        login_failed: "Login fallido",
        password_empty: "La contraseña es muy corta o está vacía",
        password_long: "La contraseña es muy larga",
        password_not_equal: "Las contraseñas no son iguales"
    };

    NEWLIFE_CHURCH_STORAGE['ajax_url'] = '#';
    NEWLIFE_CHURCH_STORAGE['ajax_nonce'] = '9272c5ff71';
    NEWLIFE_CHURCH_STORAGE['site_url'] = '#';
    NEWLIFE_CHURCH_STORAGE['vc_edit_mode'] = false;
    NEWLIFE_CHURCH_STORAGE['theme_font'] = 'Raleway';
    NEWLIFE_CHURCH_STORAGE['theme_skin'] = 'default';
    NEWLIFE_CHURCH_STORAGE['theme_skin_color'] = '#212121';
    NEWLIFE_CHURCH_STORAGE['theme_skin_bg_color'] = '#FFFFFF';
    NEWLIFE_CHURCH_STORAGE['slider_height'] = 100;
    NEWLIFE_CHURCH_STORAGE['system_message'] = {
        message: '',
        status: '',
        header: ''
    };
    NEWLIFE_CHURCH_STORAGE['user_logged_in'] = false;
    NEWLIFE_CHURCH_STORAGE['toc_menu'] = 'float';
    NEWLIFE_CHURCH_STORAGE['toc_menu_home'] = true;
    NEWLIFE_CHURCH_STORAGE['toc_menu_top'] = true;
    NEWLIFE_CHURCH_STORAGE['menu_fixed'] = true;
    NEWLIFE_CHURCH_STORAGE['menu_mobile'] = 1024;
    NEWLIFE_CHURCH_STORAGE['menu_slider'] = false;
    NEWLIFE_CHURCH_STORAGE['menu_cache'] = false;
    NEWLIFE_CHURCH_STORAGE['demo_time'] = 0;
    NEWLIFE_CHURCH_STORAGE['media_elements_enabled'] = true;
    NEWLIFE_CHURCH_STORAGE['ajax_search_min_length'] = 3;
    NEWLIFE_CHURCH_STORAGE['ajax_search_delay'] = 200;
    NEWLIFE_CHURCH_STORAGE['css_animation'] = true;
    NEWLIFE_CHURCH_STORAGE['menu_animation_in'] = 'fadeIn';
    NEWLIFE_CHURCH_STORAGE['menu_animation_out'] = 'fadeOutDown';
    NEWLIFE_CHURCH_STORAGE['popup_engine'] = 'magnific';
    NEWLIFE_CHURCH_STORAGE['email_mask'] = '^([a-zA-Z0-9_\-]+\.)*[a-zA-Z0-9_\-]+@[a-z0-9_\-]+(\.[a-z0-9_\-]+)*\.[a-z]{2,6}$';
    NEWLIFE_CHURCH_STORAGE['contacts_maxlength'] = 1000;
    NEWLIFE_CHURCH_STORAGE['comments_maxlength'] = 1000;
    NEWLIFE_CHURCH_STORAGE['remember_visitors_settings'] = false;
    NEWLIFE_CHURCH_STORAGE['admin_mode'] = false;
    NEWLIFE_CHURCH_STORAGE['isotope_resize_delta'] = 0.3;
    NEWLIFE_CHURCH_STORAGE['error_message_box'] = null;
    NEWLIFE_CHURCH_STORAGE['viewmore_busy'] = false;
    NEWLIFE_CHURCH_STORAGE['video_resize_inited'] = false;
    NEWLIFE_CHURCH_STORAGE['top_panel_height'] = 0;

    var wc_cart_fragments_params = {
        "ajax_url": "#",
        "wc_ajax_url": "#",
        "fragment_name": "wc_fragments"
    };

    var woocommerce_price_slider_params = {
        "currency_symbol": "\u00a3",
        "currency_pos": "left",
        "min_price": "",
        "max_price": ""
    };

    var wc_single_product_params = {
        "i18n_required_rating_text": "Please select a rating",
        "review_rating_required": "yes"
    };

    var tribe_bootstrap_datepicker_strings = {
        "dates": {
            "days": ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"],
            "daysShort": ["Dom", "Lun", "Mar", "Mie", "Jue", "Vie", "Sab", "Dom"],
            "daysMin": ["D", "L", "M", "M", "J", "V", "S", "D"],
            "months": ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
            "monthsShort": ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"],
            "clear": "Limpiar",
            "today": "Hoy"
        }
    };

    var tribe_js_config = {
        "permalink_settings": "\/%postname%\/",
        "events_post_type": "tribe_events",
        "events_base": "#"
    };

    jQuery(document).ready(function (jQuery) {
        jQuery.datepicker.setDefaults({
            "closeText": "Close",
            "currentText": "Today",
            "monthNames": ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
            "monthNamesShort": ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"],
            "nextText": "Próximo",
            "prevText": "Anterior",
            "dayNames": ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"],
            "dayNamesShort": ["Dom", "Lun", "Mar", "Mie", "Jue", "Vie", "Sab", "Dom"],
            "dayNamesMin": ["D", "L", "M", "M", "J", "V", "S", "D"],
            "dateFormat": "DD, MM d, yy",
            "firstDay": 1,
            "isRTL": false
        });
    });

    var wc_country_select_params = {
        "i18n_select_state_text": "Select an option\u2026",
        "i18n_matches_1": "One result is available, press enter to select it.",
        "i18n_matches_n": "%qty% results are available, use up and down arrow keys to navigate.",
        "i18n_no_matches": "No matches found",
        "i18n_ajax_error": "Loading failed",
        "i18n_input_too_short_1": "Please enter 1 or more characters",
        "i18n_input_too_short_n": "Please enter %qty% or more characters",
        "i18n_input_too_long_1": "Please delete 1 character",
        "i18n_input_too_long_n": "Please delete %qty% characters",
        "i18n_selection_too_long_1": "You can only select 1 item",
        "i18n_selection_too_long_n": "You can only select %qty% items",
        "i18n_load_more": "Loading more results\u2026",
        "i18n_searching": "Searching\u2026"
    };
})();

    my_timeline_front_ajax_nonce = "46f182de5b";
    my_timeline_front_ajax_url = "#";

