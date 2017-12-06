<?php
/*
Plugin Name: Gravity Forms Auditor
Plugin URI: http://uwosh.edu/
Description: Upon request, this plugin returns a report of the configuration of all Gravity Forms on a multisite.
Author: Joseph Kerkhof
Author URI: https://twitter.com/musicaljoeker
Version: 0.1
Network: True
*/

function gf_auditor_menu() {
    add_menu_page( 'Form Auditor', 'Form Auditor', 'administrator', 'gravity-forms-auditor', 'gf_auditor', 'dashicons-clipboard' );
}

add_action( 'network_admin_menu', 'gf_auditor_menu' );

function gf_auditor() {
    ?>
    <h1>Gravity Forms Auditor</h1>
    <?php
    submit_button( 'Run Report' );
}