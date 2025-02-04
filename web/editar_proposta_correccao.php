<html>
    <body>
    <h3>Proposta de correccao editada</h3>
<?php
    $og_email = $_REQUEST['og_email'];
    $og_nro = $_REQUEST['og_nro'];
    $novo_email = $_REQUEST['novo_email'];
    $novo_nro = $_REQUEST['novo_nro'];
    $novo_data_hora = $_REQUEST['novo_data_hora'];
    $novo_texto = $_REQUEST['novo_texto'];
	try
    {
    	$host = "db.ist.utl.pt";
    	$user = "ist425884";
    	$password = "password123";
    	$dbname = $user;

    	$db = new PDO("pgsql:host=$host;dbname=$dbname", $user, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "DELETE FROM proposta_de_correcao where email = '$og_email' and nro = '$og_nro';";

        $result = $db->prepare($sql);
        $result->execute();

    	$sql = "INSERT INTO proposta_de_correcao(email, nro, data_hora, texto) VALUES('$novo_email', '$novo_nro', '$novo_data_hora', '$novo_texto');";

        $result = $db->prepare($sql);
        $result->execute();
    }
    catch (PDOException $e)
    {
        echo("<p>ERROR: {$e->getMessage()}</p>");
    }
?>
<a href="editar_atributos_proposta_correccao.php">Get Back</a>
    </body>
</html>