<html>
    <body>
    <h3>Local removido</h3>
<?php
    $latitude = $_REQUEST['latitude'];
    $longitude = $_REQUEST['longitude'];
	try
    {
    	$host = "db.ist.utl.pt";
    	$user = "ist425884";
    	$password = "password123";
    	$dbname = $user;

    	$db = new PDO("pgsql:host=$host;dbname=$dbname", $user, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    	$sql = "DELETE FROM local_publico where latitude = $latitude and longitude = $longitude;";

        $result = $db->prepare($sql);
        $result->execute();
    }
    catch (PDOException $e)
    {
        echo("<p>ERROR: {$e->getMessage()}</p>");
    }
?>
<a href="remover_atributos_local.php">Get Back</a>
    </body>
</html>