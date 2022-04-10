<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Condensed&display=swap" rel="stylesheet">
    <!-- hoja de estilos -->
    <link rel="stylesheet" href="./css/styles.css">
    <!-- css Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- título de página -->
    <title>Título de la página</title>
    <!-- javascript Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<!-- COMPROBAR SI LOS FICHEROS EXISTEN -->

<?php
if (file_exists('xml/parte-hamburguesa.xml')) {
    $hambur = simplexml_load_file('xml/parte-hamburguesa.xml');
} else {
    exit('Error abriendo parte-hamburguesa.xml');
}

if (file_exists('xml/parte-aperitivos.xml')){
    $aper = simplexml_load_file('xml/parte-aperitivos.xml');
}else {
    exit('Error abriendo parte-aperitivos.xml');
}

if (file_exists('xml/parte-bebidas.xml')){
    $bebi = simplexml_load_file('xml/parte-bebidas.xml');
}else {
    exit('Error abriendo parte-bebidas.xml');
}

if (file_exists('xml/parte-cafes.xml')){
    $cafe = simplexml_load_file('xml/parte-cafes.xml');
}else {
    exit('Error abriendo parte-cafes.xml');
}
?>

<body>
    <h1 class="titulo">Para Empezar</h1>
    <div id="acordeon">
        <div class="row-c margen">
        <!-- ACORDEON 1 -->    
            <div class="accordion column-2">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <h6>HAMBURGUESAS</h6>
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Titulo</th>
                                        <th scope="col" class="oculto">Descripción</th>
                                        <th scope="col" class="oculto">Calorias</th>
                                        <th scope="col" class="oculto">Características</th>
                                        <th scope="col">Precio</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        if(isset($_GET['hambur'])){
                                            /* filtro por cine */
                                            foreach($hambur->menu as $menu){
                                                if($_GET['hambur']==$film['hambur']){
                                                    echo '<tr>';
                                                    echo '<td>'.'<p>'.$menu->titulo.'</p>'.'</td>';
                                                    echo '<td class="oculto">'.'<p>'.$menu->descripcion.'</p>'.'</td>';
                                                    echo '<td class="oculto">'.'<p>'.$menu->calorias.'</p>'.'</td>';
                                                    echo '<td class="oculto">'.'<p>'.$menu->caracteristicas.'</p>'.'</td>';
                                                    echo '<td>'.'<p>'.$menu->precio.'</p>'.'</td>';
                                                    echo '</tr>';
                                                }
                                            }
                                        }else{
                                            /* no filtro (muestro todos los datos) */
                                            foreach($hambur->menu as $menu){
                                                    echo '<tr>';
                                                    echo '<td>'.'<p>'.$menu->titulo.'</p>'.'</td>';
                                                    echo '<td>'.'<p class="oculto">'.$menu->descripcion.'</p>'.'</td>';
                                                    echo '<td>'.'<p class="oculto">'.$menu->calorias.'</p>'.'</td>';
                                                    echo '<td>'.'<p class="oculto">'.$menu->caracteristicas.'</p>'.'</td>';
                                                    echo '<td>'.'<p>'.$menu->precio.'</p>'.'</td>';
                                                    echo '</tr>';
                                                }
                                            }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <img src="./img/hamburguesa.jpg" alt="">
                </div>
            </div>

            <!-- ACORDEON 2 -->

            <div class="accordion column-2">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                            <h6>APERITIVOS</h2>
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Titulo</th>
                                        <th scope="col" class="oculto">Descripción</th>
                                        <th scope="col" class="oculto">Calorias</th>
                                        <th scope="col" class="oculto">Características</th>
                                        <th scope="col">Precio</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        if(isset($_GET['aper'])){
                                            /* filtro por cine */
                                            foreach($aper->menu as $menu){
                                                if($_GET['aper']==$film['aper']){
                                                    echo '<tr>';
                                                    echo '<td>'.'<p>'.$menu->titulo.'</p>'.'</td>';
                                                    echo '<td>'.'<p class="oculto">'.$menu->descripcion.'</p>'.'</td>';
                                                    echo '<td>'.'<p class="oculto">'.$menu->calorias.'</p>'.'</td>';
                                                    echo '<td>'.'<p class="oculto">'.$menu->caracteristicas.'</p>'.'</td>';
                                                    echo '<td>'.'<p>'.$menu->precio.'</p>'.'</td>';
                                                    echo '</tr>';
                                                }
                                            }
                                        }else{
                                            /* no filtro (muestro todos los datos) */
                                            foreach($aper->menu as $menu){
                                                    echo '<tr>';
                                                    echo '<td>'.'<p>'.$menu->titulo.'</p>'.'</td>';
                                                    echo '<td>'.'<p class="oculto">'.$menu->descripcion.'</p>'.'</td>';
                                                    echo '<td>'.'<p class="oculto">'.$menu->calorias.'</p>'.'</td>';
                                                    echo '<td>'.'<p class="oculto">'.$menu->caracteristicas.'</p>'.'</td>';
                                                    echo '<td>'.'<p>'.$menu->precio.'</p>'.'</td>';
                                                    echo '</tr>';
                                                }
                                            }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div> 
                    <img src="./img/aperitivos.jpg" alt="">
                </div>
            </div>
        </div>

        <h1 class="titulo">Para Beber</h1>
        
        <div class="row-c">
            <!-- ACORDEON 3 -->
            <div class="accordion column-2">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                            <h6>BEBIDAS</h6>
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Titulo</th>
                                        <th scope="col" class="oculto">Descripción</th>
                                        <th scope="col" class="oculto">Calorias</th>
                                        <th scope="col" class="oculto">Características</th>
                                        <th scope="col">Precio</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        if(isset($_GET['bebi'])){
                                            /* filtro por cine */
                                            foreach($bebi->menu as $menu){
                                                if($_GET['bebi']==$film['bebi']){
                                                    echo '<tr>';
                                                    echo '<td>'.'<p>'.$menu->titulo.'</p>'.'</td>';
                                                    echo '<td>'.'<p class="oculto">'.$menu->descripcion.'</p>'.'</td>';
                                                    echo '<td>'.'<p class="oculto">'.$menu->calorias.'</p>'.'</td>';
                                                    echo '<td>'.'<p class="oculto">'.$menu->caracteristicas.'</p>'.'</td>';
                                                    echo '<td>'.'<p>'.$menu->precio.'</p>'.'</td>';
                                                    echo '</tr>';
                                                }
                                            }
                                        }else{
                                            /* no filtro (muestro todos los datos) */
                                            foreach($bebi->menu as $menu){
                                                    echo '<tr>';
                                                    echo '<td>'.'<p>'.$menu->titulo.'</p>'.'</td>';
                                                    echo '<td>'.'<p class="oculto">'.$menu->descripcion.'</p>'.'</td>';
                                                    echo '<td>'.'<p class="oculto">'.$menu->calorias.'</p>'.'</td>';
                                                    echo '<td>'.'<p class="oculto">'.$menu->caracteristicas.'</p>'.'</td>';
                                                    echo '<td>'.'<p>'.$menu->precio.'</p>'.'</td>';
                                                    echo '</tr>';
                                                }
                                            }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <img src="./img/bebidas.jpg" alt="">
                </div>
            </div>

            <!-- ACORDEON 4 -->

            <div class="accordion column-2">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                            <h6>CAFÉS</h6>
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Titulo</th>
                                        <th scope="col" class="oculto">Descripción</th>
                                        <th scope="col" class="oculto">Calorias</th>
                                        <th scope="col" class="oculto">Características</th>
                                        <th scope="col">Precio</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        if(isset($_GET['cafe'])){
                                            /* filtro por cine */
                                            echo '<tr>';
                                            echo '<td>'.'<p>'.$menu->titulo.'</p>'.'</td>';
                                            echo '<td>'.'<p class="oculto">'.$menu->descripcion.'</p>'.'</td>';
                                            echo '<td>'.'<p class="oculto">'.$menu->calorias.'</p>'.'</td>';
                                            echo '<td>'.'<p class="oculto">'.$menu->caracteristicas.'</p>'.'</td>';
                                            echo '<td>'.'<p>'.$menu->precio.'</p>'.'</td>';
                                            echo '</tr>';
                                        }else{
                                            /* no filtro (muestro todos los datos) */
                                            foreach($cafe->menu as $menu){
                                                echo '<tr>';
                                                echo '<td>'.'<p>'.$menu->titulo.'</p>'.'</td>';
                                                echo '<td>'.'<p class="oculto">'.$menu->descripcion.'</p>'.'</td>';
                                                echo '<td>'.'<p class="oculto">'.$menu->calorias.'</p>'.'</td>';
                                                echo '<td>'.'<p class="oculto">'.$menu->caracteristicas.'</p>'.'</td>';
                                                echo '<td>'.'<p>'.$menu->precio.'</p>'.'</td>';
                                                echo '</tr>';
                                            }
                                        }  
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <img src="./img/cafes.jpg" alt="">
                </div>
            </div>
        </div>   
    </div>



</body>