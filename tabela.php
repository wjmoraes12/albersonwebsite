<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleindex.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>TABELA</title>
    <style>

    .row{
        background-color: antiquewhite;
    }
    .verdadeiro{
        background-color: green;
    }
    h2{
        color: #fff;
        background: #000;
    }

    .titulo{
        background: #fff;
        color: #000;
    }

    .true{
        color: #000 ;
        background: #0f0 ;
    }

    .false{
        color: #000 ;
        background: #f00;
    }

    a{
    color: #000;
    text-decoration: none;
    font-weight: bold;
    }

    a:hover{
        color: #1A0DFC;
        transform: .3s;
    }

    </style>
</head>
<body>
  <a href="index.html">RETORNAR</a>
<?php

$numero = $_GET['textNUMBER'];


    $divisores = array(); 
    $qtd = 0;
    for($count=1;$count<=$numero;$count++) {
        if($numero % $count==0){
            $divisores[] = $count; // Adiciona o divisor ao array
            $qtd++; 
        }
    }

?>

<div class="container mt-3">        
  <table class="table table-bordered">
    <thead>
      <tr>
        <th><div class="titulo">NÚMERO RECEBIDO</div></th>
        <th><?php echo $numero?></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>PAR</td>
        <td>
          <?php

            if($numero%2==0){
                ?> 
                <div class="true">sim</div>
                <?php
            }else{
                ?> 
                <div class="false">não</div>
                <?php
            }
        
          ?>
        </td>
 
      </tr>
      <tr>
      <td>ÍMPAR</td>
        <td>
          <?php

            if($numero%2==1){
                ?> 
                <div class="true">sim</div>
                <?php
            }else{
                ?> 
                <div class="false">não</div>
                <?php
            }
        
          ?>
        </td>
      </tr>
      <tr>
      <td>PERFEITO</td>
        <td>
          <?php

            if($numero == array_sum($divisores)-$numero){
                ?> 
                <div class="true">sim</div>
                <?php
            }else{
                ?> 
                <div class="false">não</div>
                <?php
            }
        
          ?>
        </td>
      </tr>

      <tr>
      <td>DIVISORES</td>
        <td>
          <?php
                
                foreach($divisores as $divisor){

                    if($divisor==$numero){
                       echo "$numero.";   
                    }else{
                        echo $divisor . ", ";
                    }
                   
                }
            ?>
        
        </td>
      </tr>

      <tr>
      <td>PRIMO</td>
        <td>
          <?php
                $divisores2=0;
                
                for ($i=1;$i<=$numero;$i++){ 
                    if($numero%$i==0){
                        $divisores2++;
                    }
                }

                if($divisores2>2){
                    ?> 
                    <div class="false">não</div>
                    <?php
                }else{
                    ?> 
                    <div class="true">sim</div>
                    <?php
                }
            ?>
        
        </td>
      </tr>


    </tbody>
  </table>
</div>
</body>
</html>