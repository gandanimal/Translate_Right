<html>
    <body>
    <h3>Lista de anomalias dos ultimos tres meses</h3>
<?php
    $latitude = $_REQUEST['latitude'];
    $longitude = $_REQUEST['longitude'];
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
                    where it.latitude between '$latitude'-30 and '$latitude'+30
                    and it.longitude between '$longitude'-30 and '$longitude'+30
                    and ts > CURRENT_DATE - INTERVAL '3 months';";
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

<a href="coordenadas.php">Get Back</a>

    </body>
</html>