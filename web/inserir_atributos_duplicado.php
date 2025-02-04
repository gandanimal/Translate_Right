<html>
    <body>
        <h3>Inserir atributos do duplicado a registar</h3>
        <form action="inserir_duplicado.php" method="post">
            <p><input type="hidden" name="item1" value="<?=$_REQUEST['item1']?>"/></p>
            <p>Item 1: <input type="text" name="item1"/></p>
            <p><input type="hidden" name="item2" value="<?=$_REQUEST['item2']?>"/></p>
            <p>Item 2: <input type="text" name="item2"/></p>
            <p><input type="submit" value="Submit"/></p>
        </form>
        <a href="incidencia_duplicado.html">Get Back</a>
    </body>
</html>