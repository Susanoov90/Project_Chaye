<?php 

    $host="localhost";
    $user="root";
    $bdname="base_chaye";
    $ct= new PDO("mysql:host=$host;dbname=$bdname" ,$user ,"");



    if(isset($_POST["nom"])){

        $nom=$_POST["nom"];
        $prenom=$_POST["prenom"];
        $datnaiss=$_POST["datnaiss"];
        $pays=$_POST["pays"];
        $tel=$_POST["tel"];
        $mail=$_POST["mail"];
        $mdp=$_POST["mdp"];
        $next_mdp=$_POST["next_mdp"];

        $requete_1="insert into admin(mail,mdp_special_admin) values(?,?)";
        $prepare_1= $ct->prepare($requete_1);
        $tab_1=array($mail,$mdp);

        $requete_2="insert into expediteur(id_expe_chaye,nom_expe,prenom_chaye,num_cni,nation_expe,resident_expe,tel,datnaiss) values('',?,?,'',?,'',?,?)";
        $prepare_2= $ct->prepare($requete_2);
        $tab_2=array($nom,$prenom,$pays,$tel,$datnaiss);

        $requete_3="insert into destinataire(id_destinataire_chaye,nom_desti,prenom_desti,num_cni_desti,nation_desti,resident_desti,tel,datnaiss) values('',?,?,'',?,'',?,?)";
        $prepare_3= $ct->prepare($requete_3);
        $tab_3=array($nom,$prenom,$pays,$tel,$datnaiss);

        $requete_4="insert into voyageur(id_voya_chaye,nom_voya,prenom_voya,num_cni_voya,nation_voya,resident_voya,tel,datnaiss) values('',?,?,'',?,'',?,?)";
        $prepare_4= $ct->prepare($requete_4);
        $tab_4=array($nom,$prenom,$pays,$tel,$datnaiss);

        $requete_5="insert into pays(nom_pays) values(?)";
        $prepare_5= $ct->prepare($requete_5);
        $tab_5=array($pays);

        $requete_6="insert into extension_save(id_user,nom_user,prenom_user,num_cni_user,nation_user,resident_user,tel_user,datnaiss_user,mail_user,mdp_user) values('',?,?,'',?,'',?,?,?,?)";
        $prepare_6= $ct->prepare($requete_6);
        $tab_6=array($nom,$prenom,$pays,$tel,$datnaiss,$mail,$mdp);

        $execute_1=$prepare_1->execute($tab_1);


        $execute_2=$prepare_2->execute($tab_2);


        $execute_3=$prepare_3->execute($tab_3);


        $execute_4=$prepare_4->execute($tab_4);


        $execute_5=$prepare_5->execute($tab_5);


        $execute_6=$prepare_6->execute($tab_6);






        if(!empty($nom && $prenom && $datnaiss && $pays && $tel && $mail && $mdp && $next_mdp)){
          if($mdp === $next_mdp){
            if($execute_1 && $execute_2 && $execute_3 && $execute_4 && $execute_5 & $execute_6 == true){
                $msg_1="INSCRIPTION AVEC SUCCES !";
                header("location: loginsquare?msg_1=$msg_1");
            }else{
                $msg="INSCRIPTION NON EFFECTUE !";
            }
        } else{
          $get_correct = "Le mot de passe entré n'est pas valide pour les deux champs. Entrez un bon mot de passe pour les deux champs correspondants";
        }
    } else {
      $msg_2="IL FAUT QUE TOUTES LES VALEURS SOIENT RENSEIGNÉES. A MOINS QUE L'INSCRIPTION NE SOIT PAS NECESSAIRE POUR L'HEURE !";
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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="css/Regisquare.css">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/5c7c3a440b.js" crossorigin="anonymous"></script>


</head>
<body>
    
<section class="h-100 h-custom" style="background-color: #8fc4b7;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-3">
          
        <img src="images/longchaye.png"
            class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;"
            alt="Sample photo">

          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Creer un compte</h3>

            <form method="post" class="px-md-2">

                    <?php if(isset($msg)) :?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <strong>
                          <?php echo(isset($msg)?$msg:"");?>
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

                <?php if(isset($get_correct)) :?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <strong>
                          <?php echo(isset($get_correct)?$get_correct:"");?>
                  </strong> 

                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
                </div>

                <?php endif; ?>
                

              <div class="form-outline mb-4">

                <input type="text" id="form3Example1q" placeholder="Nom" class="form-control" name="nom"/>  
              </div>

              <div class="form-outline mb-4">
                <input type="text" id="form3Example1q" placeholder="Prenom" class="form-control" name="prenom"/>
              </div>

              <div class="form-outline mb-4">
                <input type="text" id="form3Example1q" placeholder="Date de Naissance" class="form-control" name="datnaiss"/>
              </div>

              <div class="form-outline mb-4">
                <input type="text" id="form3Example1q" placeholder="Pays" class="form-control" name="pays"/>
              </div>

              <div class="form-outline mb-4">
                <input type="text" id="form3Example1q" placeholder="Telephone" class="form-control" name="tel"/>
              </div>

              <div class="form-outline mb-4">
                <input type="text"  placeholder="Email" class="form-control" name="mail"/>
              </div>

              <div class="input-group mb-3">
                <input type="password" id="form3Example1q" placeholder="Mot de passe" class="form-control" name="mdp"/>
                
                
                  <!--<span class="input-group-text" id="togglePassword">   👁   </span>      -->        
                             
              </div>

              <div class="form-outline mb-4">
                <input type="password" id="form3Example1q" placeholder="Confirmer le mot de passe" class="form-control" name="next_mdp"/>
              </div>

              <input type="submit" class="btn btn-success btn-lg mb-1" name="Valider"></input>

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

  <!--script pour afficher le mot de passe ou masquer. Il faut juste trouver 2 icones. L'oeil ouvert symbolisant le mot de passe affiché et l'oeil barré symbolisant le mot de passe masqué -->
  <!-- <script>
        const togglePassword = document
            .querySelector('#togglePassword');
  
        const password = document.querySelector('#password');
  
        togglePassword.addEventListener('click', () => {
  
            // Toggle the type attribute using
            // getAttribure() method
            const type = password
                .getAttribute('type') === 'password' ?
                'text' : 'password';
                  
            password.setAttribute('type', type);
  
            // Toggle the eye and bi-eye icon
            this.classList.toggle('✖');
        });
    </script> -->

</body>
</html>