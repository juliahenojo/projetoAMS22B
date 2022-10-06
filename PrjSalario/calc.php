<?php
$Qntidade = (float) $_POST['txtQntidade'];
$Valor = (float) $_POST['txtValor'];
$Gratificacao = (float) $_POST['txtGratificacao'];
$Resultado = ($Qntidade * $Valor) + $Gratificacao;
echo "O resultado é: ", $Resultado;
