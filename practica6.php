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
        <h1><mark>Dado 3 numeros, devolver en orden ascendente</mark></h1>
    </header>
    <main>
        <section>  
            <form method="POST"> //verifica el metodo POST
                //formulario que interactua con el usuario
                <label for="numero">Ingresa el primer numero </label>
                <input type="number" id="numero" name="numero" required><br>
                <label for="numero2">Ingresa el segundo numero</label>
                <input type="number" id="numero2" name="numero2"><br>
                <label for="numero3">Ingresa el tercer numero</label>
                <input type="number" id="numero3" name="numero3"><br>
                <button type="submit">Enviar</button> //boton que envia los datos 
            </form>
            //bloque de php
            <?php
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                if(isset($_POST["numero"])&&(isset($_POST["numero2"]))&&(isset($_POST["numero3"]))){
                    //variables
                $num1=$_POST['numero'];
                $num2=$_POST['numero2'];
                $num3=$_POST['numero3'];
                if($num1>$num2||$num1>$num3){ //verifica que num1 es mayor que num2 y num3
                    $mayor=$num1; //variable de resultado
                }else if($num2>$num3||$num2>$num1){ //verifica que num2 es mayor que num1 y num3
                    $mayor=$num2; //variable de resultado
                }else{
                    $mayor=$num3; //variable de resultado
                }
                echo"El numero mayor es: $mayor"; //omprime el mensaje
                if($num1<$num2|| $num1<$num3){ //verifica que el num1 es menor a num2 y num3
                $menor=$num1; //variable de resultado
                }else if($num2<$num3||$num2<$num1){ //verifica que num2 es menor a num1 y num3
                $menor=$num2; // variable de resultado
                }else{
                    $menor=$num3; //variable de resultado
                }
                echo "El numero menor es: $menor"; // imprime el mensaje del numero menor

                $suma=$num1+$num2+$num3-$mayor-$menor; //verifica el numero intermedio
                echo"El numero intermedio es: $suma"; //imprime el mensaje del numero intermedio
}
}
    ?><br><br><br>
            //link a otra practica
            <a href="practica7.php">Practica 7</a>
        </section>
    </main>
    //pie de pagina
    <footer>Arturo Solis</footer>
</center>
</body>
</html>
