<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <style>
        h1 {
            text-align: center;
        }

        form {
            width: 25%;
            margin: auto;
            padding: 10px;
            padding-bottom: 50px;
            background-color: rgb(196, 193, 189);
        }

        form input {
            padding: 5px;
            margin: 12px;
        }

        #update {
            outline: none;
            border: 1px solid rgb(46, 190, 10);
            position: relative;
            float: right;
            margin-top: 2px;
            margin-right: 23px;
            padding: 5px;
            font-size: 20px;
            box-shadow: 2px 2px rgb(128, 126, 126);
            border-radius: 3px;
            background-color: rgb(46, 190, 10);
        }
    </style>
    <?php
 include('conn.php');   
 ?>
</head>

<body>
     <?php
       include('nav.html');
    //    Get value from URL bar.....
         $id = $_GET['id'];
         
  //  Selet student from id  = sid....
         $sql = "SELECT * FROM student WHERE id = {$id} ";
         $result = mysqli_query($conn,$sql);
         if(mysqli_num_rows($result) > 0){
             while($row = mysqli_fetch_assoc($result)){
    ?>

    <div>
        <h1>Update Records</h1>
    </div>
    <form action="up.php" method="post">

        <!-- Set values to  the form ... -->
        ID : <input type="text" name="id" value="<?php echo $row['id']?>"><br>
        Name : <input type="text" name="name" value="<?php echo $row['name']?>"><br>
        Class : <input type="text" name="class" value="<?php echo $row['class']?>"><br>
        <input type="submit" value="update" name="update">
    </form>
    
    <?php }  }?>

</body>

</html>