<html>
    <body>
        <h3>Inserir atributos do item a inserir</h3>
        <form action="inserir_item.php" method="post">
            <p><input type="hidden" name="descricao" value="<?=$_REQUEST['descricao']?>"/></p>
            <p>Descricao: <input type="text" name="descricao"/></p>
            <p><input type="hidden" name="localizacao" value="<?=$_REQUEST['localizacao']?>"/></p>
            <p>Localizacao: <input type="text" name="localizacao"/></p>
            <p><input type="hidden" name="latitude" value="<?=$_REQUEST['latitude']?>"/></p>
            <p>Latitude: <input type="text" name="latitude"/></p>
            <p><input type="hidden" name="longitude" value="<?=$_REQUEST['longitude']?>"/></p>
            <p>Longitude: <input type="text" name="longitude"/></p>
            <p><input type="submit" value="Submit"/></p>
        </form>
        <a href="locais_itens_anomalias.html">Get Back</a>
    </body>
</html>