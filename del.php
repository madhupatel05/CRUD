<?php
include('conn.php');
echo("now you are in upate page");
$id = $_POST['id'];
$sql = "DELETE FROM `student`  WHERE id = $id ";
 $result = mysqli_query($conn, $sql);
 header("Location: curd.php");
 ?>