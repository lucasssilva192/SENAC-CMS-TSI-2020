<?php
    /*
    * Plugin Name: CRUD na tela de configuração
    * Plugin URI: https://www.google.com.br
    * Description: Plugin que mostra um CRUD na tela de config
    * Version: 0.0.1
    * Author: Lucas Santos Silva
    * Author URI: https://github.com/lucasssilva192
    * License: CC BY
    */

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
    register_deactivation_hook(__FILE__, 'apagar_tabela');
    function apagar_tabela()
    {
        global $wpdb;

        $wpdb->query("DROP TABLE {$wpdb->prefix}agenda");
    }
    add_action('admin_menu', 'crud_do_plugin');
    function crud_do_plugin()
    {
        add_menu_page(  'Configurações do meu Plugin', 
                        'Meu Crud', 
                        'administrator', 
                        'meu-plugin-config',
                        'abre_config',
                        'dashicons-database');
    }
    function abre_config()
    {
        global $wpdb;
        if(isset($_GET['apagar']))
        {
            $id = preg_replace('/\D/', '', $_GET['apagar']);

            $wpdb->query("DELETE FROM {$wpdb->prefix}agenda WHERE id = $id");
        }
        if(isset($_POST['submit']))
        {
            if($_POST['submit'] == 'Salvar')
            {
                $wpdb->query($wpdb->prepare("INSERT INTO 
                                                {$wpdb->prefix}agenda (nome, whatsapp) 
                                             VALUES 
                                                (%s, %d)", $_POST['nome'], $_POST['whatsapp']));
            }
        }
        $contatos = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}agenda");
        require 'lista_tpl.php';
    }