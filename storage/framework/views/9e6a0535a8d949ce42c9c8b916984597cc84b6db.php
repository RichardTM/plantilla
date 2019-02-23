<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>

            .sec{
            position: relative;
            width: 100%;
            height: 110vh;
            overflow: hidden;
            color: transparent;

            }


            .uno{
            background: url(../imagen/imagenrevista.jpg);

            background-attachment: fixed;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;

            }


            .sesgouno{
            position: absolute;

            bottom:  0;
            left: 0;
            border-width: 25vh 100vw 0  0  ;
            border-style: solid;
            border-color:   transparent #fff transparent  transparent ;
            }

            .sesgounomedio{
            position: absolute;

            bottom:  0;
            left: 0;
            border-width: 25vh  0  0 100vw ;
            border-style: solid;
            border-color:   transparent transparent  transparent #fff  ;
            }


                        *{
            margin: 0;
            padding: 0;
            }

            body{
            font-family: arial, san-serif;
            font-size: 16px;
            }


            .sec{
            position: relative;
            width: 100%;
            height: 110vh;
            overflow: hidden;
            color: transparent;

            }


            .uno{
            background: url(https://i.pinimg.com/originals/2f/77/88/2f77880be2f62ae3b727b293b9cd4568.jpg);

            background-attachment: fixed;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;

            }


            .sesgouno{
            position: absolute;

            bottom:  0;
            left: 0;
            border-width: 25vh 100vw 0  0  ;
            border-style: solid;
            border-color:   transparent #fff transparent  transparent ;
            }

            .sesgounomedio{
            position: absolute;

            bottom:  0;
            left: 0;
            border-width: 25vh  0  0 100vw ;
            border-style: solid;
            border-color:   transparent transparent  transparent #fff  ;
            }




            /*titulo de la revista*/
            #cabecera  {

                border: 1px ;
                padding: 50px ;
            text-align: center;


            }


            /* ubicacion del logo*/
            .encabezado{
            float: left;
            position: relative;
            max-width: 250px;
            padding: 60px 10px;
            }




            /* logo de uraccan*/
            .logoura{
            float: right;
                max-width: 190px;
                padding: 80px 40px;
                position: relative;
            }




            /*fuente del titulo*/
            #cabecera h1{

                font: bold 80px  Agency FB, sans-serif;
                color:yellow;
                text-shadow: 10px 5px 3px black;
                padding: 15px 0px;
            }




            #menu ul {
            list-style: none;
            float: right;
            }

            #fondo{
                background:black;

                padding: 30px 70px;

            }


            #menu li a {

                background-color: transparent;
                padding: 17px 70px;
                text-decoration: none;

                font: bold 14px verdana, sans-serif;
                color: white;
                display: block;
                margin-left: -40px;
                margin-right: 50px;
                margin-top: -25px;

            }




            #menu ul > li {
            float: left;


            }


            #menu li a:hover{
                background-color: gold;
                border-radius: 15px 15px;
                color: maroon;

            }





            p {
            font:   20px Agency FB, sans-serif;
            margin-left:  120px;
            font-size: 200px;


            }

            p {
            font:   20px Agency FB, sans-serif;
            margin-left:  120px;
            font-size: 200px;


            }

            h2 {
                            background-color: #fff;
                            color: #636b6f;
                            font-family: bold 70px 'Nunito', sans-serif;
                            text-shadow:1px 2px 3px black;
                            font-weight: 200;
                            height: 100vh;
                            margin: 0;
                        }

            h2{
                text-align: center;
                margin-top: 50px;
            }


            h3 {
                            background-color: #fff;
                            color: #636b6f;
                            font-family: bold 70px 'Nunito', sans-serif;

                            font-weight: 200;
                            height: 100vh;
                            margin: 0;
                        }

            h2{
                text-align: center;
            }

            h3{
                text-align: justify;
                margin-top: -550px;
                margin-left: 500px;
                margin-right:150px;
            }



            h4{
                background-color: #fff;
                            color: #636b6f;
                            font-family: bold 70px 'Nunito', sans-serif;
                }
            .text{
                margin-left:250px;
                margin-top: -600px;
            }

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <?php if(Route::has('login')): ?>
                <div class="top-right links">
                    <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(url('/home')); ?>">Home</a>
                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>">Login</a>

                        <?php if(Route::has('register')): ?>
                            <a href="<?php echo e(route('register')); ?>">Register</a>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            <?php endif; ?>





                    <header class="sec uno">
   	<div id="fondo">
        <nav id="menu">

        <ul>
            <li><a  href="home" >INICIO</a></li>
            <li><a  href="noticias" >NOTICIAS</a></li>
            <li><a  href="Galeria" >GALERIA</a></li>
            <li><a  href="about" >ACERCA DE</a></li>
            <li><a  href="contactos" >CONTACTOS</a></li>

        </ul>

    </nav>
    </div>
    <div class="encabezado">
    <img  width="100%"  src="imagen/LOGO REVISTA URACCAN.png" ></a>
    </div>
    <div class="logoura">
    <img  width="100%"   src="imagen/LOGO DE URACCAN.png" "></a>
    </div>

    <header id="cabecera" >
        <h1>APLICACION DE ENSEÑANZA DE LA LENGUA MISKITA</h1>

    </header>

    <div class="sesgouno"></div>
    <div class="sesgounomedio"></div>
	    </header>
	    <header>
	    	<div class="borde">
	    	<h2 > DESARROLLADORES   </h2>

            <h3>RICHARD TAICUS MORIANO</h3>
            <div class="text">
            <h4>Lugar y fecha de nacimiento:  Ricaurte, Nariño – Colombia - 12 de mayo de 1994</h4>
            <h4>Nacionalidad:			Colombiano</h4>
            <h4>Documento de identidad Col:   C. C.  1089292626 de Ricaurte-Nariño, Colombia</h4>
            <h4>Documento de identidad Nic:   Residencia N° 000045067</h4>
            <h4>Documento de Extranjería:       N° Pasaporte AP305450</h4>
            </div>


	    	</div>






                </div>
            </div>
        </div>
    </body>
</html>
