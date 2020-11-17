<?php
    /*
    * Plugin Name: Plugin com Menu
    * Plugin URI: https://www.google.com.br
    * Description: Este plugin mostra como trabalhar com menu do admin em wordpress
    * Version: 0.0.1
    * Author: Lucas Santos Silva
    * Author URI: https://github.com/lucasssilva192
    * License: CC BY
    */

    add_action('admin_init', 'set_configs');

    function set_configs()
    {
        register_setting('configs-exemplo', 'api-token');
        register_setting('configs-exemplo', 'api-url');
    }

    add_action('admin_menu', 'menu_do_plugin');

    function menu_do_plugin()
    {
        //Exemplo para criar item no primeiro nivel do menu
        add_menu_page(  'Configurações do meu Plugin', 
                        'Meu Plugin', 
                        'administrator', 
                        'meu-plugin-config',
                        'abre_config',
                        'dashicons-admin-generic');
        
        //Exemplo para criar item no segundo nivel do menu
        add_submenu_page(   'options-general.php',
                            'Configurações do meu Plugin',
                            'Meu Plugin',
                            'administrator',
                            'meu-plugin-config',
                            'abre_config');
    }

    function abre_config()
    {
        require 'plugin-com-menu-tpl.php';
    }