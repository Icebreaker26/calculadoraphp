<?php
$num= isset($_POST['num']) ? ($_POST['num']) : null;
$op= isset($_POST['op']) ? ($_POST['op']) : null;
$pantalla= isset($_POST['pantalla']) ? ($_POST['pantalla']) : null;
$num2= isset($_POST['num2']) ? ($_POST['num2']) : null;
$op2= isset($_POST['op2']) ? ($_POST['op2']) : null;


    if($op!=null){

        if($op == "="){
            switch ($op2){

                case "+": $pantalla=$num2+$pantalla; break;
                case "-": $pantalla=$num2-$pantalla; break;
                case "x": $pantalla=$num2*$pantalla; break;
                case "/": 
                    if($pantalla!=0){

                        $pantalla=$num2/$pantalla;

                    }
                    else{ $pantalla = "Error Div / 0";}
                    break;

            }

        }
        else{
            $op2=$op;
            $num2=$pantalla;
            $pantalla=null;
        }
    }
    else{
        $pantalla=$pantalla.$num;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>

    <link rel="stylesheet" href="styles.css">
    <!--BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!--FONT AWESOME-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css"></link>

</head>
<body class="bg-dark">

    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid" style="justify-content: center;">
        
    
          <a class="btn btn-primary" href="index.php">📚
          </a>
    
          <div style="width: 5px;"></div>
    
            
            <a class="btn btn-success" href="calculadora2.php">📕
            </a>
        
    
          <div style="width: 5px;"></div>
    
            <a class="btn btn-danger" href="calculadora1.php">📋
            </a>
    
        </div>
      </nav>

    <br><br><br>

    <div id="calculadora">

        <br><br>
        <h1 class="text-light" style="text-align: center;">Calculadora php</h1>
<br><br>

        <form action="index.php" method="post">

    <table style="border-style: solid; width: 80%; margin: auto;">
        <tr>

            <input type="text" class="bg-dark text-warning" value="<?php echo $pantalla; ?>" name="pantalla" style="border-style: solid; width: 80%; margin: auto; text-align: right; font-size: 30px;">


        </tr>

        <tr>
            <td><input type="submit" class="btn btn-danger" style="width: 100%;"  value="1" name="num"></td>
            <td><input type="submit" class="btn btn-danger" style="width: 100%;"  value="2" name="num"></td>
            <td><input type="submit" class="btn btn-danger" style="width: 100%;"  value="3" name="num"></td>
            <td><input type="submit" class="btn btn-primary"style="width: 100%;" value="+"  name="op"></td>

        </tr>
        <tr>
            <td><input type="submit" class="btn btn-danger" style="width: 100%;" value="4"  name="num"></td>
            <td><input type="submit" class="btn btn-danger" style="width: 100%;" value="5"  name="num"></td>
            <td><input type="submit" class="btn btn-danger" style="width: 100%;" value="6"  name="num"></td>
            <td><input type="submit" class="btn btn-primary" style="width: 100%;" value="-"  name="op"></td>

        </tr>
        <tr>
            <td><input type="submit" class="btn btn-danger" style="width: 100%;" value="7"  name="num"></td>
            <td><input type="submit" class="btn btn-danger" style="width: 100%;" value="8"  name="num"></td>
            <td><input type="submit" class="btn btn-danger" style="width: 100%;" value="9"  name="num"></td>
            <td><input type="submit" class="btn btn-primary" style="width: 100%;" value="x"  name="op"></td>

        </tr>

        <tr>
            <td><input type="submit" class="btn btn-danger" style="width: 100%;" value="C"  name="op"></td>
            <td><input type="submit" class="btn btn-danger" style="width: 100%;" value="0"  name="num"></td>
            <td><input type="submit" class="btn btn-success" style="width: 100%;" value="="  name="op"></td>
            <td><input type="submit" class="btn btn-primary" style="width: 100%;" value="/"  name="op"></td>

        </tr>


    </table>

    <input type="hidden" name="num2" value="<?php echo $num2;?>">
    <input type="hidden" name="op2" value="<?php echo $op2;?>">


    </form>
    </div>

</body>
</html>