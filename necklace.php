<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sparkle.Co Necklaces</title>

	<link rel="stylesheet" type="text/css" href="necklace.css" media="screen">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

</head>
<body>

	<div class="banner">
        			<center>
        			<div id="banner">
        				<a href="index.php">
        				<img class="img-fluid px-3 mt-3" style="width: 30%;"
                                                  src="banner.png" alt="Banner">
                        </a>
        			</center>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">HOME</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="necklace.php">NECKLACES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="ring.php">RINGS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="earring.php">EARRINGS</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Engagement Ring" aria-label="Search">
          <button class="btn btn-dark my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>

    <?php  
    	$products = [
    		['image' => 'Necklace/N1.jpg', 'name' => 'Diamond Infinity Necklace', 'price' => 29999.99, 'desc' => "A meaningful infinity symbol is embellished with beautiful round diamonds and punctuated by a shimmering heart in this memorable women's necklace"],
    		['image' => 'Necklace/N11.webp', 'name' => 'Le Vian Natural Opal', 'price' => 55249.55, 'desc' => "A dazzling cushion-cut natural opal is topped by a bevy of garnet, citrine, sapphire, amethyst and diamond accents in this lively women's necklace"],
    		['image' => 'Necklace/N10.jpg', 'name' => 'Diamond Heart Necklace ', 'price' => 39999.99, 'desc' => "A delicate heart is traced with sparkling round diamonds in this sentimental women's necklace"],
    		['image' => 'Necklace/N12.webp', 'name' => 'Le Vian Natural Amethyst', 'price' => 55249.55, 'desc' => "An enticing oval-cut natural Grape Amethyst® is haloed by sweet Vanilla Diamonds® in this stunning women's necklace"],
        ['image' => 'Necklace/N13.webp', 'name' => 'Diamond Heart Knot Necklace', 'price' => 9999.50, 'desc' => "This lovely necklace from the Forever Knots collection features a heart with a swirl of 10K rose gold entwined into a knot and a swirl of round diamonds set in sterling silver. "],
        ['image' => 'Necklace/N14.webp', 'name' => 'Natural Ruby Necklace', 'price' => 39999.99, 'desc' => "A pear-shaped ruby encircled by brilliant round diamonds forms the center of this exquisite women's necklace. Additional round diamonds adorn the bail to complete the look"],
        ['image' => 'Necklace/N15.webp', 'name' => 'Peridot Necklace Diamond Accent', 'price' => 6499.50, 'desc' => "A striking marquise peridot is accompanied by sparkling round diamond accents in this sterling silver necklace for her"],
        ['image' => 'Necklace/N16.webp', 'name' => 'Mother & Child Necklace Diamond Accent', 'price' => 8999.50, 'desc' => "A diamond accents the outline of a mother embracing her child in this fine jewelry necklace for her from the Mother & Child® collection"]
    		
    	];

    ?>

<section class="container-fluid">
     <div class="row">
           <?php 
           	for($i=0; $i<count($products); $i++){?>
           		<div class="col-sm-3">
                
                <h2>
                <?php

                echo "<img src='" . $products[$i]['image'] .  "'>" . "<br>" . $products[$i]['name'] . "<br>" . "Price: " . $products[$i]['price'] .
                "<br>" . $products[$i]['desc'] . "<br>";
                ?>
                </h2>
           </div>


           <?php  }?>
 
     </div>
</section>


<?php
echo '<br><br><br><br><br><br><br><br><br>';

?>


<footer class="bg-light text-center text-white">
  <!-- Grid container -->

  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">
        <div class="caption">
          <p class="text-dark">SHARE HOW YOU SPARKLE!</p>
        </div>
      <!-- Facebook -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #3b5998;"
        href="#!"
        role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->

      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #55acee;"
        href="#!"
        role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #dd4b39;"
        href="#!"
        role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #ac2bac;"
        href="#!"
        role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #0082ca;"
        href="#!"
        role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>
      <!-- Github -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #333333;"
        href="#!"
        role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2021 Copyright:
    <a class="text-white" href="index.php/">Sparkle.Co</a>
  </div>
  <!-- Copyright -->
</footer>

</body>
</html>