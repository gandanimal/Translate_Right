<html>
    <body>
        <h3>Inserir dois locais</h3>
        <form action="listar_anomalias.php" method="post">
            <p><input type="hidden" name="local_1" value="<?=$_REQUEST['local_1']?>"/></p>
            <p>Local 1: <input type="text" name="local_1"/></p>
            <p><input type="hidden" name="local_2" value="<?=$_REQUEST['local_2']?>"/></p>
            <p>Local 2: <input type="text" name="local_2"/></p>
            <p><input type="submit" value="Submit"/></p>
        </form>
        <a href="BD.html">Get Back</a>
    </body>
</html>