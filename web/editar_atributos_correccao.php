<html>
    <body>
        <h3>Inserir chave da correccao a editar e novos atributos</h3>
        <form action="editar_correccao.php" method="post">
            <p><input type="hidden" name="og_email" value="<?=$_REQUEST['og_email']?>"/></p>
            <p>E-mail original: <input type="text" name="og_email"/></p>
            <p><input type="hidden" name="og_nro" value="<?=$_REQUEST['og_nro']?>"/></p>
            <p>Numero original: <input type="text" name="og_nro"/></p>
            <p><input type="hidden" name="og_anomalia_id" value="<?=$_REQUEST['og_anomalia_id']?>"/></p>
            <p>Id da anomalia original: <input type="text" name="og_anomalia_id"/></p>
            <p><input type="hidden" name="novo_email" value="<?=$_REQUEST['novo_email']?>"/></p>
            <p>E-mail novo: <input type="text" name="novo_email"/></p>
            <p><input type="hidden" name="novo_nro" value="<?=$_REQUEST['novo_nro']?>"/></p>
            <p>Numero novo: <input type="text" name="novo_nro"/></p>
            <p><input type="hidden" name="novo_anomalia_id" value="<?=$_REQUEST['novo_anomalia_id']?>"/></p>
            <p>Id da anomalia novo: <input type="text" name="novo_anomalia_id"/></p>
            <p><input type="submit" value="Submit"/></p>
        </form>
        <a href="correccoes_propostas_correccao.html">Get Back</a>
    </body>
</html>