<html>
    <body>
    <h3>Anomalia inserida</h3>
<?php
    $zona = $_REQUEST['zona'];
    $imagem = $_REQUEST['imagem'];
    $lingua = $_REQUEST['lingua'];
    $ts = $_REQUEST['ts'];
    $descricao = $_REQUEST['descricao'];
    $zona2 = $_REQUEST['zona2'];
    $lingua2 = $_REQUEST['lingua2'];
	try
    {
    	$host = "db.ist.utl.pt";
    	$user = "ist425884";
    	$password = "password123";
    	$dbname = $user;

    	$db = new PDO("pgsql:host=$host;dbname=$dbname", $user, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    	$sql = "INSERT INTO anomalia(zona, imagem, lingua, ts, descricao, tem_anomalia_redacao) VALUES('$zona', '$imagem', '$lingua', '$ts', '$descricao', 'false');";

        $result = $db->prepare($sql);
        $result->execute();

        $sql = "INSERT INTO anomalia_traducao(id, zona2, lingua2) SELECT max(id), '$zona2', '$lingua2' FROM anomalia1;";

        $result = $db->prepare($sql);
        $result->execute();
    }
    catch (PDOException $e)
    {
        echo("<p>ERROR: {$e->getMessage()}</p>");
    }
?>
<a href="inserir_atributos_anomalia_traducao.php">Get Back</a>
    </body>
</html>