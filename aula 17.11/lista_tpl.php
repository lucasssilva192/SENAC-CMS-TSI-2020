<div class="wrap">
    <h1>CRUD</h1>
    <form method="post">
        <table border="1" width="50%">
            <tr>
                <td>Nome</td>
                <td>Whatsapp</td>
                <td></td>
            </tr>
            <?php
                foreach($contatos as $key => $value)
                {
                    echo "  <tr>
                                <td>{$value->nome}</td>
                                <td>{$value->whatsapp}</td>
                                <td><a href='?page={$_GET['page']}&apagar={$value->id}'>Apagar</a></td>
                            </tr>";
                }
            ?>
            <tr>
                <td><input type="text" name="nome"></td>
                <td><input type="text" name="whatsapp"></td>
                <td><?php submit_button('Salvar'); ?></td>
            </tr>
        </table>
    </form>
</div>