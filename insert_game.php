<?php
include("connection.php");
$con = connection();

$id = null;
$name = $_POST['name'];
$developer = $_POST['developer'];
$yearrelease = $_POST['yearrelease'];
$genre = $_POST['genre'];
$esrb = $_POST['esrb'];

$sql = "INSERT INTO games VALUES ('$id','$name','$developer',$yearrelease,'$genre','$esrb')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>