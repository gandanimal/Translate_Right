<html>
    <body>
        <h3>Inserir chave da correccao a remover</h3>
        <form action="remover_correccao.php" method="post">
            <p><input type="hidden" name="email" value="<?=$_REQUEST['email']?>"/></p>
            <p>E-mail: <input type="text" name="email"/></p>
            <p><input type="hidden" name="nro" value="<?=$_REQUEST['nro']?>"/></p>
            <p>Numero: <input type="text" name="nro"/></p>
            <p><input type="hidden" name="anomalia_id" value="<?=$_REQUEST['anomalia_id']?>"/></p>
            <p>Id da anomalia: <input type="text" name="anomalia_id"/></p>
            <p><input type="submit" value="Submit"/></p>
        </form>
        <a href="correccoes_propostas_correccao.html">Get Back</a>
    </body>
</html>