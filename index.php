 <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  .card
  {
	  
	  margin:15px;
	  border-radius:15px;
  }

  img
  {
	  height:180px;
  }
  span
  {
	  font-weight:bolder;
	  font-size: large;
  }
  
  #visitsite
  {
	  text-decoration:none;
	  color:white;
  }
  .card-text
  {
	  font-weight:bolder;
	  font-size: large;
  }
  .result{display: flex;}
</style>  
  <!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark btn-dark">

  <!-- Navbar brand -->
  <a class="navbar-brand" href="#">Price4you</a>

  <!-- Collapse button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Collapsible content -->
  <div class="collapse navbar-collapse" id="basicExampleNav">

    <!-- Links -->
    <ul class="navbar-nav mr-auto">
      <!--li class="nav-item active">
        <a class="nav-link" href="#">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>

      <!-- Dropdown -->
      <!--li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Dropdown</a>
        <div class="dropdown-menu dropdown-dark" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li-->

    </ul>
    <!-- Links -->

    <form class="form-inline">
      <div class="md-form my-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      </div>
    </form>
  </div>
  <!-- Collapsible content -->

</nav>
<!--/.Navbar-->
<br><br>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1>Compare like never before</h1>      
    <p>Price4you: Here you can compare prices of a product on various e-commerce platforms..</p>
  </div>
</div>

<br><br>
<form class="form-inline d-flex justify-content-center md-form form-sm mt-0" action="index.php" method="POST">
  <i class="fas fa-search" aria-hidden="true"></i>
  <input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search" name="searchtext" value=""
    aria-label="Search"><br><br>
  <input class="btn btn-dark btn-rounded " type="submit" value="Search">
</form>

<!--Section: Group of personal cards-->
<section class="pt-5 mt-3 pb-3">

  <!--Grid row-->
  <div class="row">

    <!--Grid column-->
    <div class="col-md-12">

      <!--Card group-->
      <div class="card-group">

        <!--Card-->
        <div class="card card-personal mb-6">

          <!--Card image-->
          <div class="view">
            <img class="card-img-top" src="flp.jpg" alt="Card image cap">
            <a href="#!">
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <!--Card image-->

          <!--Card content-->
          <div class="card-body">
            <!--Title-->
            <a>
              <h4 class="card-title">flipkart.com</h4>
            </a>
            <a class="card-meta">Search Results</a>

            <!--Text-->
            <p class="card-text">
			 <?php
require 'simple_html_dom.php';


$searchtext="";


if ($_SERVER["REQUEST_METHOD"] == "POST"){
$searchtext = $_POST["searchtext"];

}
$searchtext = str_replace(' ', '%20', $searchtext);
$flp_str1="https://www.flipkart.com/search?q=";
$flp_str2="&otracker=search&otracker1=search&marketplace=FLIPKART&as-show=on&as=off";
$flp_query=$flp_str1.$searchtext.$flp_str2;

$html = file_get_html($flp_query);


#1
// if(isset($html->find('div[class="_4rR01T"]')->plaintext)){
	
// echo	$html->find('div[class="_4rR01T"]',0)->plaintext;
// }

echo "<div class='items'>";

 foreach($html->find('div[class="_2kHMtA"]') as $div)
       {
        echo "<div class='box'>";
         foreach($div->find('div[class="CXW8mj"]')as $bro){
            echo $bro;
           }
            foreach($div->find('div[class="_4rR01T"]')as $cro){
            echo $cro;
           }
           foreach($div->find('div[class="_30jeq3 _1_WHN1"]' )as $fro){
echo $fro;
           }
           echo "<ul>";
           foreach($div->find('ul[class="_1xgFaf"]' )as $fro){
foreach($fro->find('li[class="rgWa7D"]')as $tro){
  echo $tro;
}
echo "</ul>";
echo"</div>";
           }
          
       }

echo "</div>";
?>

			</p>
            <hr>
            <!-- <button type="button" class="btn btn-primary"><a href="https://www.flipkart.com" id="visitsite">Visit Flipkart</a></button> -->
          </div>
          <!--Card content-->

        </div>
        <!--Card-->

        <!--Card-->
        <div class="card card-personal mb-6">

          <!--Card image-->
          <div class="view">
            <img class="card-img-top" src="amz.jpg" alt="Card image cap">
            <a href="#!">
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <!--Card image-->

          <!--Card content-->
          <div class="card-body">
            <!--Title-->
            <a>
              <h4 class="card-title">amazon.com</h4>
            </a>
            <a class="card-meta">Search Results</a>

            <!--Text-->
            <p class="card-text">
			<?php


$amz_str1="https://www.amazon.in/s?k=";
$amz_str2="&ref=nb_sb_noss_2";

$amz_query=$amz_str1.$searchtext.$amz_str2;



$html = file_get_html($amz_query);

#1

 echo "<div class='amaitems'>";
foreach($html->find('div[class="s-card-container s-overflow-hidden aok-relative puis-include-content-margin s-latency-cf-section s-card-border"]') as $div)
       {
       echo "<div class='amabox'>";
        
        foreach($div->find('div[class="a-section aok-relative s-image-fixed-height"]' )as $fro){
echo $fro;
           }
        foreach($div->find('div[class="a-section a-spacing-none puis-padding-right-small s-title-instructions-style"]' )as $fro){
echo $fro;
           }
            foreach($div->find('span[class="a-price"]' )as $fro){
foreach($fro->find('span[class="a-offscreen"]')as$gro){
  echo $gro;
}
           }
            echo "</div>";
       }
echo "</div>";
// foreach($html->find('span[class="a-size-medium a-color-base a-text-normal"]') as $span)
//        {
//            echo "<p>" . $span->plaintext. "</p>";
//        }



?>
			
			</p>
            <hr>
           <button type="button" class="btn btn-deep-orange"><a href="https://www.amazon.com" id="visitsite">Visit amazon</a></button>
          </div>
          <!--Card content-->

        </div>
        <!--Card-->


      </div>
      <!--Card group-->

    </div>
    <!--Grid column-->

  </div>
  <!--Grid row-->

</section>
<!--Section: Group of personal cards-->


<!-- Footer -->
<footer class="page-footer font-small  pt-4 btn-dark" >

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">

        <!-- Content -->
        <h5 class="text-uppercase">Price4you</h5>
        <p>Here you can compare prices of a product on various e-commerce platforms.</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase">E-commerce sites</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">Amazon</a>
          </li>
          <li>
            <a href="#!">Flipkart</a>
          </li>
         
        </ul>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase">Links</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">amazon.com</a>
          </li>
          <li>
            <a href="#!">flipkart.com</a>
          </li>
        
          
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2022 Copyright:
    <a href="">Price4you</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->



<script type="text/javascript" src="js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>
