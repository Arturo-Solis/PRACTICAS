<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 21</title>
</head>
<body>
<center>   
    <header>  
    <mark><h1>Dado 3 numeros devolver el mayor</h1></mark>
    </header>
    <main>
        <section>

        
<form method="POST">
    <label for="numero"> Ingresa el primer numero</label>
    <input type="number" id="numero" name="numero" required><br><br>

    <label for="numero2">Ingresa el segundo numero</label>
    <input type="number" id="numero2" name="numero2" required><br><br>

    <label for="numero3">Ingresa el tercer numero</label>
    <input type="number" id="numero3" name="numero3" required><br><br>
    <button type="submit"> Revisar</button><br><br>
</form>
<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["numero"]) && isset($_POST["numero2"])&&(isset($_POST["numero3"]))){
        $num1=$_POST['numero'];
        $num2=$_POST['numero2'];
        $num3=$_POST['numero3'];
        
        if($num1>$num2 || $num1>$num3){
            $mayor=$num1;
        echo"El numero mayor es $mayor";
        } else if ($num2>$num1 || $num2>$num3){
            $mayor=$num2;
        echo "El numero mayor es $mayor";
        } else {
            $mayor=$num3;
    echo "El numero mayor es $mayor";
        }
    }
}
?><br><br><br>
<a href="practica2.php">Practica 2</a>
</section>
        </main>
<footer>Arturo Solis</footer>
</center>
</body>
</html>