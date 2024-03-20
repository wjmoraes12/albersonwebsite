<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CPF</title>
    <style>

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
    <br>
    <br>
    <?php

    $cpf = $_GET['textCPF'];
    $nome = $_GET['textNAME'];

    // Verifica se o numero de digitos informados é igual a 11 
    //strlen vê o tamanho da string
    if (strlen($cpf) != 11) {

    ?>

        <font color="#FF0000">
            <?php echo "O CPF é falso por ter mais ou menos que 11 algarismos";
                return false;
            ?>    
        </font>

        <?php

    }else{   
        for ($t=9;$t<11; $t++) {
            for ($d=0,$c=0;$c<$t;$c++){

                $d += $cpf[$c] * (($t+1)-$c);
            }

            $d = $d%11;

            if($d<2){
                $d = 0;
            }else{
                $d = 11-$d;
            }

            if ($cpf[$c] != $d) {
                ?>
                <font color="#FF0000">
                    <?php echo "$nome, O CPF $cpf é falso";
                    return false;
                    ?>    
                </font>
                <?php
            }
        }
                ?>
                <font color="#00FF00">
                    <?php echo "$nome, O CPF $cpf é verdadeiro";
                    return false;
                    ?>    
                </font>
                <?php
            
    }
    ?>

</body>
</html>




