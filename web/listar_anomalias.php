<html>
    <body>
    <h3>Lista de anomalias entre <?=$_REQUEST['local_1']?> e <?=$_REQUEST['local_2']?></h3>
<?php
    $local_1 = $_REQUEST['local_1'];
    $local_2 = $_REQUEST['local_2'];
    try
    {
        $host = "db.ist.utl.pt";
        $user = "ist425884";
        $password = "password123";
        $dbname = $user;

        $db = new PDO("pgsql:host=$host;dbname=$dbname", $user, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT a.id, zona, imagem, lingua, ts, a.descricao, tem_anomalia_redacao, zona2, lingua2
                    FROM anomalia a 
                    left outer join anomalia_traducao at on a.id = at.id
                    join incidencia ic on a.id = ic.anomalia_id 
                    join item it on ic.item_id = it.id 
                    where it.latitude between (SELECT latitude FROM local_publico where nome = '$local_1') and (SELECT latitude FROM local_publico where nome = '$local_2') 
                    and it.longitude between (SELECT longitude FROM local_publico where nome = '$local_1') and (SELECT longitude FROM local_publico where nome = '$local_2');";
        $result = $db->prepare($sql);
        $result->execute();
           
        echo("<table border=\"1\">\n");
        echo("<tr><td>id</td><td>zona</td><td>imagem</td><td>lingua</td><td>ts</td><td>descricao</td><td>tem_anomalia_redacao</td><td>zona2</td><td>lingua2</td></tr>\n");
        foreach($result as $row)
        {
            echo("<tr><td>");
            echo($row['id']);
            echo("</td><td>");
            echo($row['zona']);
            echo("</td><td>");
            echo($row['imagem']);
            echo("</td><td>");
            echo($row['lingua']);
            echo("</td><td>");
            echo($row['ts']);
            echo("</td><td>");
            echo($row['descricao']);
            echo("</td><td>");
            echo($row['tem_anomalia_redacao']);
            echo("</td><td>");
            echo($row['zona2']);
            echo("</td><td>");
            echo($row['lingua2']);
            echo("</td></tr>\n");
        }
        echo("</table>\n");
    }
    catch (PDOException $e)
    {
        echo("<p>ERROR: {$e->getMessage()}</p>");
    }
?>

<a href="nomes_locais.php">Get Back</a>

    </body>
</html>