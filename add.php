<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD</title>
    <link rel="stylesheet" href=".\style\style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" >

</head>
<body>
<?php
       include('nav.html');
       include('conn.php');
      if(isset($_POST['add']))
      {
          $name = $_POST['name'];
          $class = $_POST['class'];
          

          $sql= "INSERT INTO `student`( `name`, `class`) VALUES ('$name','$class')";
          $result = mysqli_query($conn,$sql);
          if($result){
              ?>
              <script>
                  alert("insertion sucessful");
              </script>
              <?php }
             header("Location: curd.php");
      }
  ?>
   <div class="loginform">
     <div>
    <h3> ADD student</h3>
     </div>
 <form action="" method = "post">
    <label for="name"> </label>
    <input type="text"  placeholder="Student id / optional"  name="id"  >  <br>

    <label for="class"></label>
    <input type="text"   placeholder="Student Name"   name="name" requred>  <br>
    <label for="class"></label>
    <input type="text"   placeholder="Class / Semester"   name="class" requred>  <br>
    
  

     <input type="submit"id="login" value="ADD" name="add">
</form>
</body>
</html>