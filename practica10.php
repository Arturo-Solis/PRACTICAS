<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> <center>  
    <header>
        <h1><mark>Despues de ingresar 4 notas, obtener el promedio e las 3 mejores notas</mark></h1>
    </header>
    <main>
        <section>
            <form method="POST">
                <label for="nota1">Ingresa la primer nota</label>
                <input type="number" id="nota1" name="nota1" required><br>
                <label for="nota2">Ingresa la segunda nota</label>
                <input type="number" id="nota2" name="nota2" required><br>
                <label for="nota3" >Ingresa la tercera nota</label>
                <input type="number" id="nota3" name="nota3" required><br>
                <label for="nota4">Ingresa la cuarta nota</label>
                <input type="number" id="nota4" name="nota4" required><br>
                <button type="submit">Enviar</button>
            </form>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(isset($_POST["nota1"]) && isset($_POST["nota2"])&& isset($_POST["nota3"])&& isset($_POST["nota4"])){
            $n1=$_POST['nota1'];
            $n2=$_POST['nota2'];
            $n3=$_POST['nota3'];
            $n4=$_POST['nota4'];

            $notas= array($n1,$n2,$n3,$n4);
            rsort($notas);

            $promedio= ($notas[0]+ $notas[1]+ $notas[2])/3;

            echo"<p>El promedio de las 3 mejores notas es: ". number_format($promedio, 2). "</p>";

            if($promedio>=6){
                echo"<p> APROVADO </p>";
            }else{
                echo "<p> REPROBADO </p>";
            }
        }
    }
    ?><br><br><br>
<a href="index.php">Index </a>
        </section>
    </main>
    <footer>Arturo Solis</footer>
    </center>
</body>
</html>