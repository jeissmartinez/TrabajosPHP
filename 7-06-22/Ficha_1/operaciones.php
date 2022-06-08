<?php
    if (isset($_POST['boton1'])){
        $n1=$_POST['numero1'];
        $n2=$_POST['numero2'];
        $op=$_POST['operacion'];
        switch ($op){
            case 'suma':
                $total=$n1+$n2;
                echo $total;
                break;
            
            case 'resta':
                $total=$n1-$n2;
                echo $total;
                break;

            case 'multiplication':
                $total=$n1*$n2;
                echo $total;
                break;

            case 'division':
                $total=$n1/$n2;
                echo $total;
                break;

            case 'raiz':
                $total=sqrt($n1);
                
                echo "la raíz del primer nuemro es", $total;
                break;
            case 'potencia':
                $total=pow($n1,$n2);
                if($total==4){
                    echo "Como la respuesta dio 4 la multiplication de $n1 con $n2 es ", ($n1*$n2);
                }
                else{
                    echo $total;
                }
                break;
            default: echo "la opcion no esta en el menu";
        }
    }
?>
