<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("includes/head.html"); ?>
</head>

<body>
    <!--Navbar-->
    <?php include("includes/navbar.php"); ?>

    <!-- Banner principal -->
    <section id="principal" class="jumbotron jumbotron-fluid fondo_contacto">
        <div class="banner_principal text-right">
            <img src="assets/logos/ItalTransfer.png" class="img-fluid logo_principal" alt="Italtransfer">
        </div>
    </section>

    <section class="container">
        <h3 class="text-center azul_italtransfer1"><b>CONTÁCTENOS</b></h3>
        <br>
        <div class="row">
            <div class="col-12 col-md-8">
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre">
                        <br>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Correo">
                        <br>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tema">
                        <br>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Mensaje"></textarea>
                    </div>
                    <p class="btn btn-primary"><a href="mailto:info@italtransfer.com" class="decoration-none">Enviar</a></p>
                </form>
            </div>
            <div class="col-12 col-md-4">
                <h4 class="azul_italtransfer1"><b>Información <span class="azul_italtransfer2">de contacto</span></b></h4>
                <br>
                <p><i class="fas fa-map-marker-alt azul_italtransfer2"></i> <b>Oficina Principal</b>, Italtransfer, Ave. Balboa Edif. Galerias Balboa, PB, local 2 frente a Cinta Costera, al lado de Marcorama.</p>
                <p><i class="fas fa-phone azul_italtransfer2"></i> Telf. (507) 265-7270</p>
                <p><i class="far fa-envelope azul_italtransfer2"></i><a href="mailto:info@italtransfer.com"> info@italtransfer.com</a></p>
            </div>
        </div>
    </section>


    <!-- icono de pepin -->
    <div class="div-pepin">
        <button id="pepin" class="btn-pepin"><img src="./assets/images/pepinvs1.jpg" alt="" class="w-100"></button>
    </div>

    <!--Footer-->
    <?php include("includes/footer.html"); ?>










    <!-- JavaScript -->
    <!-- jQuery primero, luego Popper.js, luego Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js" integrity="sha384-7aThvCh9TypR7fIc2HV4O/nFMVCBwyIUKL8XCtKE+8xgCgl/PQGuFsvShjr74PBp" crossorigin="anonymous"></script>
    <script src="./js/main.js" type="module"></script>
    
    <!--Rocket-->
    <?php include("includes/rocket.php"); ?>
</body>

</html>