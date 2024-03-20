<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUBBLE SORT</title>
    <style>

    span{
        background: #000 ;
        color:#1A0DFC;
        font-family: sans-serif;
    }

    body{
        background: url(images/vilaoo.jpg);
        align-items: center;
    }

    a{
    color: #fff;
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
    <br> <br>

<?php
function bubbleSort($array) {
       $n = count($array); 

       for ($i = 0; $i < $n-1; $i++) { 
           for ($j = 0; $j < $n-$i-1; $j++) { 

               if ($array[$j] < $array[$j+1]) {
                   $aux = $array[$j];
                   $array[$j] = $array[$j+1];
                   $array[$j+1] = $aux;
               }
           }
       }
       return $array;
   }
   
    
       $numero = explode(',', $_GET['textNUMBER']); 
       
       // Remove espaços em branco e converte para inteiros == intval 
       $numero = array_map('intval', $numero); 
       
       
       $numeros_sorted = bubbleSort($numero); 
       
       ?>
     <span>

      <?php
       echo "Números ordenados do maior para o menor: ";
       foreach ($numeros_sorted as $numero_ord) { 
           echo "$numero_ord ";
       }
        ?>

    </span>
      
</body>
</html>



