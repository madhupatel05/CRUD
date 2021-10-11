<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD</title>
  <link rel="stylesheet" href=".\style\style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

  <header class="heder">
    <h1>CRUD</h1>
  </header>
  <?php
       include('nav.html');
       include('conn.php');
  
    $sql = "SELECT * FROM student ";
    $result = mysqli_query($conn,$sql);
     if(mysqli_num_rows($result) > 0){
       ?>

  <table class="table table-striped table-hover">
    <tr>
      <th>ID</th>
      <th>SNAME</th>
      <th>CLASS</th>
      <th>Action</th>
    <tr>
      <?php
                $i =0;
                while($row = mysqli_fetch_assoc($result)){
                  
                  $i = $i+1; ?>

      <th scope="row">
        <?php echo $i?>
      </th>
      <td>
        <?php echo $row['name']?>
      </td>
      <td>
        <?php echo $row['class']?>
      </td>
      <td>
        <a style = "background-color:red; text-decoration:none; padding:5px;margin:2px;
        border:2px solid red; color:black;"  href="delete.php? id=<?php echo $row['id'];?>" > Delete</a>
        <a   style = "background-color:green; text-decoration:none; padding:5px;
        border:2px solid green; color:black;margin:2px;"
         href="update.php? id=<?php echo $row['id'];?>" > Update</a>
      </td>

    </tr>
    <?php } ?>
  </table>
  <?php }
      else "<h2>No record found </h2>" ;
      mysqli_close($conn);?>
</body>

</html>