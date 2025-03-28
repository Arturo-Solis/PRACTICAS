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
    <mark><h1>Dado un caracter determina si es una vocal</h1> </mark>
    </header>
    <main>
        <section>

    <form method="POST">
        <label for="letra">Ingresa un caracter</label>
        <input type="text" id="letra" name="letra">
        <button type="submit">Enviar</button>
    </form>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST["letra"])){
        $letra=$_POST['letra'];
        if($letra=='a'|| $letra=='A'){
            echo"Esta letra es una vocal";
        }else if($letra=='e'||$letra=='E'){
            echo "Esta letra es una vocal";
        }else if($letra=='i'||$letra=='I'){
            echo "Esta letra es una vocal";
        }else if($letra=='o'||$letra=='O'){
            echo "Esta letra es una vocal";
        }else if($letra=='u'||$letra=='U'){
    echo "Esta letra es una vocal";
}else{
    echo "Esta letra no es una vocal";
}
}}
?><br><br><br>
<a href="practica3.php">Practica 3</a>
</section>
        </main>
        <footer>Arturo Solis</footer>
</center>
</body>
</html>