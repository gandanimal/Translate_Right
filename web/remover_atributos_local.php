<html>
    <body>
        <h3>Inserir chave do local a remover</h3>
        <form action="remover_local.php" method="post">
            <p><input type="hidden" name="latitude" value="<?=$_REQUEST['latitude']?>"/></p>
            <p>Latitude: <input type="text" name="latitude"/></p>
            <p><input type="hidden" name="longitude" value="<?=$_REQUEST['longitude']?>"/></p>
            <p>Longitude: <input type="text" name="longitude"/></p>
            <p><input type="submit" value="Submit"/></p>
        </form>
        <a href="locais_itens_anomalias.html">Get Back</a>
    </body>
</html>