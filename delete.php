<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Delete</title>
    <style>
        .head { margin-top: 20px; }
        h2, p { text-align: center;text-transform: capitalize; }

        #delete { margin: 50px auto;width: 30%;height: 200px;
                   background-color: rgb(204, 199, 192);}
        #delete {margin: 10px 25px;padding: 5px;  }

        #delform input {margin: 8px;}

        #del {
            position: relative;color: white;outline: none;border-radius: 5px;
            left: 170px;border: 1px solid red;
            background-color: red;top: 10px; padding: 10px 18px;  }
    </style>

</head>

<body>
    <!-- including navbar file ...  -->
    <?php
       include('nav.html');
    ?>
    <!-- headings. -->
    <div class="head">
        <h2 style="margin-top: 10px;">Delete student record</h2>
    </div>

 <div id="delete">
     <!--  access all  data for perticular id -->
    <?php
      $id = $_GET['id'];
      $sql = "SELECT * FROM student WHERE id = {$id} ";
      $result = mysqli_query($conn,$sql);
      if(mysqli_num_rows($result) > 0){
     while($row = mysqli_fetch_assoc($result)){

        //  it will be close on end
   ?>
   <!-- Student detail form for deleting  -->

        <form id="delform" action="del.php" method="post">
            <label for="ID">Student ID : </label>
            <input type="text" placeholder="Enter  student ID " name="id" value="<?php echo $row['id']?>"><br>
            
            <label for="name"> Student Name :</label>
            <input type="text" name="name" value="<?php echo $row['name']?>"><br>

            <label for="ID">Class :</label>
             <input type="text" name="class" value="<?php echo $row['class']?>">

            <input type="submit" id="del" value="Delete" name="delete">
        </form>
        <!-- close of while and if block ...  -->
        <?php 
        } 
      }
      ?>
      
    </div>
</body>

</html>