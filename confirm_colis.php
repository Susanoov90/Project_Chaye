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
                                        Cette page est une page de confirmation des colis inscrits précédemment
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">

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

                            <div style="background-color : rgb(202, 197, 197);" class="link_style">
                                <span style="font-size : 40px; color : rgb(16, 94, 188);font-weight:bold">J'expédie /</span>
                                <span style="font-size : 40px;color : rgb(88, 88, 88);font-weight:bold">Je transporte</span>
                            </div>

                            <form class="" action="confirm_colis.php" method="POST" enctype="multipart/form-data">

                                <div class="forspace">
                                    <div class="row">
                                        <div class="col">
                                            <div style="text-align : end">
                                                De <select name="" id="">
                                                    <option value="Choose_Depart">Chosir le pays et ville</option>
                                                </select>
                                                <div style="text-align : center">
                                                    Depart le :
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div style="text-align : start">
                                                Vers <select name="" id="">
                                                    <option value="Choose_Depart">Chosir le pays et ville</option>
                                                </select>
                                                <div>
                                                    Arrive le :
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                <div style="background-color :rgb(176, 168, 168);" class="input-group mb-3">
                                Type de colis pris en charge : 

                                </div>

                                <div style="background-color :rgb(176, 168, 168);" class="input-group mb-4">
                                Nombre de kilos disponibles (kg) :
                                    
                                </div>

                                <div style="background-color :rgb(176, 168, 168);" class="input-group mb-4">
                                Prix au kilo (en euro) :
                                    
                                </div>

                                <div style="background-color :rgb(176, 168, 168);" class="input-group mb-4">
                                Longueur du colis (en cm) :
                                    
                                </div>

                                <div style="background-color :rgb(176, 168, 168);" class="input-group mb-4">
                                Largeur du colis (en cm) :
                                    
                                </div>

                                <div style="background-color :rgb(176, 168, 168);" class="input-group mb-4">
                                Profondeur du colis (en cm) :
                                    
                                </div>

                                <div style="background-color :rgb(176, 168, 168);" class="input-group mb-4">
                                    Image choisie : 
                                </div>



                                <div class="link_style">
                                    <a href="confirm_colis.php">
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
</body>

</html>