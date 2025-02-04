<html>
    <body>
    <h3>Local inserido</h3>
<?php
    $latitude = $_REQUEST['latitude'];
    $longitude = $_REQUEST['longitude'];
    $nome = $_REQUEST['nome'];
	try
    {
    	$host = "db.ist.utl.pt";
    	$user = "ist425884";
    	$password = "password123";
    	$dbname = $user;

    	$db = new PDO("pgsql:host=$host;dbname=$dbname", $user, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    	$sql = "INSERT INTO local_publico(latitude, longitude, nome) VALUES($latitude, $longitude, '$nome');";

        $result = $db->prepare($sql);
        $result->execute();
    }
    catch (PDOException $e)
    {
        echo("<p>ERROR: {$e->getMessage()}</p>");
    }
?>
<a href="inserir_atributos_local.php">Get Back</a>
    </body>
</html>