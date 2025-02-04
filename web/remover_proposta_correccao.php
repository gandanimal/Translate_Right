<html>
    <body>
    <h3>Proposta de correccao removida</h3>
<?php
    $email = $_REQUEST['email'];
    $nro = $_REQUEST['nro'];
	try
    {
    	$host = "db.ist.utl.pt";
    	$user = "ist425884";
    	$password = "password123";
    	$dbname = $user;

    	$db = new PDO("pgsql:host=$host;dbname=$dbname", $user, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    	$sql = "DELETE FROM proposta_de_correcao where email = '$email' and nro = '$nro';";

        $result = $db->prepare($sql);
        $result->execute();
    }
    catch (PDOException $e)
    {
        echo("<p>ERROR: {$e->getMessage()}</p>");
    }
?>
<a href="remover_atributos_proposta_correccao.php">Get Back</a>
    </body>
</html>