<?php
$close = mysqli_close($conexao);
if (!$close) 
    echo "Erro ao fechar a conexao.";
else
    echo "Conexao encerrada com sucesso.";
?>
