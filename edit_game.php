<?php

include("connection.php");
$con = connection();

$id=$_POST["id"];
$name = $_POST['name'];
$developer = $_POST['developer'];
$yearrelease = $_POST['yearrelease'];
$genre = $_POST['genre'];
$esrb = $_POST['esrb'];

$sql="UPDATE games SET name='$name', developer='$developer', yearrelease=$yearrelease, genre='$genre', esrb='$esrb' WHERE id='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>