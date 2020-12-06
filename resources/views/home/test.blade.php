<!DOCTYPE html>
<html>
<head>
    <title> Laravel Test Page</title>
</head>
<body>

<h1>Laravel Test</h1>
 <?php
    echo "Id number:".$id."<br>"."name:".$name;
    for ($i=0;$i<$id;$i++){
        echo "<br> $i-$name";
    }
 ?>

  <br>
   <a href="{{route('anasayfa')}}">anasayfa</a>


</body>
</html>
