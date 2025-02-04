<html>
    <body>
        <h3>Inserir chave do item a remover</h3>
        <form action="remover_item.php" method="post">
            <p><input type="hidden" name="id" value="<?=$_REQUEST['id']?>"/></p>
            <p>Id: <input type="text" name="id"/></p>
            <p><input type="submit" value="Submit"/></p>
        </form>
        <a href="locais_itens_anomalias.html">Get Back</a>
    </body>
</html>