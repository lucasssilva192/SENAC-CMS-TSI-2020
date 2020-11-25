<?php
    /*
    * Plugin Name: CRUD na tela de configuração
    * Plugin URI: https://www.google.com.br
    * Description: Este plugin mostra um CRUD na tela de configurações
    * Version: 0.0.1
    * Author: Lucas Santos
    * Author URI: https://github.com/luccasssilva192
    * License: CC BY
    */

    //Protege o código de ser chamado diretamente
    if(!defined('WPINC')) exit;

    register_activation_hook(__FILE__, 'criar_tabela');

    function criar_tabela()
    {
        global $wpdb;

        $wpdb->query("CREATE TABLE {$wpdb->prefix}agenda
                        (id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
                         nome VARCHAR(255) NOT NULL,
                         whatsapp BIGINT UNSIGNED NOT NULL)");
    }