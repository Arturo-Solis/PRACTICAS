<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><center>  
    <header> 
    <h1><mark> Determina si un numero es multiplo de 3 y 5</mark></h1>
        </header>
        <main>
            <section>

    <form method="POST">
        <label for="numer">Ingrese un numero</label><br>
        <input type="number" id="numer" name="numer" required><br><br>
        <button type="submit">Enviar</button><br><br>
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST["numer"])) {
            $num=$_POST['numer'];
            if($num% 3==0){
                echo"El $num es multiplo de 3";
        }else if($num% 5==0){
            echo "El $num es multiplo de 5";
        }else{
            echo "El $num no es multiplo ni de 3 ni de 5";
        }
    }
    }
    ?><br><br><br>
<a href="practica4.php">Practica 3</a>
</section>
        </main>
        <footer>Arturo Solis</footer>
    </center>
</body>
</html>