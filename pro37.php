<!DOCTYPE html>
<html lang="en">
<head>

    <title>program 37</title>
</head>
<body>
      <form action="" method="get">
   <label for="">Name</label>
   <input type="text" name="name"> <br><br>
   <label for="">Age</label>
   <input type="text" name="age"> <br><br>
   <button>Submit</button>
  </form>
</body>
</html>
<?php
    $name=$_GET['name'];
    $age=$_GET['age']; 
    echo "hello $name you are $age years old.";



?>