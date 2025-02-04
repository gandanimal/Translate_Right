<html>
    <body>
        <h3>Inserir atributos da proposta de correccao a inserir</h3>
        <form action="inserir_proposta_correccao.php" method="post">
            <p><input type="hidden" name="email" value="<?=$_REQUEST['email']?>"/></p>
            <p>E-mail: <input type="text" name="email"/></p>
            <p><input type="hidden" name="nro" value="<?=$_REQUEST['nro']?>"/></p>
            <p>Numero: <input type="text" name="nro"/></p>
            <p><input type="hidden" name="data_hora" value="<?=$_REQUEST['data_hora']?>"/></p>
            <p>Data e hora: <input type="text" name="data_hora"/></p>
            <p><input type="hidden" name="texto" value="<?=$_REQUEST['texto']?>"/></p>
            <p>Texto: <input type="text" name="texto"/></p>
            <p><input type="submit" value="Submit"/></p>
        </form>
        <a href="correccoes_propostas_correccao.html">Get Back</a>
    </body>
</html>