<html>
    <body>
    <h3>Anomalia removida</h3>
<?php
    $id = $_REQUEST['id'];
	try
    {
    	$host = "db.ist.utl.pt";
    	$user = "ist425884";
    	$password = "password123";
    	$dbname = $user;

    	$db = new PDO("pgsql:host=$host;dbname=$dbname", $user, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    	$sql = "DELETE FROM anomalia_traducao where id = '$id';";

        $result = $db->prepare($sql);
        $result->execute();

        $sql = "DELETE FROM anomalia where id = '$id';";

        $result = $db->prepare($sql);
        $result->execute();
    }
    catch (PDOException $e)
    {
        echo("<p>ERROR: {$e->getMessage()}</p>");
    }
?>
<a href="remover_atributos_anomalia_traducao.php">Get Back</a>
    </body>
</html>