<html>
    <body>
    <h3>Correccao editada</h3>
<?php
    $og_email = $_REQUEST['og_email'];
    $og_nro = $_REQUEST['og_nro'];
    $og_anomalia_id = $_REQUEST['og_anomalia_id'];
    $novo_email = $_REQUEST['novo_email'];
    $novo_nro = $_REQUEST['novo_nro'];
    $novo_anomalia_id = $_REQUEST['novo_anomalia_id'];
	try
    {
    	$host = "db.ist.utl.pt";
    	$user = "ist425884";
    	$password = "password123";
    	$dbname = $user;

    	$db = new PDO("pgsql:host=$host;dbname=$dbname", $user, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "DELETE FROM correcao where email = '$og_email' and nro = '$og_nro' and anomalia_id = '$og_anomalia_id';";

        $result = $db->prepare($sql);
        $result->execute();

    	$sql = "INSERT INTO correcao(email, nro, anomalia_id) VALUES('$novo_email', '$novo_nro', '$novo_anomalia_id');";

        $result = $db->prepare($sql);
        $result->execute();
    }
    catch (PDOException $e)
    {
        echo("<p>ERROR: {$e->getMessage()}</p>");
    }
?>
<a href="editar_atributos_correccao.php">Get Back</a>
    </body>
</html>