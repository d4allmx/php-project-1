<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include('inc/html.head.inc'); ?>
    <title>HomePage | PHP Project 1</title>
  </head>

  <body>
    <?php include('inc/header.inc'); ?>

    <div class="partners container-fluid">
      <h1>PARTNERS</h1>
      <div class="row">
        <div class="puma col-md-3">
          <img src="img/puma.png" alt="puma1">
          <h4>Puma</h4>
          <p>The company offers lines of shoes and sports clothing. Puma is a sponsor of many sporting events.</p>
        </div>
        
        <div class="nike col-md-3">
          <img src="img/nike.png" alt="nike1">
          <h4>Nike</h4>
          <p>Nike pays top athletes in many sports to use their products and promote and advertise their technology and design.</p>
        </div>
        
        <div class="reebok col-md-3">
          <img src="img/reebok.png" alt="reebok1">
          <h4>Reebok</h4>
          <p>Reebok produces and distributes fitness and sports items including shoes, workout clothing and accessories.</p>
        </div>
        
        <div class="adidas col-md-3">
          <img src="img/adidas.png" alt="adidas1">
          <h4>Adidas</h4>
          <p>It’s a German multinational corporation that designs and manufactures sports shoes, clothing and accessories.</p>
        </div>
      </div>

      <div class="partners-cta" align="center">
        <input type="button" value="Read More">
      </div> 
    </div> <!-- /container -->

    <?php include('inc/footer.inc'); ?>
    <?php include('inc/html.scripts.inc'); ?>
  </body>
</html>
