<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include("includes/head.html");?>
    </head>
    <body>
        <!--Navbar-->
        <?php include("includes/navbar.php");?>
        <!--Modal inicial-->
        <div class="modal" id="modalservicio" role="dialog" tabindex="-1">
            <div class="modal-dialog  modal-lg modal-dialog-centered" style="max-width: 95%;" role="document">
                <div class="modal-content modal-content-inicio">
                    <div class="modal-header">
                        <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                            <span aria-hidden="true">
                                ×
                            </span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img alt="responsive im" class="img-fluid img-thumbnail" src="assets/images/horizontal.png"/>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<div class="modal-footer">
    <button class="btn btn-default" data-dismiss="modal" type="button">
        Close
    </button>
</div>
<!-- Banner principal -->
<section class="jumbotron jumbotron-fluid fondo_servicios" id="principal">
    <div class="banner_principal text-right">
        <img alt="Italtransfer" class="img-fluid logo_principal" src="assets/logos/ItalTransfer.png">
        </img>
    </div>
</section>
<section class="container">
    <h3 class="text-center azul_italtransfer1">
        <b>
            NUESTROS
            <span class="azul_italtransfer2">
                SERVICIOS
            </span>
        </b>
    </h3>
    <div class="row">
        <div class="col-12 col-md-4 pb1">
            <div class="card">
                <img alt="..." class="card-img-top" src="assets/images/compra_venta.png">
                    <div class="card-body">
                        <h5>
                            Compra y Venta de más de 30 Divisas diferentes.
                        </h5>
                        <p>
                            Contamos con una diversidad de divisas, es por ello que tenemos clientes de todas partes del mundo.
                        </p>
                    </div>
                </img>
            </div>
        </div>
        <div class="col-12 col-md-4 pb1">
            <div class="card">
                <img alt="..." class="card-img-top" src="assets/images/cheques_viajeros.png">
                    <div class="card-body">
                        <h5>
                            Compra de Cheques de viajero.
                        </h5>
                        <p>
                            Prestamos el mejor servicio a todos nuestros clientes Panameños o  turistas que deseen cambiar sus cheques de viajero de forma sencilla, rápida y confiable y en la divisa que el cliente desee.
                        </p>
                    </div>
                </img>
            </div>
        </div>
        <div class="col-12 col-md-4 pb1">
            <div class="card">
                <img alt="..." class="card-img-top" src="assets/images/envia_recibe.png">
                    <div class="card-body">
                        <h5>
                            Envío y Recepción de Dinero desde y hacia cualquier parte del mundo.
                        </h5>
                        <p>
                            Contamos con el mayor número de proveedores internacionales y  los más reconocidos pagadores, todos para brindar la mayor comodidad, facilidad y seguridad a nuestros clientes.
                        </p>
                    </div>
                </img>
            </div>
        </div>
        <div class="col-12 col-md-4 pb1">
            <div class="card">
                <img alt="..." class="card-img-top" src="assets/images/compra_cheques.png">
                    <div class="card-body">
                        <h5>
                            Compra y Venta de Cheques en $ USA y en otras divisas.
                        </h5>
                        <p>
                            Vender o comprar cheques de diferentes divisas es muy sencillo, rápido y lo más importante SIN COMISIÓN.
                        </p>
                    </div>
                </img>
            </div>
        </div>
        <div class="col-12 col-md-4 pb1">
            <div class="card">
                <img alt="..." class="card-img-top" src="assets/images/servicios_cambiarios.png">
                    <div class="card-body">
                        <h5>
                            Servicios cambiarios con atención personalizada para profesionales, ejecutivos y empresarios.
                        </h5>
                        <p>
                            Entendemos que el cliente es lo primero es por ello que nuestra atención  y asesorías en operaciones cambiarias son presenciales,  lo que nos asegura la satisfacción de nuestros clientes.
                        </p>
                    </div>
                </img>
            </div>
        </div>
    </div>
</section>
<!--Footer-->
<?php include("includes/footer.html");?>
<!-- JavaScript -->
<!-- jQuery primero, luego Popper.js, luego Bootstrap JS -->
<script crossorigin="anonymous" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" src="https://code.jquery.com/jquery-3.3.1.slim.min.js">
</script>
<script crossorigin="anonymous" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
</script>
<script crossorigin="anonymous" integrity="sha384-7aThvCh9TypR7fIc2HV4O/nFMVCBwyIUKL8XCtKE+8xgCgl/PQGuFsvShjr74PBp" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js">
</script>
<script type="text/javascript">
    $('#modalservicio').modal('show');
</script>
<!--Rocket-->
<?php include("includes/rocket.php");?>
