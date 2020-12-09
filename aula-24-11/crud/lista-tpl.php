<div class="wrap">
    <h1>Meu CRUD</h1>

    <br><br>

    <form method="post">
        <?php 
            if(isset($msg_alterar))
            {
                echo "<font color='green'> $msg_alterar </font>";
            }
            else
            {
                echo "<font color='red'> $erro_alterar </font>";
            }
        ?>
        <br><br>
        <table border="1" width="50%">
            <tr>
                <td>Nome</td>
                <td>Whatsapp</td>
                <td></td>
                <td></td>
            </tr>

            <?php
                foreach($contatos as $key => $value)
                {
                    echo "  <tr>
                                <td>{$value->nome}</td>
                                <td>{$value->whatsapp}</td>
                                <td><a href='?page={$_GET['page']}&apagar={$value->id}'>Apagar</a></td>
                                <td><a href='?page={$_GET['page']}&editar={$value->id}'>Editar</a></td>
                            </tr>";
                }
            ?>

            <tr>
                <td><input type="text" name="nome"></td>
                <td><input type="text" name="whatsapp"></td>
                <td><?php submit_button('Salvar'); ?></td>
                <td></td>
            </tr>
        </table>
    </form>
</div>