<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
                margin-top: -590px;
                margin-left: 150px;
                margin-right:150px;
            }

            .imag{
                margin-left: 500px;
                margin-top: -1000px;
            }

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif





                    <header class="sec uno">
   	<div id="fondo">
        <nav id="menu">

        <ul>
            <li><a  href="home" >INICIO</a></li>
            <li><a  href="noticias" >NOTICIAS</a></li>
            <li><a  href="galeria" >GALERIA</a></li>
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
	    	<h2 > PRINCIPALES NOTICIAS   </h2>

            <h3>La tecnología móvil ha tomado gran presencia tanto en la industria como en la educación, ejemplo de ello es el incremento en el uso de aplicaciones para dispositivos móviles donde las funcionalidades básicas de telefonía celular han sido mejoradas notoriamente; sin embargo, para poder hacer uso de dichas aplicaciones en la educación, es necesario considerar aspectos tanto, técnicos como pedagógicos.
En los últimos años dentro de la Universidad URACCAN, se han realizado varios estudios relacionados con el desarrollo de sistemas para dar un impulso a notables maneras de organizar la información y la forma de recopilarla mas fácilmente.
Se encontró el estudio realizado por Itihell Anthony Mejía Urbina del año dos mil ocho, titulado “Sistema de control de registro de los estudiantes de grado de la universidad URACCAN-Recinto Nueva Guinea”. Este trabajo contribuyó a digitalizar los procesos de registro de la matrícula de estudiantes en URACCAN, dando solución a una mejor organización de la información y la agilización del proceso de matrículas debido al alto crecimiento estudiantil ha venido aumentando año con año.
</h3>
	    	</div>
            <img  class= "imag" width="15%"  src="" ></a>






                </div>
            </div>
        </div>
    </body>
</html>
