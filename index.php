<?php
include("connection.php");
$con = connection();

$sql = "SELECT * FROM games";
$query = mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="CSS/style.css" rel="stylesheet">
    <title>Videojuegos CRUD</title>
</head>
<body>
    <div class="games-form">
        <form action="insert_game.php" method="POST">
            <h1>Crear Videojuego</h1>

            <input type="text" name="name" placeholder="Nombre de Videojuego">
            <input type="text" name="developer" placeholder="Desarrollador">
            <input type="text" name="yearrelease" placeholder="Año de Salida">
            <input type="text" name="genre" placeholder="Género">
            <input type="text" name="esrb" placeholder="Clasificación de Edad">

            <input type="Submit" value="Agregar Videojuego">
        </form>
    </div>

    <div class="games-table">
        <h2>Videojuegos Registrados</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre de Videojuego</th>
                    <th>Desarrollador</th>
                    <th>Año de Salida</th>
                    <th>Género</th>
                    <th>Clasificación de Edad</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                <?php while($row = mysqli_fetch_array($query)): ?>
                <tr>
                    <th> <?= $row['id'] ?> </th>
                    <th> <?= $row['name'] ?> </th>
                    <th> <?= $row['developer'] ?> </th>
                    <th> <?= $row['yearrelease'] ?> </th>
                    <th> <?= $row['genre'] ?> </th>
                    <th> <?= $row['esrb'] ?> </th>

                    <th><a href="update_game.php?id=<?= $row['id'] ?>" class="games-table--edit">Editar</a></th>
                    <th><a href="delete_game.php?id=<?= $row['id'] ?>" class="games-table--delete" >Eliminar</a></th>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

</body>
</html>