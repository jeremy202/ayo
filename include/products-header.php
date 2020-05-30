<!-- Nav Bar-->
<section id="navbar">
  <nav class="navbar navbar-expand-lg navbar-light bg-white"> 
    <div class="container">
			<a class="navbar-brand" href="index"><img src="../img/galembic-logo.png" class="img-fluid logo-img mr-5"/></a>
      <a class="navbar-toggler" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" id="navigationBtn">
        <span class="navbar-toggler-icon"></span>
      </a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item mr-4 nav-br">
            <a class="nav-link text-uppercase <?php if(isset($home)){echo $home;} ?>" href="../">Home</a>
          </li>
          <li class="nav-item mr-4 nav-br">
            <a class="nav-link text-uppercase <?php if(isset($about)){echo $about;} ?>" href="../about">About</a>
          </li>
          <li class="nav-item mr-4 nav-br">
            <a class="nav-link text-uppercase <?php if(isset($services)){echo $services;} ?>" href="../service">Services</a>
          </li>
          <li class="nav-item mr-4 nav-br">
            <a class="nav-link text-uppercase <?php if(isset($products)){echo $products;} ?>" href="../products">Products</a>
          </li>
          <li class="nav-item mr-4 nav-br">
            <a class="nav-link text-uppercase <?php if(isset($gallery)){echo $gallery;} ?>" href="../gallery">Gallery</a>
          </li>
        </ul>

        <ul class="navbar-nav ml-auto">
          <li class="nav-item nav-br">
            <a href="#" class="btn btn-contact clr-red text-uppercase">contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</section>