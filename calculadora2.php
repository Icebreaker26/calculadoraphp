<?php

$num1= isset($_POST['num1']) ? ($_POST['num1']) : null;
$num2= isset($_POST['num2']) ? ($_POST['num2']) : null;
$op= isset($_POST['op']) ? ($_POST['op']) : null;
$pantalla= isset($_POST['pantalla']) ? ($_POST['pantalla']) : null;
$resultado= isset($_POST['resultado']) ? ($_POST['resultado']) : null;

if($num1&&$num2 != 0){

        switch($op){
            case "+": $resultado = $num1 + $num2; break;
            case "-": $resultado = $num1 - $num2; break;
            case "x": $resultado = $num1 * $num2; break;
            case "/":
                if($num2!=0){

                    $resultado=$num1/$num2;

                }
                else{ $resultado = "Error Div / 0";}
                break;

        }
}else{

   $resultado ="INSERTAR NUMERO";

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calc 1</title>

    <link rel="stylesheet" href="styles.css">
    <!--BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!--FONT AWESOME-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css"></link>

</head>
<body class="bg-dark text-light">

    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid" style="justify-content: center;">
        
    
          <a class="btn btn-primary" href="index.php">📚
          </a>
    
          <div style="width: 5px;"></div>
    
            
            <a class="btn btn-success" href="#">📕
            </a>
        
    
          <div style="width: 5px;"></div>
    
            <a class="btn btn-danger" href="calculadora1.php">📋
            </a>
    
        </div>
      </nav>
        <div id="calculadora">
      <form action="calculadora2.php" method="post">

        <table style=" width:100%; margin-top:10%;">

            <tr>

                <td><h4>Ingrese Numero 1</h4></td>
                <td>            <input type="text" class="bg-dark text-warning" value="<?php echo$num1?>" name="num1" style="border-style: solid; width: 80%; margin: auto; text-align: right; font-size: 30px;">                </td>

            </tr>
            <tr>

                <td><h4>Ingrese Numero 2</h4></td>
                <td>            <input type="text" class="bg-dark text-warning" value="<?php echo$num2?>" name="num2" style="border-style: solid; width: 80%; margin: auto; text-align: right; font-size: 30px;">                </td>


            </tr>
            <tr>

                <td><h4>Seleccione operacion</h4></td>
                
                <td>
                
                    <input type="submit" class="btn btn-primary" style="width: 40%;" value="+"  name="op">
                    <input type="submit" class="btn btn-success" style="width: 40%;" value="-"  name="op">
                    <input type="submit" class="btn btn-danger" style="width: 40%;" value="x"  name="op">
                    <input type="submit" class="btn btn-warning" style="width: 40%;" value="/"  name="op">

                </td>

            </tr>
            <tr>
                <td><h4>Total</h4></td>
                <td><input type="text" class="bg-dark text-warning" value="<?php echo $resultado ?>" name="resultado" style="border-style: solid; width: 80%; margin: auto; text-align: right; font-size: 30px;"></td>
            </tr>
            <tr>
            </tr>
        </table>



      </form>
      </div>

    
</body>
</html>