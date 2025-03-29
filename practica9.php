<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><center>  
    <header>
        //titulo
        <h1><mark>  Dado un numero, devolver el doble del numero si el numero es positivo,
             el triple si es negativo, cero si es neutro </mark></h1>
    </header>
    <main>
        <section>
            <form method="POST"> //verifica el metodo POST
                <label for="num1">Ingresa un numero: </label><br>
                <input type="number" id="num1" name="num1"><br><br>
                <button type="submit">Enviar</button><br> //boton que envia los datos
            </form>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(isset($_POST["num1"])){
            //variable
            $numero=$_POST["num1"];

            if($numero>0){ //verifica que sea mayor a cero
                echo"Este numero es positivo."."\n\n"; //imprime el mensaje
                echo"El resultado al multiplicarlo por dos es: ".$numero*2; //imprime el mensaje y multiplica por dos el numero
        }else if($numero<0){ //verifica que sea menor a cero
            echo "Ese numero es negativo $numero\n\n"; //imprime el mensaje
            echo "El resultado al multiplicarlo por 3 es: ".$numero*3; //imprime el mensaje y multiplica por tres el numero
        }else{
            echo "Este numero es neutro"; //imprime el mensaje
        }
    }
}
    ?><br><br><br>
    //link a otra practica
    <a href="practica10.php">Practica 10</a>
        </section>
    </main>
    //pie de pagina
    <footer>Arturo Solis</footer>
    </center>
</body>
</html>
