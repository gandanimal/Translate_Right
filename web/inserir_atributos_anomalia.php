<html>
    <body>
        <h3>Inserir atributos da anomalia a inserir</h3>
        <form action="inserir_anomalia.php" method="post">
            <p><input type="hidden" name="zona" value="<?=$_REQUEST['zona']?>"/></p>
            <p>Zona: <input type="text" name="zona"/></p>
            <p><input type="hidden" name="imagem" value="<?=$_REQUEST['imagem']?>"/></p>
            <p>Imagem: <input type="text" name="imagem"/></p>
            <p><input type="hidden" name="lingua" value="<?=$_REQUEST['lingua']?>"/></p>
            <p>Lingua: <input type="text" name="lingua"/></p>
            <p><input type="hidden" name="ts" value="<?=$_REQUEST['ts']?>"/></p>
            <p>Timestamp: <input type="text" name="ts"/></p>
            <p><input type="hidden" name="descricao" value="<?=$_REQUEST['descricao']?>"/></p>
            <p>Descricao: <input type="text" name="descricao"/></p>
            <p><input type="submit" value="Submit"/></p>
        </form>
        <a href="tipo_anomalia.html">Get Back</a>
    </body>
</html>