
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
                        <th><input type="checkbox" name="chequeado1" value="1" checked><br></th>
                    </tr>
                    <tr>
                        <td><label>resta</label></td>
                        <th> <input type="checkbox" name="chequeado2" value="2" checked><br></th>
                    </tr>
                    <tr>
                        <td><label>multiplicacion </label></td>
                        <th> <input type="checkbox" name="chequeado3" value="3" checked><br></th>
                    </tr>
                    <tr>
                        <td><label>divicion</label></td>
                        <th> <input type="checkbox" name="chequeado4" value="4" checked><br></th>
                    </tr>
                    <tr>
                        <th><input type="submit" value="oprima" name="oprimir" id="botosito"><br></th>
                    </tr>
                </table>
            </form>
        </article>
</section>
<section class="section">
    <article class="article" id="article2">
    <?php
    if (isset($_POST['chequeado1'])){
        $suma=$_POST['numero1']+$_POST['numero2'];
        echo "la suma es: ".$suma."<br>";
    }
    if (isset($_POST['chequeado2'])){
        $resta=$_POST['numero1']-$_POST['numero2'];
        echo "la resta es: ".$resta."<br>";
    }
    if (isset($_POST['chequeado3'])){
        $multiplicacion=$_POST['numero1']*$_POST['numero2'];
        echo "la multiplicacion es: ".$multiplicacion."<br>";
    }
    if (isset($_POST['chequeado4'])){
        $divicion=$_POST['numero1']/$_POST['numero2'];
        echo "la divicion es: ".$divicion."<br>";
    }
?>
    </article>
</section>

</body>
</html>