<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>  
    <header>
        //titulo
        <h1><mark>Determina si un numero es par o impar </mark></h1>
    </header>
    <main>
        <section>

    <form method="POST"> //verifica el metodo POST
        //formulario que interactua con el usuario
        <label for="numero">Ingresa un numero: </label><br>
        <input type="number" id="numero" name="numero"><br><br>
        <button type="submit">Enviar</button><br> //boton que envia el formulario
    </form>
    //bloque de php
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(isset($_POST["numero"])){
            //variable
            $num=$_POST['numero'];
            
            if($num%2==0){ //verifica que el nunero ingresado dividido entre 2 de cero, lo cual sera par
                echo"El $num es un numero par."; //imprime el mensaje
        }else{
            echo "El $num es un numero impar."; //imprime el mensaje
    }
}
}
    ?><br><br><br>
    //link a otra pagina
    <a href="practica5.php">Practica 5</a>
    </section>
        </main>
        //pie de pagina
        <footer>Arturo Solis</footer>
    </center>
</body>
</html>
