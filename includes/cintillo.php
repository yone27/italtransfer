<?php
error_reporting(0);
$url = 'http://10.100.100.20/italsis/includes/nusoap/currencyitfREST.php';
$obj = json_decode(file_get_contents($url), true);
$directorio = 'assets/banderas';
$ficheros  = scandir($directorio);
$i = 1;
while ($obj['iso'.$i]!= "") {
if (in_array($obj['iso'.$i].".png", $ficheros)) {
    echo ' 
        <div class="slide">
            <div class="row mb-15">
                <div class="col-4">
                    <img src="assets/banderas/'.$obj['iso'.$i].".png".'" alt="" />
                </div>
                <div class="col-8 pl-0">
                    <p class="small">'.$obj['iso'.$i].'</p>
                </div>
            </div>
            <p class="small">Compra: '.$obj['buyrate'.$i].' <br> Venta: '.$obj['sellrate'.$i].' </p>
        </div>        
    ';
}
$i++;
}
$e = 1;
while ($obj['iso'.$e]!= "") {
if (in_array($obj['iso'.$e].".png", $ficheros)) {
    echo ' 
        <div class="slide">
            <div class="row mb-15">
                <div class="col-4">
                    <img src="assets/banderas/'.$obj['iso'.$e].".png".'" alt="" />
                </div>
                <div class="col-8 pl-0">
                    <p class="small">'.$obj['iso'.$e].'</p>
                </div>
            </div>
            <p class="small">Compra: '.$obj['buyrate'.$e].' <br> Venta: '.$obj['sellrate'.$e].' </p>
        </div>        
    ';
}
$e++;
}
?>