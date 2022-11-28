<?php 

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
    
    <header style="background-color : coral;">
        <div style="text-align : center;">
            <img src="images/chayelogo-removebg-preview.png" alt="" srcset="">
        </div>
    </header>

    <section>
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-8 col-xl-6">
                    <div class="card rounded-3">
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
                            <a href="#"  class="btn btn-primary rounded" role="button" data-bs-toggle="button">
                                Je transporte
                            </a>
                        </div>




                        <form action="">

                            <div class="forspace">
                                <div>
                                    de <input type="text"> vers <input type="text">
                                </div> 

                                <div style="display: flex">
                                    <div>depart le :</div> 
                                    <div class="arrive">Arrive le :</div>
                                </div>
                            </div>

                            <div class="form-outline mb-4">
                                <button class="long">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                                    </svg>
                                        Publier sur Facebook
                                </button>
                            </div>

                            <div class="form-outline mb-4">
                                Type de colis pris en charge : <b> </b>
                            </div>

                            <div class="form-outline mb-4">
                                Nombre de kilos disponible (en kg) : <b> </b>
                            </div>

                            <div class="form-outline mb-4">
                                Prix au kilo (en euro) : <b> </b>
                            </div>

                            <div class="form-outline mb-4">
                                Longueur du colis (en cm) : <b> </b>
                            </div>

                            <div class="form-outline mb-4">
                                Largeur du colis (en cm) : <b> </b>
                            </div>

                            <div class="form-outline mb-4">
                                Profondeur du colis : <b> </b>
                            </div>


                            <div class="link_style">
                                <input type="submit" class="btn submit btn-lg mb-1" value="Valider commandes"/>
                            </div>

                        </form>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</body>
</html>