<html>
    <body>
    <h3>Item inserido</h3>
<?php
    $descricao = $_REQUEST['descricao'];
    $localizacao = $_REQUEST['localizacao'];
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

    	$sql = "INSERT INTO item(descricao, localizacao, latitude, longitude) VALUES('$descricao', '$localizacao', $latitude, $longitude);";

        $result = $db->prepare($sql);
        $result->execute();
    }
    catch (PDOException $e)
    {
        echo("<p>ERROR: {$e->getMessage()}</p>");
    }
?>
<a href="inserir_atributos_item.php">Get Back</a>
    </body>
</html>