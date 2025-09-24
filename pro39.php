<!DOCTYPE html>
<html lang="en">
<head>

    <title>program 39</title>
</head>
<body>
       <form action="" method="get">
   <label for="">marks</label>
   <input type="number" name="marks"> <br> <br>
   
   <button>Submit</button>
  </form>
</body>
</html>
<?php 
    $marks=$_GET['marks'];

    if($marks >=40){
        echo "pass";
    }
   else{
    echo "fail";
   }
?>