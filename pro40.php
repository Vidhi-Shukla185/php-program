<!DOCTYPE html>
<html lang="en">
<head>

    <title>program 40</title>
</head>
<body>
     <form action="" method="get">
     <label for="name">Name:</label>
     <input type="text" name="name" id=""> <br> <br>
       <input type="submit" value="submit">
</form>

     <?php
    $name =$_GET["name"];
    echo "Welcome $name";

?>
</body>
</html>