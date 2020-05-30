<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="robots" content="index, follow">
    <title>Galembic</title>
    <link rel="shortcut icon" type="image/svg" href="../imgs/logo-main.svg">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/slick.css"/>
    <link rel="stylesheet" type="text/css" href="../css/slick-theme.css"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:600&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://use.typekit.net/iyy7dpb.css">
  </head>

  <body>
    <!-- Header -->
    <?php
    $products = 'active';
    include "../include/products-header.php"   
    ?>

    <section class="products-banner-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="">Medical materials for <span class="clr-red">healthcare</span>.</h1>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 pl-0 pr-0">
            <img src="../img/bg-meds.jpg" alt="" class="img-fluid">
          </div>
        </div>
      </div>
    </section>

    <section class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2>Our solution.</h2>

            <p class="mt-4">
              We, Galembic International Limited, the sole representative of Cooley Group Inc (US) products in Nigeria; are manufacturers of avant-garde engineered medical materials used for the production of medical protective wears, gears and equipment. 
              <br><br>
              These materials are available in convenient rolls, to be fabricated into finely finished products/materials such as blood pressure cuffs membrane, medical mattress cover, safety suits, body bags, portable structural cover, etc. 
              <br><br>
              These materials are sure guarantee to cut down your production cost and deliver the best engineered medical products with unmatchable quality
            </p>
          </div>

          <div class="col-md-6">
            <img src="../img/med-solution.jpg" alt="" class="img-fluid">
          </div>
        </div>
      </div>
    </section>
    <?php
    include "../include/products-footer.php"   
    ?>
  </body>
</html>