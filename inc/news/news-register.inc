<?php
  $conexion=mysqli_connect("localhost","root","","paper")
  or die("failed connection");
  $namtitle = $_REQUEST['title'];
  $namtitle = mysqli_escape_string($conexion,$namtitle);
  $texBody = $_REQUEST['body'];
  $texBody = mysqli_escape_string($conexion,$texBody);
  $namimage = $_FILES['image']['tmp_name'];
  $namimage1 = $_FILES['image']['name'];
  $namimage1 = preg_replace('/[^a-z0-9\.]/i', '', $namimage1);
  move_uploaded_file($namimage,'uploads/'.$namimage1);
  mysqli_query($conexion,"insert into news(title,image,body) values('$namtitle','/$namimage1','$texBody')")
  or die("register failed".mysqli_error($conexion));
  mysqli_close($conexion);
  echo "Good news, your news item is on the air";
?>
