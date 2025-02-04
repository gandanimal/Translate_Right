<html>
    <body>
    <h3>Duplicado registado</h3>
<?php
    $item1 = $_REQUEST['item1'];
    $item2 = $_REQUEST['item2'];
	try
    {
    	$host = "db.ist.utl.pt";
    	$user = "ist425884";
    	$password = "password123";
    	$dbname = $user;

    	$db = new PDO("pgsql:host=$host;dbname=$dbname", $user, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    	$sql = "INSERT INTO duplicado(item1, item2) VALUES('$item1', '$item2');";

        $result = $db->prepare($sql);
        $result->execute();
    }
    catch (PDOException $e)
    {
        echo("<p>ERROR: {$e->getMessage()}</p>");
    }
?>
<a href="inserir_atributos_duplicado.php">Get Back</a>
    </body>
</html>