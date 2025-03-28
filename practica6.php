<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><center>
    <header>
        <h1><mark>Dado 3 numeros, devolver en orden ascendente</mark></h1>
    </header>
    <main>
        <section>  
            <form method="POST">
                <label for="numero">Ingresa el primer numero </label>
                <input type="number" id="numero" name="numero" required><br>
                <label for="numero2">Ingresa el segundo numero</label>
                <input type="number" id="numero2" name="numero2"><br>
                <label for="numero3">Ingresa el tercer numero</label>
                <input type="number" id="numero3" name="numero3"><br>
                <button type="submit">Enviar</button>
            </form>
            <?php
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                if(isset($_POST["numero"])&&(isset($_POST["numero2"]))&&(isset($_POST["numero3"]))){
                $num1=$_POST['numero'];
                $num2=$_POST['numero2'];
                $num3=$_POST['numero3'];
                if($num1>$num2||$num1>$num3){
                    $mayor=$num1;
                }else if($num2>$num3||$num2>$num1){
                    $mayor=$num2;
                }else{
                    $mayor=$num3;
                }
                echo"El numero mayor es: $mayor";
                if($num1<$num2|| $num1<$num3){
                $menor=$num1;
                }else if($num2<$num3||$num2<$num1){
                $menor=$num2;
                }else{
                    $menor=$num3;
                }
                echo "El numero menor es: $menor";

                $suma=$num1+$num2+$num3-($mayor-$menor);
                echo"El numero intermedio es: $suma";
}
}
    ?><br><br><br>
            <a href="practica7.php">Practica 7</a>
        </section>
    </main>
    <footer>Arturo Solis</footer>
</center>
</body>
</html>