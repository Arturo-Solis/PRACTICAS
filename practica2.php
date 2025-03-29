<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>  
    <header> //titulo
    <mark><h1>Dado un caracter determina si es una vocal</h1> </mark>
    </header>
    <main>
        <section>

    <form method="POST"> //verifica el metodo POST
        //formulario que interactua con el usuario
        <label for="letra">Ingresa un caracter</label>
        <input type="text" id="letra" name="letra">
        <button type="submit">Enviar</button> //boton para enviar los datos 
    </form>
    //bloque de php
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST["letra"])){
        //variable
        $letra=$_POST['letra'];
        if($letra=='a'|| $letra=='A'){ //verifica si es 'a' o 'A'
            echo"Esta letra es una vocal"; //imprime el mensaje 
        }else if($letra=='e'||$letra=='E'){ //verifica si es 'e' o 'E'
            echo "Esta letra es una vocal"; //imprime el mensaje 
        }else if($letra=='i'||$letra=='I'){ //verifica si es 'i' o 'I'
            echo "Esta letra es una vocal"; //imprime el mensaje 
        }else if($letra=='o'||$letra=='O'){ //verifica si es 'o' o 'O'
            echo "Esta letra es una vocal"; //imprime el mensaje 
        }else if($letra=='u'||$letra=='U'){ //verifica si es 'u' o 'U'
    echo "Esta letra es una vocal"; //imprime el mensaje 
}else{
    echo "Esta letra no es una vocal"; //imprime el mensaje 
}
}}
?><br><br><br> 
//link a otra practica 
<a href="practica3.php">Practica 3</a>
</section>
        </main> 
        //pie de pagina
        <footer>Arturo Solis</footer>
</center>
</body>
</html>
