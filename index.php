<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

	<title>Sparkle.Co</title>
	<link rel="stylesheet" type="text/css" href="index.css" media="screen">
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

<?php echo "<h2 style='text-align:center;'><br>What's New?<br><br></h2>";
           ?>

<div class="container">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div class="card-group">
  
            
            <div class="row">
                <div class="card col-md-4">
                    <img class="card-img-top" src= "1ad.png">
                </div>
  
                <div class="card col-md-4">
                    <img class="card-img-top" src="2ad.png">
                </div>
                <div class="card col-md-4">
                    <img class="card-img-top" src="3ad.png">
                </div>
 
            </div>
        </div>
    </div>
</div>

<div class="PRODUCTS">
            <center>
            <div id="prod">
            <img class="float-left" style="width: 15%";
                                            src="prodB.jpg" alt="Banner">
            </center>
</div>


<?php 

    echo "<h2 style='text-align:center;'><br>Get Inspired. Shine Now!<br><br></h2>";

 ?>

<div class="row">
  <div class="col-md-4">
    <div class="thumbnail">
        <img src="Earring/E1.jpg" class="rounded mx-auto d-block" alt="..." style="width:50%">
        <div class="caption">
          <p style='text-align:center;'>Pave Diamond Round Studs</p>
        </div>
    </div>
      </a>
    
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
        <img src="Necklace/N3.webp" class="rounded mx-auto d-block" alt="..." style="width:50%">
        <div class="caption">
          <p style='text-align:center;'>Pave Diamond Flower Necklace</p>
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
        <img src="Ring/R1.jpg" class="rounded mx-auto d-block" alt="..." style="width:50%">
        <div class="caption">
          <p style='text-align:center;'>Heirloom Ring</p>
        </div>
      </a>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-4">
    <div class="thumbnail">
        <img src="Earring/E2.jpg" class="rounded mx-auto d-block" alt="..." style="width:50%">
        <div class="caption">
          <p style='text-align:center;'>Flower Hoop Earrings</p>
        </div>
    </div>
      </a>
    
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
        <img src="Necklace/N4.jpg" class="rounded mx-auto d-block" alt="..." style="width:50%">
        <div class="caption">
          <p style='text-align:center;'>Moonstone Diamond</p>
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
        <img src="Ring/R1.jpg" class="rounded mx-auto d-block" alt="..." style="width:50%">
        <div class="caption">
          <p style='text-align:center;'>Diamond Accent Vintage Style</p>
        </div>
      </a>
    </div>
  </div>
</div>

<div class="PRODUCTS">
            <center>
            <div id="prod">
            <img class="float-left" style="width: 15%";
                                            src="priceB.jpg" alt="Banner">
            </center>
</div>

<?php 

        echo "<br>";

     ?>

                         <div class="row">
                            <div class="col-lg-4 mb-4"> 
                                <div class="card shadow mb-4">
                                    <div class="text-center">
                                        <img class="img-fluid px-3 mt-3" style="width: 75%;"
                                            src="Earring/E4.jpg" alt="...">
                                            
                                    </div>
                                    <div class="card-body">
                                        <?php

                                            $earrings[0] = array(
                                            'name' => 'Glitter Enamel Double Hoop',
                                            'price' => 16087.50,
                                            'category' => 'Earrings',
                                            'description' => 'Crafted in 14K gold, each earring features a smaller round polished hoop and a larger oval-shaped hoop that glimmers with a glitter enamel finish. Buffed to a brilliant luster, these earrings secure with latch backs.'
                                            );

                                            ?>

                                        <?php 
                                        
                                        foreach($earrings as $earring) {
                                        echo "<p style='text-align:center;'>" . "Name: " . $earring['name'] . "<br />" .
                                        "Price: " . $earring['price'] . "<br />" .
                                         "Category: " . $earring['category'] . "<br />" .
                                        $earring['description'] . "</p>";
                                        }

                                         ?>
                                    </div>
                                    
                                </div>
    
                            </div>
    
    
                            <div class="col-lg-4 mb-4"> 
                                <div class="card shadow mb-4">
                                    <div class="text-center">
                                        <img class="img-fluid px-3 mt-3" style="width: 75%;"
                                            src="Necklace/N5.webp" alt="...">
                                    </div>
                                    <div class="card-body">
                                        <?php

                                            $necklaces[0] = array(
                                            'name' => 'Glitter Enamel Double Hoop',
                                            'price' => 18147.90,
                                            'category' => 'Necklace',
                                            'description' => 'A charming spin on a classic look, this floral diamond pendant is an accessory she will want to wear with everything. Crafted in sterling silver, this fanciful choice features a diamond solitaire.'
                                            );

                                            ?>

                                        <?php 
                                        
                                        foreach($necklaces as $necklace) {
                                        echo "<p style='text-align:center;'>" . "Name: " . $necklace['name'] . "<br />" .
                                        "Price: " . $necklace['price'] . "<br />" .
                                         "Category: " . $necklace['category'] . "<br />" .
                                        $necklace['description'] . "</p>";
                                        }

                                         ?>
                                    </div>
                                    
                                </div>
    
                            </div>
                      
                        
                            <div class="col-lg-4 mb-4"> 
                                <div class="card shadow mb-4">
                                    <div class="text-center">
                                        <img class="img-fluid px-3 mt-3" style="width: 75%;"
                                            src="Ring/R2.jpg" alt="...">
                                    </div>
                                    <div class="card-body">
                                        <?php

                                            $rings[0] = array(
                                            'name' => 'Glitter Enamel Double Hoop',
                                            'price' => 88099.50,
                                            'category' => 'Ring',
                                            'description' => 'Just as your lives will forever be intertwined from this day forth, her engagement ring and wedding band should form a single, beautiful, unified whole. Glistening with diamonds and a bright polished shine.'
                                            );

                                            ?>

                                        <?php 
                                        
                                        foreach($rings as $ring) {
                                        echo "<p style='text-align:center;'>" . $ring['name'] . "<br />" .
                                        "Price: " . $ring['price'] . "<br />" .
                                         "Category: " . $ring['category'] . "<br />" .
                                        $ring['description'] . "</p>";
                                        }

                                         ?>
                                    </div>
                                
                                </div>
                            </div>
                       
                           
    
                        </div>

    <?php 

        echo "<br><br><br><br>";

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