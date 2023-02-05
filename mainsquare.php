<?php
$host = "localhost";
$user = "root";
$bdname = "base_chaye";
$ct = new PDO("mysql:host=$host;dbname=$bdname", $user, "");

$requete = "select * from admin,destinaire,expediteur,pays,voyageur";


$prepare = $ct->prepare($requete);
$execute = $prepare->execute();
$donnee = $prepare->fetch(PDO::FETCH_ASSOC);

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
  <link rel="icon" href="images/logchay.png" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Main Chaye</title>

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

    <div class="container" style="display : flex; justify-content : space-between; padding-top : 50px">

      <div style="display : flex; justify-content : space-between;">
        <div>
          <img src="images/userfont.png" width="140" height="140" alt="" srcset="">
        </div>

        <div style="padding: 50px">
          <span>Bonjour, </span><br>
          <span style="font-size: 27px">Tisseur Christopher !</span>
        </div>
      </div>


      <div style="padding: 50px">
        <a href="">
          <img src="images/exit.png" width="50" height="50" alt="" srcset="">
        </a>
      </div>
    </div>

  </section>
  <!--fin user section -->

  <!--debut main container section -->

  <section class="shop_section layout_padding">
    <div class="container">

      <div class="style_button row pb-4">
        <div class="col style_flexin_first">
          <a href="form_colis_expedit.php" class=" btn btn-primary style_font">J'expédie</a>
        </div>

        <div class="col style_flexin_second">
          <a href="form_colis_transport.php" class=" btn btn-primary style_font">Je transporte</a>
        </div>
      </div>





      <?php if (isset($_GET['msg'])) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>
            <?php echo (isset($_GET['msg']) ? $_GET['msg'] : ""); ?>
          </strong>

          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      <?php endif; ?>

      <?php if (isset($_GET['success_msg'])) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>
            <?php echo (isset($_GET['success_msg']) ? $_GET['success_msg'] : ""); ?>
          </strong>

          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      <?php endif; ?>


      <div class="heading_container heading_center">

        <?php if (isset($_GET['msg'])) : ?>
          <p>
          <h2>Rebienvenue !</h2>
          </p>
          <!--<p>
          
        </p>-->
        <?php endif; ?>
      </div>

      <div class="row">




        <div class="container">

          <div class="row">
            <a href="#" style="color : coral; font-size : 30px">A LA UNE </a>


            <div style="text-align : end">
              Filtrer
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-filter" viewBox="0 0 16 16">
                <path d="M6 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z" />
              </svg>
            </div>
          </div>

          <div>

            <div class="">
              <div class="row">
                <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner" role="listbox">

                    <div class="carousel-item active">
                      <div class="col-md-3">
                        <div class="card">
                          <div class="card-img">
                            <img src="images/montre.jpg" class="card-img-top img-fluid">
                          </div>
                          <div class="card-body">
                            <p class="carousel_font_card card-text">
                            <p><span>Destination</span>..........Abidjan</p>
                            <p><span>Poids disponible</span>..........Abidjan</p>
                            <p><span>Prix</span>..........Abidjan</p>
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="carousel-item active">
                      <div class="col-md-3">
                        <div class="card">
                          <div class="card-img">
                            <img src="images/montre.jpg" class="card-img-top img-fluid">
                          </div>
                          <div class="card-body">
                            <p class="carousel_font_card card-text">
                            <p><span>Destination</span>..........Abidjan</p>
                            <p><span>Poids disponible</span>..........Abidjan</p>
                            <p><span>Prix</span>..........Abidjan</p>
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="carousel-item">
                      <div class="col-md-3">
                        <div class="card">
                          <div class="card-img">
                            <img src="images/montre.jpg" class="card-img-top img-fluid">
                          </div>
                          <div class="card-body">
                            <p class="carousel_font_card card-text">
                            <p><span>Destination</span>..........Abidjan</p>
                            <p><span>Poids disponible</span>..........Abidjan</p>
                            <p><span>Prix</span>..........Abidjan</p>
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="carousel-item">
                      <div class="col-md-3">
                        <div class="card">
                          <div class="card-img">
                            <img src="images/montre.jpg" class="card-img-top img-fluid">
                          </div>
                          <div class="card-body">
                            <p class="carousel_font_card card-text">
                            <p><span style="font : bold">Destination</span>..........Abidjan</p>
                            <p><span>Poids disponible</span>..........Abidjan</p>
                            <p><span>Prix</span>..........Abidjan</p>
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="carousel-item">
                      <div class="col-md-3">
                        <div class="card">
                          <div class="card-img">
                            <img src="images/montre.jpg" class="card-img-top img-fluid">
                          </div>
                          <div class="card-body">
                            <p class="carousel_font_card card-text">
                            <p><span>Destination</span>..........Abidjan</p>
                            <p><span>Poids disponible</span>..........Abidjan</p>
                            <p><span>Prix</span>..........Abidjan</p>
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                  <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  </a>
                  <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  </a>
                </div>
              </div>
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

  <footer>
    <div class="style_img">
      <div class="space_begin">
        <img class="style_direct_img" src="images/house.svg" alt="">
      </div>

      <div>
        <img class="style_direct_img" src="images/search.svg" alt="">
      </div>

      <div>
        <img class="style_direct_img" src="images/map.png" alt="">
      </div>

      <div>
        <img class="style_direct_img" src="images/star-fill.svg" alt="">
      </div>

      <div class="space_end">
        <img class="style_direct_img" src="images/discuss.png" alt="">
      </div>
    </div>
  </footer>




  <!--fin footer section -->


  <!-- jQuery -->
  <script src="js/jquery-3.4.1.min.js">
  </script>
  <!-- bootstrap js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- carousel js -->
  <script src="js/carousel.js"></script>


  <script>
  </script>



</body>

</html>