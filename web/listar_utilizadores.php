<html>
    <body>
    <h3>Lista de utilizadores</h3>
<?php
	try
    {
    	$host = "db.ist.utl.pt";
    	$user = "ist425884";
    	$password = "password123";
    	$dbname = $user;

    	$db = new PDO("pgsql:host=$host;dbname=$dbname", $user, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT email, password FROM utilizador;";
        $result = $db->prepare($sql);
        $result->execute();
           
        echo("<table border=\"1\">\n");
        echo("<tr><td>email</td><td>password</td></tr>\n");
        foreach($result as $row)
        {
            echo("<tr><td>");
            echo($row['email']);
            echo("</td><td>");
            echo($row['password']);
        }
        echo("</table>\n");
    }
    catch (PDOException $e)
    {
        echo("<p>ERROR: {$e->getMessage()}</p>");
    }
?>

<a href="BD.html">Get Back</a>

    </body>
</html>