<div class="wrap">
    <h1>Configurações do Plugin</h1>

    <br><br>

    <form method="post" action="options.php">

        <?php
            settings_fields('configs-exemplo');
            do_settings_sections('configs-exemplo');
        ?>

        <label for="">Token da API</label>
        <input type="text" id="token_da_api" name="token_da_api" value="<?php echo get_option('api-token');?>">
        <br><br>
        <label for="url_da_api">WRL da API</label>
        <input type="text" id="url_da_api" name="url_da_api" value="<?php echo get_option('api-url');?>">
        <br><br>

        <?php
            submit_button();
        ?>
    </form>
</div>