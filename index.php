<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include("includes/head.html");?>
    </head>
    <body>

         <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
            <a class="float" href="https://api.whatsapp.com/send?phone=5195508107&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202." target="_blank">
                <i class="fa fa-whatsapp my-float">
                </i>
            </a>
        </link>

        <!--Navbar-->
        <?php include("includes/navbar.php");?>

       

	<!--Modal inicial-->
       <!-- <div class="modal" id="modalinicio" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content modal-content-inicio">
                    <div class="modal-body modal-body-inicio text-center">
			<h4>Debido a la situación de emergencia, y con el objeto de que no tenga que moverse de su hogar, puede recibir su remesa directamente en su cuenta bancaria (a las 24 horas, día hábil) siguiendo los siguientes pasos.</h4>
                        <br>
                        <a class="btn btn-outline-primary" href="InstructivoITFOL.pdf"  target="_blank" role="button">Instructivo</a>
			
                    </div>
                </div>
            </div>
        </div>-->



        <!--Modal inicial-->
    <?php include("modals/promotionApp.php"); ?>

        <!-- Banner principal -->
        <section id="principal" class="jumbotron jumbotron-fluid fondo_principal">
            <div class="banner_principal text-right">
                <img src="assets/logos/ItalTransfer.png" class="img-fluid logo_principal" alt="Italtransfer">
            </div>
        </section>

        <!-- Título -->
        <section class="container">
            <p class="text-center">
                <img src="assets/logos/texto_ItalTransfer.svg" class="img-fluid texto_ital" alt="">
            </p>
        </section>

        <!-- Quienes somos -->
        <section class="container-fluid">
            <div class="row flex">
                <div class="col-12 col-md-5 pl0">
                    <img src="assets/images/quienes.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-12 col-md-6">
                    <h2 class="azul_italtransfer1"><b>¿Quienes <span class="azul_italtransfer2">somos?</span></b></h2>
                    <br>
                    <p><b>ITALTRANSFER</b> posee todo el prestigio de marca y los atributos de valor que ha mantenido la Organización Italcambio en cada una de sus filiales. La apertura de varias oficinas de <b>ITALTRANSFER</b> en las zonas más importantes  de Panamá, la convierte en la Casa de Cambio con alta tasa de crecimiento en este país. En el corto tiempo, el mercado local reconoce a <b>ITALTRANSFER</b> como uno de los principales Agentes de productos y servicios cambiarios de Panamá.</p>
                    <br>
                    <p class="text-right"><a href="quienes.php"><button type="button" class="btn btn-primary">Saber más</button></a></p>
                </div>
            </div>
        </section>

        <!-- Lo que nos define -->
        <section class="container">
                <h2 class="text-center azul_italtransfer1 ptop5rem"><b>Lo que <span class="azul_italtransfer2">nos define</span></b></h2>
                <div class="row">
                    <div class="col-12 col-md-4 text-center">
                        <img src="assets/iconografía/porque-confianza.svg" class="img-fluid" alt="Confianza">
                        <h3>Confianza</h3>
                        <br>
                        <p class="text-left">Nuestras asesorías en operaciones cambiarias son presenciales y  personalizada, dando  mayor confianza y satisfacción a nuestros clientes.</p>
                    </div>
                    <div class="col-12 col-md-4 text-center">
                        <img src="assets/iconografía/porque-seriedad.svg" class="img-fluid" alt="Seriedad">
                        <h3>Seriedad</h3>
                        <br>
                        <p class="text-left">Somos la casa de cambio líder en Panamá, con más más de xxx años en el mercado. Además formamos parte de la Organización Italcambio la casa de cambio líder en Latinoamérica, con 70 años prestando apoyo y asesorías en materia cambiaria a todos nuestros clientes.</p>
                    </div>
                    <div class="col-12 col-md-4 text-center">
                        <img src="assets/iconografía/porque-compromiso.svg" class="img-fluid" alt="Compromiso">
                        <h3>Compromiso</h3>
                        <br>
                        <p class="text-left">Nuestro compromiso es Situar a nuestros clientes en el centro de todas nuestras actividades, ofreciendo productos y servicios ajustados a las diversas necesidades en materia cambiaria que puedan requerir.</p>
                    </div>
                </div>
        </section>

        <!-- Mayor variedad de servicios -->
        <section class="container-fluid">
            <div class="row flex ptop5rem">
                <div class="col-12 col-md-6 offset-md-1">
                    <h2 class="azul_italtransfer1"><b>Mayor variedad <span class="azul_italtransfer2">de servicios</span></b></h2>
                    <br>
                    <ul>
                        <li>Envío y recibo de dinero en pocos minutos desde y hacia Panamá.</li>
                        <li>Compra y Venta de Euros y de más de 30 divisas diferentes de todo el mundo.</li>
                        <li>Compra y Venta de cheques de viajero.</li>
                        <li>Envío y Pagos de Remesas para todo el mundo.</li>
                        <li>Operaciones de Importación y Exportación.</li>
                    </ul>
                    <br>
                    <p class="text-right"><a href="servicios.php"><button type="button" class="btn btn-primary">Saber más</button></a></p>
                </div>
                <div class="col-12 col-md-5 pl0">
                    <img src="assets/images/servicios.png" class="img-fluid" alt="">
                </div>
            </div>
        </section>

        <!-- Siempre cerca de ti -->
        <section class="container-fluid">
            <div class="row flex ptop5rem">
                <div class="col-12 col-md-5 pl0">
                    <img src="assets/images/Panama-mapa.svg" class="img-fluid mapa" alt="">
                </div>
                <div class="col-12 col-md-6">
                    <h2 class="azul_italtransfer1"><b>Siempre <span class="azul_italtransfer2">cerca de ti</span></b></h2>
                    <br>
                    <p>Contamos con sucursales en todo el territorio Panameño, ubicadas en los puntos más estratégicos y de mayor afluencia de turistas.</p>
                    <br>
                    <p class="text-right"><a href="sucursales.php"><button type="button" class="btn btn-primary">Saber más</button></a></p>
                </div>
            </div>
        </section>

        <!--Filiales-->
        <section class='filiales container-fluid'>
            <h2 class="text-center azul_italtransfer1 ptop5rem"><b>Nuestras <span class="azul_italtransfer2">Filiales</span></b></h2>
            <br>
            <div class="row flex">
                <div class="col-md-2 offset-md-1 col-6">
                    <a href="http://www.italcambio.com/" target="_blank"><img src="assets/logos/italcambio.png" alt="Italcambio" class="img-fluid mx-auto d-block filter" /></a>
                </div>
                <div class="col-md-2 col-6">
                    <a href="http://www.italviajes.com/" target="_blank"><img src="assets/logos/ital_viajes.png" alt="Italviajes" class="img-fluid mx-auto d-block filter" /></a>
                </div>
                <div class="col-md-2 col-6">
                    <a href="http://www.metalor.com.ve/" target="_blank"><img src="assets/logos/metalor.png" alt="Metalor" class="img-fluid mx-auto d-block filter" /></a>
                </div>
		<!-- En comentario CASABLANCA
                <div class="col-md-2 col-6">
                    <a href="http://www.casablancafashiongroup.com/" target="_blank"><img src="assets/logos/casa_blanca.png" alt="Casa Blanca" class="img-fluid mx-auto d-block filter" /></a>
                </div>
		-->
                <div class="col-md-2 col-6">
                    <a href="http://www.dpsons.com/" target="_blank"><img src="assets/logos/frida.png" alt="Frida Kahlo" class="img-fluid mx-auto d-block filter" /></a>
                </div>
                <div class="col-md-2 offset-md-2 col-6">
                    <a href="http://www.dpsons.com/" target="_blank"><img src="assets/logos/dp_son.png" alt="Dorado Pizzorni" class="img-fluid mx-auto d-block filter" /></a>
                </div>
                <div class="col-md-2 col-6">
                    <a href="http://www.italinmuebles.com/" target="_blank"><img src="assets/logos/ital_inmuebles.png" alt="Ital Inmuebles" class="img-fluid mx-auto d-block filter" /></a>
                </div>
                <div class="col-md-2 col-6">
                    <a href="http://www.italpromotions.com/" target="_blank"><img src="assets/logos/ital_promotion.png" alt="Ital Promotions" class="img-fluid mx-auto d-block filter" /></a>
                </div>
                <div class="col-md-2 col-6">
                    <a href="http://www.italbank.com/" target="_blank"><img src="assets/logos/ital_bank.png" alt="Ital Bank" class="img-fluid mx-auto d-block filter" /></a>
                </div>
            </div>
        </section>





        <!--Footer-->
        <?php include("includes/footer.html");?>
    
    
    
    
    
    
    
    
    
        <!-- JavaScript -->
        <!-- jQuery primero, luego Popper.js, luego Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js"
            integrity="sha384-7aThvCh9TypR7fIc2HV4O/nFMVCBwyIUKL8XCtKE+8xgCgl/PQGuFsvShjr74PBp"
            crossorigin="anonymous"></script>
	<script type="text/javascript">
            $('#modalinicio').modal('show');
        </script>

        <!--Rocket-->
        <?php include("includes/rocket.php");?>
    </body>
</html>