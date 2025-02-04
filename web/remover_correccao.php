<html>
    <body>
    <h3>Correccao removida</h3>
<?php
    $email = $_REQUEST['email'];
    $nro = $_REQUEST['nro'];
    $anomalia_id = $_REQUEST['anomalia_id'];
	try
    {
    	$host = "db.ist.utl.pt";
    	$user = "ist425884";
    	$password = "password123";
    	$dbname = $user;

    	$db = new PDO("pgsql:host=$host;dbname=$dbname", $user, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    	$sql = "DELETE FROM correcao where email = '$email' and nro = '$nro' and anomalia_id = '$anomalia_id';";

        $result = $db->prepare($sql);
        $result->execute();
        }
        echo("</table>\n");
    }
    catch (PDOException $e)
    {
        echo("<p>ERROR: {$e->getMessage()}</p>");
    }
?>
<a href="remover_atributos_correccao.php">Get Back</a>
    </body>
</html>