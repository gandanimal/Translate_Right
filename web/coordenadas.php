<html>
    <body>
        <h3>Inserir latitude e longitude</h3>
        <form action="listar_anomalias_coord.php" method="post">
            <p><input type="hidden" name="latitude" value="<?=$_REQUEST['latitude']?>"/></p>
            <p>Latitude: <input type="text" name="latitude"/></p>
            <p><input type="hidden" name="longitude" value="<?=$_REQUEST['longitude']?>"/></p>
            <p>Longitude: <input type="text" name="longitude"/></p>
            <p><input type="submit" value="Submit"/></p>
        </form>
        <a href="BD.html">Get Back</a>
    </body>
</html>