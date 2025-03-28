<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><center>  
    <header>
        <h1><mark>  Dado un numero, devolver el doble del numero si el numero es positivo,
             el triple si es negativo, cero si es neutro </mark></h1>
    </header>
    <main>
        <section>
            <form method="POST">
                <label for="num1">Ingresa un numero: </label><br>
                <input type="number" id="num1" name="num1"><br><br>
                <button type="submit">Enviar</button><br>
            </form>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(isset($_POST["num1"])){
            $numero=$_POST["num1"];

            if($numero>0){
                echo"Este numero es positivo."."\n\n";
                echo"El resultado al multiplicarlo por dos es: ".$numero*2;
        }else if($numero<0){
            echo "Ese numero es negativo $numero\n\n";
            echo "El resultado al multiplicarlo por 3 es: ".$numero*3;
        }else{
            echo "Este numero es neutro";
        }
    }
}
    ?><br><br><br>
    <a href="practica10.php">Practica 1</a>
        </section>
    </main>
    <footer>Arturo Solis</footer>
    </center>
</body>
</html>