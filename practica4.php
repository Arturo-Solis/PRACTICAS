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
        <h1><mark>Determina si un numero es par o impar </mark></h1>
    </header>
    <main>
        <section>

    <form method="POST">
        <label for="numero">Ingresa un numero: </label><br>
        <input type="number" id="numero" name="numero"><br><br>
        <button type="submit">Enviar</button><br>
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(isset($_POST["numero"])){
            $num=$_POST['numero'];
            if($num%2==0){
                echo"El $num es un numero par.";
        }else{
            echo "El $num es un numero impar.";
    }
}
}
    ?><br><br><br>
    <a href="practica5.php">Practica 5</a>
    </section>
        </main>
        <footer>Arturo Solis</footer>
    </center>
</body>
</html>