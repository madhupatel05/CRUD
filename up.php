<?php
include('conn.php');

$id = $_POST['id'];
$name = $_POST['name'];
$class = $_POST['class'];


$sql= "UPDATE student SET  name  = '$name' ,  class  = '$class'  WHERE id = $id ";
$result = mysqli_query($conn,$sql);
if($result){
    ?>
     <script>
         alert("insertion sucessful");
     </script>
   <?php
        } 
    header("Location: curd.php");
 
?>