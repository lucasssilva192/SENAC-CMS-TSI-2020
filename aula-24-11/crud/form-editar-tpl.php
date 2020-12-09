<div class="wrap">
    <h1>Editar Contato</h1>

    <br><br>

    <form method="post">
        <table border="1" width="50%">
            <tr>
                <td>Nome</td>
                <td>Whatsapp</td>
                <td></td>
            </tr>

            <tr>
                <td><input type="text" name="nome" value="<?php echo $contato[0]->nome; ?>"></td>
                <td><input type="text" name="whatsapp" value="<?php echo $contato[0]->whatsapp; ?>"></td>
                <td>
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <input type="hidden" name="alterar" value="1">
                    <?php submit_button('Alterar'); ?>
                </td>
            </tr>
        </table>
    </form>
</div>