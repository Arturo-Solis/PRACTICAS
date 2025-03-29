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
        <h1><mark>Dado la edad de una persona determinar si es mayor de edad o menor de edad  </mark></h1>
    </header>
    <main>
        <section>
            <form method="POST"> //verifica el motodo POST
                <label for="edade">Ingrese su edad</label><br>
                <input type="number" id="edade" name="edade"><br><br>
                <button type="submit">Enviar</button> // boton envia los datos
            </form>
            //bloque de php
            <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(isset($_POST["edade"])){
            //variable
            $edad=$_POST['edade']; 
            
            if($edad>=18 ){ //verifica si 'edad' es mayor o igual a 18 
                echo"Eres mayor de edad "; //imprime el mensaje
        }else {
            echo "Eres menor de edad"; //imprime el mensaje si no
        }
    }  
}
            ?><br><br><br>
//link para otra practica
<a href="practica9.php">Practica9</a>
        </section>
    </main>
    //pie de pagina
    <footer>Arturo solis</footer>
    </center>
</body>
</html>
