<?php 



  if(isset($_POST['mail'])){
    $host="localhost";
    $user="root";
    $bdname="base_chaye";
    $ct= new PDO("mysql:host=$host;dbname=$bdname" ,$user ,"");

    $requete = "select * from admin where mail =? AND mdp_special_admin=?";
    $prepare = $ct -> prepare($requete);
    $tab= array($_POST['mail'], $_POST['mdp_special_admin']);
    $execute=$prepare -> execute($tab);
    $nb_ligne=$prepare->rowCount();


   

    if($nb_ligne==0){
        $msg_2="Oups, il se peut que vous avez entré des identifiants erronnés... ";
    
    }else {
        $msg="BIEN CONNECTÉ !";
        header("location: mainsquare?msg=$msg");
    }

    if(empty($_POST['mail'] && $_POST['mdp_special_admin'])){
      $con_error="On dirait que les identifiants ne sont pas entrés. Entrez des valeurs !";
    }
}
?>




<!DOCTYPE html>

 <!-- Le fichier est en format .php, il faudra certainement chager le format en .html si on souhaite voir l'affichage facilement -->
  <!-- Dans le cas contraire, il faudrait télécharger la dernier version de Wamp et de php -->
  <!-- lien vers Wamp : https://www.wampserver.com/ -->
  <!-- Pour voir les interactions , il fat télécharger Wamp et suivre les instructions -->
  
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body style="background-color: #8fc4b7;">
    

<section class="h-100 h-custom" style="background-color: #8fc4b7;">

  <div class="container py-5 h-100">

    <div class="row d-flex justify-content-center align-items-center h-100">

      <div class="col-lg-8 col-xl-6">

        <div class="card rounded-3 bg-orange">

         <div class="padding-top-30 padding-bottom-30"> 
             <img class="w30"src="images/logo-chaye.svg"class="w-70" style=" display: block; margin: 0 auto;" alt="logo Chaye">
           
            </div>

            <div class="card-rounded card-body p-4 p-md-5 bg-white-app border-top-left-radius-20 border-top-right-radius-20">

            
              <form action="" class="px-md-2" method="post">

                <div class="row">

                  <?php if(isset($con_error)) :?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>
                            <?php echo(isset($con_error)?$con_error:"");?>
                    </strong> 

                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <?php endif; ?>

                  <?php if(isset($msg_2)) :?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>
                            <?php echo(isset($msg_2)?$msg_2:"");?>
                    </strong> 

                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                  <?php endif; ?>

                  <div class="col">
                  </div>
                  
                  <div class="col-md-12 mb-4">

                    <div class="input-group mb-3">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Email" name="mail">
                            <label for="floatingInputGroup1">Email</label>
                        </div>
                    </div>

                    <div class="input-group">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Mot De passe" name="mdp_special_admin">
                            <label for="floatingInputGroup1">Mot de Passe</label>
                        </div>
                    </div>

                    <div class="margin-top-10">
                        <a href="">Mot de passe oublié</a>
                    </div>

                  <div class="txt-center">
                          <input id="checkboxSignup" type="checkbox">
                            <label for="checkboxSignup">
                            Se souvenir de moi
                            </label>
                    </div>

                    <button type="submit" class="btn-chaye btn-lg mb-1">Valider</button>

                    <div class="mx-auto margin-top-20 margin-bottom-20">
                        
                      <h4 class="background"><span>ou</span></h4>
                        
                    </div>

                

                    <div class="flex-box-justify">

                        <a class="btn btn-primary" style="background-color: #3b5998;" href="#!" role="button">
                            <i class="fab fa-facebook me-2"></i>Facebook
                        </a>

                        <a class="btn btn-primary" style="background-color: #dd4b39;" href="#!" role="button">
                            <i class="fab fa-google me-2"></i>Google
                        </a>

                    </div>

                     <div class="txt-center">
                      <p>
                          Jai deja un compte ? <a href="">Se connecter</a>
                      </p>
                    </div>

                  </div>

                  <div class="col"></div>

                

              
                </div>

              </form>

            </div>
      </div>
    </div>
  </div>
</div>

</section>




<script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>

</body>
</html>