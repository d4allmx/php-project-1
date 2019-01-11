<?php
  $conexion = mysqli_connect("localhost","root","admin","paper")
  or die("failed connection");
  $namtitle = $_REQUEST['title'];
  $namtitle = mysqli_escape_string($conexion,$namtitle);
  $texBody = $_REQUEST['body'];
  $texBody = mysqli_escape_string($conexion,$texBody);
  $namimage = $_FILES['image']['tmp_name'];
  $namimage1 = $_FILES['image']['name'];
  $namimage1 = preg_replace('/[^a-z0-9\.]/i', '', $namimage1);
  $path = '/uploads/' . $namimage1;
  printf ($path);
  printf ($namimage);
  $status = move_uploaded_file($namimage, $path);
  $status = copy($tempFile, $targetFile);
if($status) {
  echo 'its good';
} else {
  echo 'it failed';
}
printf ($_FILES['userfile']['error']);

  exit;
  mysqli_query($conexion,"insert into news(title,image,body) values('$namtitle','/$namimage1','$texBody')")
  or die("register failed".mysqli_error($conexion));
  mysqli_close($conexion);
?>
<div class="container" id="register">
<h1>Good news, your news item is on the air.</h1>
</div>
