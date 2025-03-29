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
    <h1><mark> Determina si un numero es multiplo de 3 y 5</mark></h1>
        </header>
        <main>
            <section>

    <form method="POST"> //verifica el metodo POST
        //formulario que interactua con el ususario
        <label for="numer">Ingrese un numero</label><br>
        <input type="number" id="numer" name="numer" required><br><br>
        <button type="submit">Enviar</button><br><br> //boton que envia los datos
    </form>
    //bloque de php
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST["numer"])) {
            //variable
            $num=$_POST['numer'];
            if($num% 3==0){ // verifica si es multiplo de 
                echo"El $num es multiplo de 3"; //imprime el mensaje
        }else if($num% 5==0){ //verifica si es multiplo de 5
            echo "El $num es multiplo de 5"; //imprime el mensaje
        }else{
            echo "El $num no es multiplo ni de 3 ni de 5"; //imprime el mensaje
        }
    }
    }
    ?><br><br><br>
        //link a otra pagina
<a href="practica4.php">Practica 3</a>
</section>
        </main>
    //pie de pagina
        <footer>Arturo Solis</footer>
    </center>
</body>
</html>
