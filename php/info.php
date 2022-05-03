<?php

$categorias=[];
$categorias[]= 'infantil';
$categorias[]= 'adolecentes';
$categorias[]= 'adulto';
//print_r($categorias); --> testar se funciona

$nome = 'Eduardo';
$idade= 12;

//var_dump($nome); ---> da informação do que temos
//var_dump($idade);

if($idade >= 6 && $idade == 12)
{
    for ($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'infantil')
            echo " o nadador " .$nome. " compete na categoria " .$categorias[$i];
    }
}
else if($idade >= 13 && $idade <= 18)
{
    for ($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'adolecente')
            echo " o nadador " .$nome. " compete na categoria " .$categorias[$i];
    }
}
else
{
    for ($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'adulto')
            echo " o nadador " .$nome. " compete na categoria " .$categorias[$i];
    }
}