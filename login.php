<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
   $host="localhost";
   $user="root";
   $password="";
   $db = "mydb";

//    DATA BASE CREATION 
   $conn = mysqli_connect($host,$user,$password,$db);
   if($conn){
       echo ("connection sucessfully");
   }
   else{
       echo("not sucessfully");
   }

   if(isset($_POST['submit'])){
       $task = $_POST['task'];

       echo($task);
// DATA BASE INSERTION
       $sql = "INSERT INTO `todo`(`Task`) VALUES ('$task')" ;
      $re =  mysqli_query($conn,$sql);
      if($re){
        echo ("insertion sucessfully");
    }
    else{
        echo("not sucessfully");
    }
    // Delete data
    $delete = " DELETE FROM todo WHERE sno. = 20 ";
    if(mysqli_query($conn,$delete))
    echo("successfully delete");
    else{
        echo"niiiiiiiiiii";
    }
// DATA BASE READ

  }
 
    ?>
    <style>
        div{
            background-color: rgb(199, 190, 177);
            box-shadow:5px 5px rgb(156, 154, 154) ;
            width: 20%;
            margin:0px auto;
            position:relative;
            top:90px;padding: 10px;
        }
        /* form input{
            width: 50%;
            height: 50%;
        } */
    </style>
</head>
<body>
    <div>
        <form action="" method = "post">
        Task :<input type="text" name = "task"><br><br>
        <input type="submit" value="Add" name = "submit">
     </form>
    </div>
    <!-- Data base read.............. -->
<?php
$sqli = "SELECT * FROM todo ";
$rr = mysqli_query($conn,$sqli);
if(mysqli_num_rows($rr)>0){
    ?>
   <table>
       <tr>
           <th>Sno.</th>
           <th>Task</th>
         </tr>
         <?php
   while($row = mysqli_fetch_assoc($rr)){
       ?>
       <tr>
           <td><?php echo $row['sno.']?></td>
           <td><?php echo $row['Task']?></td>
        </tr>
        <?php
       }
       ?>
  