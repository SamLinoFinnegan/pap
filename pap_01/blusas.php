<html>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="css/estilo.css">
<style>
    .w3-sidebar a {
        font-family: "Roboto", sans-serif
    }

    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    .w3-wide {
        font-family: "Montserrat", sans-serif;
    }
</style>

<body class="w3-content" style="max-width:1200px">
<center><h1> Blusas</h1></center>
    <?php
    Require_once "menu.php";
    $tipo=1;
    ?>
    <h2>Selecione um novo arquivo de imagem</h2>


    <?php

    $querySelecao = "SELECT codigo, nome_evento, descricao_evento,
    nome_imagem, tamanho_imagem, imagem FROM tabela_imagens";
    $resultado = mysql_query($querySelecao);

    while ($aquivos = mysql_fetch_array($resultado)) { ?>
        <td align="center">
        <?php echo $aquivos[‘codigo’]; ?>
    </td>
        <td align="center">
        <?php echo $aquivos['nome_evento']; ?>
    </td>
        <td align="center">
        <?php echo $aquivos['descricao_evento']; ?>
    </td>
        <td align="center">
        <?php echo $aquivos['nome_imagem']; ?>
    </td>
        <td align="center">
        <?php echo $aquivos['tamanho_imagem']; ?>
    </td>
        <td align="center">
        <?php echo '<a href="ver_imagem.php?id='.$aquivos[‘codigo’].
        '">Imagem '.$aquivos[‘codigo’].'</a>'; ?>
    </td>
    <td align="center">
        <?php echo '<a href="excluir_imagem.php?id='.$aquivos[‘codigo’].
        '">Imagem '.$aquivos[‘codigo’].'</a>'; ?>
    </td>
    <?php } ?>

</html>
