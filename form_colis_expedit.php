<?php

$host = "localhost";
$user = "root";
$bdname = "base_chaye";
$ct = new PDO("mysql:host=$host;dbname=$bdname", $user, "");
if (isset($_POST["publish"])) {

    $cat_colis = $_POST["categorie_colis"];
    $p_colis = $_POST["poids_colis"];
    $prix_colis = $_POST["prix_colis"];
    $long_colis = $_POST["long_colis"];
    $larg_colis = $_POST["larg_colis"];
    $prof_colis = $_POST["prof_colis"];


    //pour img_colis
    $img_nom = $_FILES['image']['name'];
    $tmp_nom = $_FILES['image']['tmp_name'];

    //deplacer dans images

    $time = time();
    $nouveau_nom_img = $time . $img_nom;
    $deplacer_img = move_uploaded_file($tmp_nom, "img_article/" . $nouveau_nom_img);

    if ($deplacer_img) {
        //insertion
        $requete_1 = "insert into colis(
            id_colis_chaye,
            categorie_colis,
            poids_colis,
            longueur_colis,
            largeur_colis,
            profondeur_colis,
            prix_colis,
            image_name) values(NULL,?,?,?,?,?,?,?)";
        $prepare_1 = $ct->prepare($requete_1);
        $tab_1 = array($cat_colis, $p_colis, $long_colis, $larg_colis, $prof_colis, $prix_colis, $nouveau_nom_img);

        $execute_1 = $prepare_1->execute($tab_1);

        if ($execute_1 == true) {
            $success_msg = "Produit ajouté avec succès. Nous vous notifierions en cas d'expedition";
            header("Location : mainsquare?addsucess=$success_msg");
        } else {
            $error_msg = "Il se peut que vous ayiez mal entré les informations";
        }
    } else {
        //si non
        $error_msg = "Veuillez choisir une image avec une taille inférieur à 1Mo !";
    }
}
//fin

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="stylesheet" href="css/form_colis.css">

    <title>Document</title>

</head>

<body>

    <!--debut header section-->
    <header style="background-color : coral;">
        <div style="text-align : center;">
            <img src="images/chayelogo-removebg-preview.png" alt="" srcset="">
        </div>
    </header>
    <!-- end header section -->

    <?php if (isset($_GET['error_msg'])) : ?>
        <div class="alert alert-success alert-dismissible fade show" style="position : absolute" role="alert">
            <strong>
                <?php echo (isset($_GET['error_msg']) ? $_GET['error_msg'] : ""); ?>
            </strong>

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>

    <section class="h-100 h-custom">

        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-8 col-xl-6">
                    <div class="card rounded-3">

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Aide !
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Aide</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Passez votre souris sur les icones <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
                                            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                        </svg> afin de bénéficier de plus de consignes de remplissage
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-body p-4 p-md-5">

                            <div class="container" style="display : flex; justify-content : space-between">

                                <div style="display : flex; justify-content : space-between">
                                    <div>
                                        <img src="images/userfont.png" height=100 alt="" srcset="">
                                    </div>

                                    <div style="padding: 30px">
                                        <span>Bonjour, </span><br>
                                        <span style="font-size: 30px">Tisseur Christopher !</span>
                                    </div>
                                </div>

                            </div>

                            <div class="link_style">
                                <a href="#" class="btn btn-primary rounded" role="button" data-bs-toggle="button">
                                    Je transporte
                                </a>
                            </div>

                            <form action="" method="POST" enctype="multipart/form-data">

                                <div class="container forspace">
                                    <div class="row">
                                        <div class="col">
                                            <div style="text-align : end">
                                                de <input style="background-color : whitesmoke" type="text">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div style="text-align : start">
                                                vers <input style="background-color : whitesmoke" type="text">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div style="text-align : center">
                                                Depart le :
                                            </div>
                                        </div>

                                        <div class="col">
                                            <div style="text-align : center">
                                                Arrive le :
                                            </div>
                                        </div>
                                    </div>

                                    <!--<div style="display: flex">
                                        <div>depart le :</div>
                                        <div class="arrive">Arrive le :</div>
                                    </div>-->
                                </div>

                                <!--<div class="form-outline mb-4">
                                <button class="long">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                                    </svg>
                                        Publier sur Facebook
                                </button>
                            </div> -->

                                <!--  <div class="form-outline mb-4 mt-3">
                                    <input type="text" id="form3Example1q" placeholder="Type de colis pris en charge" class="form-control" name="categorie_colis" />
                                </div> -->
                                <div class="form-floating m-3">
                                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                        <option value="1">Cabine</option>
                                        <option value="2">Soute</option>
                                    </select>
                                    <label for="floatingSelect">Type de Valise</label>
                                </div>

                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="categorie_colis" placeholder="Type de colis pris en charge" aria-label="Username" aria-describedby="basic-addon1">

                                    <span class="input-group-text id0" id="basic-addon1" data-toggle="popover" data-bs-placement="right">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
                                            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                        </svg>
                                    </span>

                                </div>

                                <div class="input-group mb-4">
                                    <input type="text" id="form3Example1q" placeholder="Nombre de kilos disponibles (kg)" class="form-control" name="poids_colis" />
                                    <span class="input-group-text id1" id="basic-addon1" data-toggle="popover" data-bs-placement="right">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
                                            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                        </svg>
                                    </span>
                                </div>

                                <div class="input-group mb-4">
                                    <input type="text" id="form3Example1q" placeholder="Prix au kilo (en euro)" class="form-control" name="prix_colis" />
                                    <span class="input-group-text id2" id="basic-addon1" data-toggle="popover" data-bs-placement="right">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
                                            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                        </svg>
                                    </span>
                                </div>

                                <div class="input-group mb-4">
                                    <input type="text" id="form3Example1q" placeholder="Longueur du colis (en cm)" class="form-control" name="long_colis" />
                                    <span class="input-group-text id3" id="basic-addon1" data-toggle="popover" data-bs-placement="right">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
                                            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                        </svg>
                                    </span>
                                </div>

                                <div class="input-group mb-4">
                                    <input type="text" id="form3Example1q" placeholder="Largeur du colis (en cm)" class="form-control" name="larg_colis" />
                                    <span class="input-group-text id4" id="basic-addon1" data-toggle="popover" data-bs-placement="right">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
                                            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                        </svg>
                                    </span>
                                </div>

                                <div class="input-group mb-4">
                                    <input type="text" id="form3Example1q" placeholder="Profondeur du colis (en cm)" class="form-control" name="prof_colis" />
                                    <span class="input-group-text id5" id="basic-addon1" data-toggle="popover" data-bs-placement="right">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
                                            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                        </svg>
                                    </span>
                                </div>

                                <div class="input-group mb-4">
                                    <input type="file" id="form3Example1q" class="form-control" name="image">
                                    <span class="input-group-text id6" id="basic-addon1" data-toggle="popover" data-bs-placement="right">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
                                            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                        </svg>
                                    </span>
                                </div>



                                <div class="link_style">
                                    <a href="confirm_colis.php*">
                                        <input type="submit" class="btn submit btn-lg mb-1" name="publish" value="Publier" />
                                    </a>
                                </div>

                            </form>

                        </div>




                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

    <script src="js/notice_image.js"></script>
</body>

</html>