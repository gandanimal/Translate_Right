<html>
    <body>
    <h3>Incidencia registada</h3>
<?php
    $anomalia_id = $_REQUEST['anomalia_id'];
    $item_id = $_REQUEST['item_id'];
    $email = $_REQUEST['email'];
	try
    {
    	$host = "db.ist.utl.pt";
    	$user = "ist425884";
    	$password = "password123";
    	$dbname = $user;

    	$db = new PDO("pgsql:host=$host;dbname=$dbname", $user, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    	$sql = "INSERT INTO incidencia(anomalia_id, item_id, email) VALUES('$anomalia_id', '$item_id', '$email');";

        $result = $db->prepare($sql);
        $result->execute();
    }
    catch (PDOException $e)
    {
        echo("<p>ERROR: {$e->getMessage()}</p>");
    }
?>
<a href="inserir_atributos_incidencia.php">Get Back</a>
    </body>
</html>