<?php 
    include("connection.php");
    $con=connection();

    $id=$_GET['id'];

    $sql="SELECT * FROM games WHERE id='$id'";
    $query=mysqli_query($con, $sql);

    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Editar Videojuego</title>
        
    </head>
    <body>
        <div class="games-form">
            <form action="edit_game.php" method="POST">
                <input type="hidden" name="id" value="<?= $row['id']?>">
                <input type="text" name="name" placeholder="Nombre" value="<?= $row['name']?>">
                <input type="text" name="developer" placeholder="Desarrollador" value="<?= $row['developer']?>">
                <input type="text" name="yearrelease" placeholder="Año de Salida" value="<?= $row['yearrelease']?>">
                <input type="text" name="genre" placeholder="Género" value="<?= $row['genre']?>">
                <input type="text" name="esrb" placeholder="Clasificación de Edad" value="<?= $row['esrb']?>">

                <input type="submit" value="Actualizar">
            </form>
        </div>
    </body>
</html>