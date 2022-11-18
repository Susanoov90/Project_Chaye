<?php 
      $host="localhost";
      $user="root";
      $bdname="base_chaye";
      $ct= new PDO("mysql:host=$host;dbname=$bdname" ,$user ,"");

      $requete="select * from admin,destinaire,expediteur,pays,voyageur";


      $prepare=$ct->prepare($requete);
      $execute=$prepare->execute();
      $donnee= $prepare->fetch(PDO::FETCH_ASSOC);
  
?>


<!DOCTYPE html>
<html>
  <!-- Le fichier est en format .php, il faudra certainement chager le format en .html si on souhaite voir l'affichage facilement -->
  <!-- Dans le cas contraire, il faudrait télécharger la dernier version de Wamp et de php -->
  <!-- lien vers Wamp : https://www.wampserver.com/ -->
  <!-- Pour voir les interactions , il fat télécharger Wamp et suivre les instructions -->
  
<head>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="images/favicon.png" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Healet</title>

   <!-- CSS only -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <!--Css Carousel-->
  <link rel="stylesheet" href="css/carousel.css">

</head>

<body>

  <!--debut header section-->
  <header style="background-color : coral;">
        <div style="text-align : center;">
            <img src="images/chayelogo-removebg-preview.png" alt="" srcset="">
        </div>
    </header>
  <!-- end header section -->

  <!--debut user section -->

  <section>

    <div class="container" style="display : flex; justify-content : space-between">

        <div style="display : flex; justify-content : space-between">
          <div>
            <img src="images/userfont.png" alt="" srcset="">
          </div>

          <div style="padding: 50px">
            <span>Bonjour, </span><br>
            <span style="font-size: 37px">Tisseur Christopher !</span>
          </div>
        </div>


        <div style="padding: 30px">
            <a href="">
              <img src="images/exit.png" width="150" height="150"alt="" srcset="">
            </a>
        </div>
    </div>

  </section>
  <!--fin user section -->

  <!--debut main container section -->

  <section class="shop_section layout_padding">
    <div class="container">

    <div class="input-group mb-3">
      <input type="text" class="form-control" placeholder="Que recherchez vous ?" aria-label="Username" aria-describedby="basic-addon1">
      <span class="input-group-text" id="basic-addon1" style="background-color : coral"> 🔍 </span>
    </div>

    

    <?php if(isset($_GET['msg'])) :?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
           <strong>
                <?php echo(isset($_GET['msg'])?$_GET['msg']:"");?>
           </strong> 

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <?php endif; ?>

        
      <div class="heading_container heading_center">
        
        <?php if(isset($_GET['msg'])) :?>
        <p>
            <h2>Rebienvenue !</h2>
        </p>
        <!--<p>
          
        </p>-->
        <?php endif; ?>
      </div>

      <div class="row">




        <div class="container">

            <a href="#" style="color : coral; font-size : 30px">A LA UNE </a>
                <div class="row">
                    <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
                        <div class="MultiCarousel-inner">
                            
                            <div class="item">
                                <div class="pad15">
                                    <p class="lead">Multi Item Carousel</p>
                                    <p>₹ 1</p>
                                    <p>₹ 6000</p>
                                    <p>50% off</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="pad15">
                                    <p class="lead">Multi Item Carousel</p>
                                    <p>₹ 1</p>
                                    <p>₹ 6000</p>
                                    <p>50% off</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="pad15">
                                    <p class="lead">Multi Item Carousel</p>
                                    <p>₹ 1</p>
                                    <p>₹ 6000</p>
                                    <p>50% off</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="pad15">
                                    <p class="lead">Multi Item Carousel</p>
                                    <p>₹ 1</p>
                                    <p>₹ 6000</p>
                                    <p>50% off</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="pad15">
                                    <p class="lead">Multi Item Carousel</p>
                                    <p>₹ 1</p>
                                    <p>₹ 6000</p>
                                    <p>50% off</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="pad15">
                                    <p class="lead">Multi Item Carousel</p>
                                    <p>₹ 1</p>
                                    <p>₹ 6000</p>
                                    <p>50% off</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="pad15">
                                    <p class="lead">Multi Item Carousel</p>
                                    <p>₹ 1</p>
                                    <p>₹ 6000</p>
                                    <p>50% off</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="pad15">
                                    <p class="lead">Multi Item Carousel</p>
                                    <p>₹ 1</p>
                                    <p>₹ 6000</p>
                                    <p>50% off</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="pad15">
                                    <p class="lead">Multi Item Carousel</p>
                                    <p>₹ 1</p>
                                    <p>₹ 6000</p>
                                    <p>50% off</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="pad15">
                                    <p class="lead">Multi Item Carousel</p>
                                    <p>₹ 1</p>
                                    <p>₹ 6000</p>
                                    <p>50% off</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="pad15">
                                    <p class="lead">Multi Item Carousel</p>
                                    <p>₹ 1</p>
                                    <p>₹ 6000</p>
                                    <p>50% off</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="pad15">
                                    <p class="lead">Multi Item Carousel</p>
                                    <p>₹ 1</p>
                                    <p>₹ 6000</p>
                                    <p>50% off</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="pad15">
                                    <p class="lead">Multi Item Carousel</p>
                                    <p>₹ 1</p>
                                    <p>₹ 6000</p>
                                    <p>50% off</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="pad15">
                                    <p class="lead">Multi Item Carousel</p>
                                    <p>₹ 1</p>
                                    <p>₹ 6000</p>
                                    <p>50% off</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="pad15">
                                    <p class="lead">Multi Item Carousel</p>
                                    <p>₹ 1</p>
                                    <p>₹ 6000</p>
                                    <p>50% off</p>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary leftLst"><</button>
                        <button class="btn btn-primary rightLst">></button>
                    </div>
                </div>
                
                <!--<div class="row">
                    <div class="col-md-12 text-center">
                        <br/><br/><br/>
                        <hr/>
                        <p>Settings</p>
                        <p>Change data items for xs,sm,md and lg display items respectively. Ex:data-items="1,3,5,6"</p>
                        <p>Change data slide for slides per click Ex:data-slide="1"</p>
                    </div>
                </div>-->

        </div>
        
        
        
      </div>

      <div class="row">

        <a href="#" style="color : coral; font-size : 30px">VOIR TOUT</a>
        <div class="" style="display : flex; justify-content : space-between">

          
              
          

          <div class="box">
            <a href="">

              <div class="img-box">
                <img src="images/montre.jpg" alt="">
              </div>

              <div class="detail-box">
                
                <h6>
                  
                </h6>
                <h6>
                  Price
                  <span>
                    $110
                  </span>
                </h6>

              </div>

              <div class="new">
                <span>
                  New
                </span>
              </div>

              

            </a>
          </div>

          <div class="box">
            <a href="">

              <div class="img-box">
                <img src="images/montre.jpg" alt="">
              </div>

              <div class="detail-box">
                
                <h6>
                  
                </h6>
                <h6>
                  Price
                  <span>
                    $110
                  </span>
                </h6>

              </div>

              <div class="new">
                <span>
                  New
                </span>
              </div>

              

            </a>
          </div>

          <div class="box">
            <a href="">

              <div class="img-box">
                <img src="images/montre.jpg" alt="">
              </div>

              <div class="detail-box">
                
                <h6>
                  
                </h6>
                <h6>
                  Price
                  <span>
                    $110
                  </span>
                </h6>

              </div>

              <div class="new">
                <span>
                  New
                </span>
              </div>

              

            </a>
          </div>

          
        </div>



      </div>

      
     

    </div>
  </section>

   <!--fin main container section -->

 


  <!--debut footer section -->
  <footer style="border-radius: 90% 90% 0% 0%; background-color : BlueViolet; height : 250px; text-align : center;">

            <div style="padding-top : 100px;">
                <h1 style="color : white;">
                        PUITS D'ANNONCES >
                </h1>
            </div>
           
        </footer>
  <!--fin footer section -->


  <!-- jQuery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- carousel js -->
  <script src="js/carousel.js"></script>


</body>

</html>