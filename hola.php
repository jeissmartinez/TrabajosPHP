<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script> </script>
    <?php
       

        echo "<p id='n1'>El resultado de la suma es ",$resultSum,"<br><br>";
        echo "El resultado de la resta es ",$resultRes,"<br><br>";
        echo "El resultado de la multiplicacion es ",$resultMul,"<br><br>";
        echo "El resultado de la division es ",$ressulDivi,"<br><br></p> ";
        function Do_While(){
            $i=0;
            do{
                $i++;
                echo "<p>El valor de i es ",$i,"<br></p>";
            }
            while($i<=10); 
        }
        function ForYou(){
        for ($i=10; $i >=1 ; $i--)
            { 
                echo "<p id='n2'>El valor de i es ",$i,"<br></p>";
            }
        }
        function calculator(){
            $n1=10;
            $n2=19;
            $resultSum=$n1+$n2;
            $resultRes=$n1-$n2;
            $resultMul=$n1*$n2;
            $ressulDivi=$n1/$n2;
            $op='*';
            switch ($op) {
                case '+':
                    echo "El resultado de la suma es ",$resultSum;
                    break;
                case '-':
                    echo "El resultado de la resta es ",$resultRes,"<br><br>";
                    break;
                case '*':
                    echo "El resultado de la multiplicacion es ",$resultMul,"<br><br>";
                    break;
                case '/':
                    echo "El resultado de la division es ",$ressulDivi,"<br><br></p> ";
                    break;
                default:
                    echo "Error, opcion invalida";
                    break;
            }
        }
        calculator()
    ?>
    <title>Document</title>
</head>
<body>

</body>
</html>
