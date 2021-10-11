<?php
$host="localhost";
$user="root";
$password="";
$db="crud";

 $conn = mysqli_connect($host,$user,$password,$db);
 if($conn){
     ?>
     <!-- <script>
         alert('Connection was sucessfully');
     </script> -->
     <?php
 }
else{
    ?>
     <script>
         alert('Connection not sucessfully');
     </script>
     <?php
}?>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.min.js" integrity="sha384-PsUw7Xwds7x08Ew3exXhqzbhuEYmA2xnwc8BuD6SEr+UmEHlX8/MCltYEodzWA4u" crossorigin="anonymous"></script>
    
