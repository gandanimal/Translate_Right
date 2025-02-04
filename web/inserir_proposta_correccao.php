<html>
    <body>
    <h3>Proposta de correccao inserida</h3>
<?php
    $email = $_REQUEST['email'];
    $nro = $_REQUEST['nro'];
    $data_hora = $_REQUEST['data_hora'];
    $texto = $_REQUEST['texto'];
	try
    {
    	$host = "db.ist.utl.pt";
    	$user = "ist425884";
    	$password = "password123";
    	$dbname = $user;

    	$db = new PDO("pgsql:host=$host;dbname=$dbname", $user, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    	$sql = "INSERT INTO proposta_de_correcao(email, nro, data_hora, texto) VALUES('$email', '$nro', '$data_hora', '$texto');";

        $result = $db->prepare($sql);
        $result->execute();
    }
    catch (PDOException $e)
    {
        echo("<p>ERROR: {$e->getMessage()}</p>");
    }
?>
<a href="inserir_atributos_proposta_correccao.php">Get Back</a>
    </body>
</html>