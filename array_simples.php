
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Simples em PHP</title>
</head>
<body>
<div id="container">
        <div id="compra">
            <h3>Escolha o índice</h3>
            <form name="produto" method="post" action="">
                <p>
                    <label>Informe o nome do produto:</label>
                   
                    <select name="nome" required>
                        <option value="Mouse">Mouse</option>
                        <option value="Notebook">Notebook</option>
                        <option value="Mousepad">Mousepad</option>
                        <option value="Fone_ouvido">Fone de ouvido</option>
                        <option value="Apple_watch">Apple Watch</option>
                        <option value="Capa_celular">Capa de celular</option>

                        </select>
                </p>
                <p>
                    <label>Informe o índice do produto:</label>
                    <select name="indice" required>
                        <option value="0">Mouse</option>
                        <option value="1">Notebook</option>
                        <option value="2">Mousepad</option>
                        <option value="3">Fone_ouvido</option>
                        <option value="4">Apple_watch</option>
                        <option value="5">Capa_celular</option>

                        </select>
                </p>
            <input type="submit" value="Exibir" name="exibir">
<?php
    if(isset($_POST["exibir"]))
    {
        $nome_produto = $_POST["nome"];
         $indice = $_POST["indice"];
         echo "<strong>Nome do produto: ", $nome_produto;
         //echo "<hr><strong>Índice: ", $indice;
    }
    //echo "<h3>Array simples em PHP</h3>";
    echo "<hr>";
    // Definição do array
    $produtos = array ();
    $produtos[0] = "mouse";
    $produtos[1] = "notebook";
    $produtos[2] = "mousepad";
    $produtos[3] = "fone de ouvido";
    $produtos[4] = "apple watch";
    $produtos[5] = "capa_celular";
    // echo $produtos[3];
?>
</body>
</html>
