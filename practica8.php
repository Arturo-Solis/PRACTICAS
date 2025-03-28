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
        <h1><mark>Dado la edad de una persona determinar si es mayor de edad o menor de edad  </mark></h1>
    </header>
    <main>
        <section>
            <form method="POST">
                <label for="edade">Ingrese su edad</label><br>
                <input type="number" id="edade" name="edade"><br><br>
                <button type="submit">Enviar</button>
            </form>
            <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(isset($_POST["edade"])){
            $edad=$_POST['edade'];
            if($edad>=18 ){
                echo"Eres mayor de edad ";
        }else {
            echo "Eres menor de edad";
        }
    }  
}
            ?><br><br><br>
<a href="practica9.php">Practica9</a>
        </section>
    </main>
    <footer>Arturo solis</footer>
    </center>
</body>
</html>