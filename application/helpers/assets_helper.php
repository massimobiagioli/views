<?php

function assets_base_url() {
    return base_url() . 'assets';
}

function assets_js_url() {
    return assets_base_url() . '/js';
}

function assets_css_url() {
    return assets_base_url() . '/css';
}

function assets_img_url() {
    return assets_base_url() . '/img';
}

function assets_vendor_jquery_url() {
    return assets_base_url() . '/vendor/bower_components/jquery/dist/jquery.min.js';
}

function assets_vendor_xtagcore_url() {
    return assets_base_url() . '/vendor/bower_components/x-tag-core/dist/x-tag-core.js';
}