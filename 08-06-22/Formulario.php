
<?php
    if (isset($_POST['oprimir'])){
        if($_POST['opcion']==1){
            $resultado =$_POST['numero1']+$_POST['numero2'];
        }
        elseif($_POST['opcion']==2){
            $resultado =$_POST['numero1']-$_POST['numero2'];
        }
        elseif($_POST['opcion']==3){
            $resultado =$_POST['numero1']*$_POST['numero2'];
        }
        elseif($_POST['opcion']==4){
            $resultado =$_POST['numero1']/$_POST['numero2'];
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <section class="section" id="section1">
        <article class="article" id="article1">
            <form action="#" method="post">
                <table class="table">
                    <tr>
                        <div class="login-form">
                            
                            <td><label> Ingrese el primer numero</label></td>
                            <th><input type="text" name="numero1" placeholder="ingrese numeor" pattern="[0-9.]+"required autofocus maxlength="2"></th>
                        </div>
                </tr>
                <tr>
                        <div class="login-form">
                            <td><label>Ingrese el segundo numero</label></td>
                            <th><input type="text" name="numero2" placeholder="ingrese numeor" pattern="[0-9.]+" required autofocus></th>
                        </div>
                </tr>
                    <tr>
                        <td><label>suma</label></td>
                        <th><input type="radio" name="opcion" value="1" checked><br></th>
                    </tr>
                    <tr>
                        <td><label>resta</label></td>
                        <th> <input type="radio" name="opcion" value="2" checked><br></th>
                    </tr>
                    <tr>
                        <td><label>multiplicacion</label></td>
                        <th><input type="radio" name="opcion" value="3" checked><br></th>
                    </tr>
                    <tr>
                        <td><label>divicion</label></td>
                        <th><input type="radio" name="opcion" value="4" checked><br></th>
                    </tr>       
                    <tr>
                        <th><input type="submit" value="Calcular" name="oprimir"><br></th>
                    </tr>
                    <tr>
                        <td><label>resultado</label></td>
                    
                        <th><input  type="text" name="resultado" value="
                            <?php
                                if(isset($_POST['oprimir'])){
                                    echo $resultado;
                                    }
                                ?>" readonly>
                        </th>
                    </tr>
                </table>
            </form>
        
        </article>
    </section>
</body>
</html>