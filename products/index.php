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

    <section id="hero">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <div class="abt-banner-content-padding">
              <h1 class="clr-white">Our products</h1>
              <p class="clr-white">
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <p class="clr-red text-uppercase sub-title">
              <span class="sub-num text-uppercase">1.</span> #new
            </p>

            <h2 class="clr-dark mt-3">
              Medical materials for<br>healthcare
            </h2>
            
            <p class="mt-5">
              We, Galembic International Limited, the sole representative of Cooley Group Inc
              (US) products in Nigeria; are manufacturers of avant-grade engineered Medical
              materials used for production of medical protective wears, gears and 
              equipment 
            </p>

            <a href="health-care" class="btn btn-more clr-gray text-uppercase bg-gray">learn more</a>
          </div>
        </div>
      </div>
    </section>

    <section class="section-padding bg-pink">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h2 class="clr-dark mt-3">
              Engineered membranes.
            </h2>
            
            <p class="mt-5">
              We, Galembic International Limited, the sole representative of Cooley Group Inc
              (US) products in Nigeria; are manufacturers of avant-grade engineered Medical
              materials used for production of medical protective wears, gears and 
              equipment 
            </p>
          </div>

          <div class="col-md-5">
            <img src="../img/engineered-membrane.png" class="float-lg-right">
          </div>
        </div>
      </div>
    </section>

    <section class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h2 class="clr-dark mt-3">
              Building products.
            </h2>
            
            <p class="mt-5">
              For the commercial roofing - The Cooley high-performance single-ply roofing
              membranes have been private-labeled by the leading building materials 
              suppliers in the world 
            </p>
          </div>

          <div class="col-md-5">
            <img src="../img/building-products.png" class="float-lg-right">
          </div>
        </div>
      </div>
    </section>

    <section class="section-padding bg-pink">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h2 class="clr-dark mt-3">
              Commercial graphics.
            </h2>
            
            <p class="mt-5">
              Cooley/Commercial Graphics developes the most innovative products and 
              sustainable solutions for the print media industry - for billboards to banners 
              and wallpapers. 
            </p>
          </div>

          <div class="col-md-5">
            <img src="../img/commercial-graphics.png" class="float-lg-right">
          </div>
        </div>
      </div>
    </section>

    <?php
    include "../include/products-footer.php"   
    ?>
  </body>
</html>