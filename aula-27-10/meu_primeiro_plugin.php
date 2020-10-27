<?php
/*
  Plugin Name: Meu 1º Plug-in
  Plugin URI: sp.senac.br
  Description: meu primeiro plugin :)
  Version: 0.0.1
  Author: Lucas Santos Silva
  Author URI: https://github.com/lucasssilva192
  License: CC BY
 */

add_filter('login_errors', 'altera_msg_login');

function altera_msg_login(){
    return 'Credênciais inválidas.';
}

add_action('wp_head', 'colocar_og_tags');

function colocar_og_tags(){

    if ( is_single() ){

        $dados_do_post = get_post( get_the_ID() );

        $dados_do_site = get_bloginfo();

        $titulo = $dados_do_post->post_title;

        $resumo = $dados_do_post->post_excerpt;

        echo "\n\n\n
                <meta property='og:title' content='" . $titulo . "'>\n
                <meta property='og:site_name' content='" . $dados_do_site ."'>\n
                <meta property='og:url' content='" . get_permalink() . "'> \n
                <meta property='og:description' content='" . $resumo . "'>\n
            \n\n\n";
    }
}