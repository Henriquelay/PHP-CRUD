<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <?php include 'crudclasses.php';

    $servername = "localhost";
    $username = "hclayber";
    $password = "preguicarolica";

    // Create connection
    $conn = new mysqli($servername, $username, $password);

    // Check connection
    if ($conn->connect_error){
        die("Conexão falhou: " . $conn->connect_error);
    } 
    echo "Conectado ao banco de dados";
    ?>

    <title>CRUD PHP - Henriquelay</title>
    <link rel="stylesheet" type = "text/css" href="index.css">

</head>
<body>
    <div id="blocoprincipal">
        CRUD LINDAO
        <table>
            <form action="index.php" method="post">
            <tr><td>
                <input type="text" name="nome" label="Nome" placeholder="Nome">
            </td></tr>
            <tr><td>
                <input type="number" name="matricula" label="Matrícula" placeholder="Matrícula">
            </td></tr>
            <tr><td>
                <input type="date" id="data" name="nascimento" label="Nascimento" placeholder="Nascimento    (dd/mm/aaaa)">
            </td></tr>
            <tr><td>
                <input type="email" name="email" label="Email" placeholder="Email">
            </td></tr>
            <tr><td>
                <input type="number" name="CPF" label="CPF" placeholder="CPF">
            </td></tr>
            <tr><td>
                <input type="number" name="celular" label="Celular" placeholder="(DDD) Celular">
            </td></tr>
        </table><table>
            <tr><td>
            <input type="radio" name="estrelinha" label="estrelinha" value=1><p>Estrelinha</p>
                </td><td>
                <input type="radio" name="estrelinha" label="naoestrelinha" value=0 id="naoestrelinha"><p>Não estrelinha</p>
            </td></tr>
        </table>
                <input type="submit">
                <input type="reset">
            </form>

        <table>
            <tr><td><?php lista(); ?></td></tr>
        </table>
    </div>
    <footer>
        <p>Criado por: Henrique Coutinho Layber</p>
    </footer>
</body>


<?php
function mostraLista(){
    echo "Teste de lista " . $_POST["nome"];
}
function lista(){
    if(isset($_POST['submit'])){
        mostraLista();
    }
}
?>