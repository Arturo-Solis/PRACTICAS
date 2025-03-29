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
    <mark><h1>Dado 3 numeros devolver el mayor</h1></mark> //titulo
    </header>
    <main>
        <section>

        
<form method="POST"> // verifica el metodo POST
    //formulario que interactua el  usuario 
    <label for="numero"> Ingresa el primer numero</label>
    <input type="number" id="numero" name="numero" required><br><br>

    <label for="numero2">Ingresa el segundo numero</label>
    <input type="number" id="numero2" name="numero2" required><br><br>

    <label for="numero3">Ingresa el tercer numero</label>
    <input type="number" id="numero3" name="numero3" required><br><br>
    <button type="submit"> Revisar</button><br><br> //boton pra enviar datos
</form>
//bloque de php
<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["numero"]) && isset($_POST["numero2"])&&(isset($_POST["numero3"]))){
        //variables
        $num1=$_POST['numero'];
        $num2=$_POST['numero2'];
        $num3=$_POST['numero3'];
        
        if($num1>$num2 || $num1>$num3){ //verifica que num1 sea mayor que num2 y num3
            $mayor=$num1; //variable de resultado
        echo"El numero mayor es $mayor"; //imprime el mensaje
        } else if ($num2>$num1 || $num2>$num3){ //verifica que num2 sea mayor que num1 y num3
            $mayor=$num2; //variable de resultado
        echo "El numero mayor es $mayor"; //imprime el mensaje 
        } else {
            $mayor=$num3; // verifica que el num3 es el mayor
    echo "El numero mayor es $mayor"; // imprime el mensaje 
        }
    }
}
?><br><br><br>
    //limk a otra practica
<a href="practica2.php">Practica 2</a>
</section>
        </main>
    //pie de pagina
<footer>Arturo Solis</footer>
</center>
</body>
</html>
