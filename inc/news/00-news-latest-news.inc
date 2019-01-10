<?php
    $conexion=mysqli_connect("localhost","root","","paper")
    or die ("no se pudo conectar");
    $registros=mysqli_query($conexion,"select * from news order by upload desc")
    or die ("error en la consulta: ".mysqli_error($conexion));
    mysqli_close($conexion);
?>
<div id="latest-news" class="container-fluid">
  <h1>LATEST NEWS</h1>
  <div class="line"></div>
  <div class="row">
    <div class="col-sm-4">
      <div class="inner">
        <?php
        mysqli_data_seek ($registros,0);
        $row = mysqli_fetch_array($registros);
        printf('<img src="uploads');
        printf($row[2]);
        printf('" class="img-responsive">');
        printf('<a href="#">');
        printf($row[1]);
        printf('</a>');
        printf('<p>');
        printf($row[3]);
        printf('</p>');
        ?>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="inner">
        <?php
          mysqli_data_seek ($registros,1);
          $row = mysqli_fetch_array($registros);
          printf('<img src="uploads');
          printf($row[2]);
          printf('" class="img-responsive">');
          printf('<a href="#">');
          printf($row[1]);
          printf('</a>');
          printf('<p>');
          printf($row[3]);
          printf('</p>');
        ?>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="inner">
        <?php
          mysqli_data_seek ($registros,2);
          $row = mysqli_fetch_array($registros);
          printf('<img src="uploads');
          printf($row[2]);
          printf('" class="img-responsive">');
          printf('<a href="#">');
          printf($row[1]);
          printf('</a>');
          printf('<p>');
          printf($row[3]);
          printf('</p>');
        ?>
      </div>
    </div>
  </div>
</div>