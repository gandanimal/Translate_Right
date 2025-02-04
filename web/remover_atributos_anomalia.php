<html>
    <body>
        <h3>Inserir chave da anomalia a remover</h3>
        <form action="remover_anomalia.php" method="post">
            <p><input type="hidden" name="id" value="<?=$_REQUEST['id']?>"/></p>
            <p>Id: <input type="text" name="id"/></p>
            <p><input type="submit" value="Submit"/></p>
        </form>
        <a href="tipo_anomalia_remover.html">Get Back</a>
    </body>
</html>