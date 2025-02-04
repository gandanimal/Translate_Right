<html>
    <body>
        <h3>Inserir atributos da incidencia a registar</h3>
        <form action="inserir_incidencia.php" method="post">
            <p><input type="hidden" name="anomalia_id" value="<?=$_REQUEST['anomalia_id']?>"/></p>
            <p>Id da anomalia: <input type="text" name="anomalia_id"/></p>
            <p><input type="hidden" name="item_id" value="<?=$_REQUEST['item_id']?>"/></p>
            <p>Id do item: <input type="text" name="item_id"/></p>
            <p><input type="hidden" name="email" value="<?=$_REQUEST['email']?>"/></p>
            <p>E-mail: <input type="text" name="email"/></p>
            <p><input type="submit" value="Submit"/></p>
        </form>
        <a href="incidencia_duplicado.html">Get Back</a>
    </body>
</html>