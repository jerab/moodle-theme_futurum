<?php

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {

    // Tagline setting
    $name = 'theme_futurum/tagline';
    $title = get_string('tagline','theme_futurum');
    $description = get_string('taglinedesc', 'theme_futurum');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Custom CSS file
    $name = 'theme_futurum/customcss';
    $title = get_string('customcss','theme_futurum');
    $description = get_string('customcssdesc', 'theme_futurum');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

}
