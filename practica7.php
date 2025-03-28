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
            <h1><mark>Elabore un algoritmo que resuelva una ecuacion de primer grado </mark></h1>
        </header>
        <main>
            <section>
                <form method="POST">
                    <label for="num1">Ingresa un valor "a": </label><br>
                    <input type="number" id="num1" name="num1"><br>
                    <label for="num2">Ingrese un valor "b"</label><br>
                    <input type="number" id="num2" name="num2"><br>
                    <button type="submmit">Enviar</button>
                </form>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
    if (isset($_POST['num1']) && isset($_POST['num2'])) {
        $a=$_POST['num1'];
        $b=$_POST['num2'];

        if($a != 0){
            $x = (-$b / $a);
            echo"El resultado de x es: $x";
        }else{
            echo"a no se puede dividir entre 0";
        }
    }
    }
    ?><br><br><br>
<a href="practica8.php">Practica 8</a>
            </section>
        </main>
        <footer>Arturo solis</footer>
    </center>
</body>
</html>