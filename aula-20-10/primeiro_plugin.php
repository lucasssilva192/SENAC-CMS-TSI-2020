<?php
    /*
     * Plugin Name: Meu 1º Plugin em PHP para Wordpress :)
     * Plugin URI: https://www.google.com.br
     * Description: Envia aviso diferenciado de erro de credenciais
     * Version: 0.0.1
     * Author: Lucas Santos Silva
     * Author URI: https://github.com/lucasssilva192
     * License: CC BY
     */

     //gancho de filtro altera funcionalidade prévia
     //gancho de ação add uma nova funcionalidade

     //add_filter('login_errors', 'altera_msg_login');

     function altera_msg_login()
     {
         return 'Credênciais Inválidas.';
     }