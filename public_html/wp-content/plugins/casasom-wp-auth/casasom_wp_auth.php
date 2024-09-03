<?php
/**
 * Plugin Name: Casasom WP Auth
 * Description: Plugin para autenticação de usuários com API externa e armazenamento de token no localStorage.
 * Version: 1.0
 * Author: Seu Nome
 * License: GPL2
 */

function casasom_wp_auth_enqueue_scripts() {
    // Verifica se estamos na URL específica de login
    if (is_page('Login')) { // Verifica se a página atual é a página com o slug 'Login'
        wp_enqueue_script('casasom_wp_auth_js', plugins_url('casasom_wp_auth.js', __FILE__), array(), null, true);
    }
}
add_action('wp_enqueue_scripts', 'casasom_wp_auth_enqueue_scripts');
