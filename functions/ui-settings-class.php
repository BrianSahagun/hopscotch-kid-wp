<?php
// UI Settings Class
// Contains Theme Class and Template Class

// Templates
function hopscotch_ui_settings_templates_html_class() {        

    // Features (Built-In)
    echo ' hs-feature__masthead--celery';
    echo ' hs-feature__primary-nav-masthead-sidebar--hamburger';
    echo ' hs-feature__primary-nav--vines';
    echo ' hs-feature__search--poppy-seeds';
    echo ' hs-feature__breadcrumb-navigation--breadings';

    // Modifications (Optional)
    echo ' hs-mod__search--blank-fill';
    echo ' hs-mod__content--superhero';
    echo ' hs-mod__tag--string-beans';
    echo ' hs-mod__show-top--mushroom';
    echo ' hs-mod__timestamp--old-china-shop';
    echo ' hs-mod__author--bloop';
    echo ' hs-mod__comments--trollolo';
    echo ' hs-mod__show-content--peeler';
    echo ' hs-mod__actions--shoeboxed';
}
add_action( 'hopscotch_html_class', 'hopscotch_ui_settings_templates_html_class');

// Theme
function hopscotch_ui_settings_themes_html_class() {
    echo ' hs-theme--hopscotch';
    echo ' hs-theme--hopscotch-kid';
}
add_action( 'hopscotch_html_class', 'hopscotch_ui_settings_themes_html_class');