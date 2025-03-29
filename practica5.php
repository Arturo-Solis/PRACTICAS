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
        <h1><mark>dado un numero, devolver el doble si el numero no es par, caso contrario devolver el triple </mark></h1>
    </header>
    <main>
        <section>
            <form method="POST"> //verifica el metodo POST
                <label for="numero">Ingresa un numero: </label><br>
                <input type="number" id="numero" name="numero" required><br>
                <button type="submit">Enviar</button> //boton que envia los datos
            </form>
            //bloque de php
            <?php
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                //variable
                $num=$_POST['numero'];
                
                if($num%2== 0){ //verifica que el numero dividido entre 2 de cero, entonces es par
                    echo"El numero es par <br>"; //imprime el mensaje
                    echo"El resultado es ".($num*2); //ya dicho que el numero es par ahora se multiplica por 2
                }else{
                    echo "El numero es impar<br>"; //imprime el mensaje
                    echo "El resultado es".($num*3); //ya verificado que es impar, se multiplica por 3

                }
            }
            ?><br><br><br>
                //link a otra practica
<a href="practica6.php">Practica 6</a>
        </section>
    </main>

    //pie de pagina
    <footer>Arturo Solis</footer>
    </center>
</body>
</html>
