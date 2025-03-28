<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><center>  
    <header>
        <h1><mark>dado un numero, devolver el doble si el numero no es par, caso contrario devolver el triple </mark></h1>
    </header>
    <main>
        <section>
            <form method="POST">
                <label for="numero">Ingresa un numero: </label><br>
                <input type="number" id="numero" name="numero" required><br>
                <button type="submit">Enviar</button>
            </form>
            
            <?php
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                $num=$_POST['numero'];
                if($num%2== 0){
                    echo"El numero es par <br>";
                    echo"El resultado es ".($num*2);
                }else{
                    echo "El numero es impar<br>";
                    echo "El resultado es".($num*3);

                }
            }
            ?><br><br><br>
<a href="practica6.php">Practica 6</a>
        </section>
    </main>
    <footer>Arturo Solis</footer>
    </center>
</body>
</html>