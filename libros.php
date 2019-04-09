<?php require_once 'conexion.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Envíos Acosta</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU">
 
        
        <link rel="shortcut icon" href="img/apps-de-libros.png" />
</head>
<form action="libros.php" method="post" class="form">
                     
<body class="hidden">
    <div class="centrado" id="onload">
        <div class="lds-facebook"><div></div><div></div><div></div></div>
    </div>
    <header>
        <nav id="nav" class="nav1">
            <div class="contenedor-nav">
                <div class="logo">
                    <h2>Daniel Acosta Aponza</h2>
                </div>
                <div class="enlaces" id="enlaces">
                    <a href="#" id="enlace-inicio" class="btn-header">Inicio</a>
                    <a href="#" id="enlace-equipo" class="btn-header">Equipo</a>
                    <a href="#" id="enlace-servicio" class="btn-header">Servicios</a>
                    <a href="#" id="enlace-trabajo" class="btn-header">Trabajos</a>
                    <a href="#" id="enlace-contacto" class="btn-header">Contacto</a>
                </div>
                <div class="icono" id="open">
                    <span>&#9776;</span>
                </div>
            </div>
        </nav>
        <div class="textos">
            <h1>Envíos Acosta</h1>
            <h5>La pasión e innovación es lo que nos distingue del resto</h5>
            
        </div>
    </header>
    <main>
        <section class="team contenedor" id="equipo">
            <h3>Nuestro libros</h3>
            <p class="after">Conoce los libros mas asombrosa y creativa</p>
            <p class="after">Soy Daniel Acosta Aponza</p>
            <div class="card">
                <div class="content-card">
                    <div class="people">
                        <img src="img/38600767_1762271137183496_5167940646115213312_n.jpg" alt="">
                    </div>
                    <div class="texto-team">
                        <h4>D</h4>
                        <p>Daniel Acosta Aponza</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="about" id="servicio">
            <div class="contenedor">
                <h3>Nuestros servicios</h3>
                <p class="after">Siempre mejorando para ti</p>
                <div class="servicios">
                    <div class="caja-servicios">
                        <img src="img/heart.png" alt="">
                        <h4>Creativos y asombrosos</h4>
                
                    </div>
                    <div class="caja-servicios">
                        <img src="img/responsive.png" alt="">
                        <h4>Creativos y asombrosos</h4>
                        
                    </div>
                    <div class="caja-servicios">
                        <img src="img/efectos.png" alt="">
                        <h4>Creativos y asombrosos</h4>
                    
                    </div>
                </div>
            </div>       
        </section>
        <section class="work contenedor" id="trabajo">
            <h3>Nuestro trabajo</h3>
            <p class="after">Hacemos de algo simple algo extraordinario</p>
            <div class="botones-work">
                <ul>
                    <li class="filter active" data-nombre='todos'>Todos</li>
                    <li class="filter" data-nombre='diseño'>Diseño</li>
                    <li class="filter" data-nombre='programacion'>Programacion</li>
                    <li class="filter" data-nombre='marketing'>Extremo</li>
                    <a href="formulario.php"></a> <li class="filter" data-nombre='formulario'>formulario</li></a>
                </ul>
            </div>
            <div class="galeria-work">
                <div class="cont-work programacion">
                    <div class="img-work">
                        <a href="contacto"><img src="img/descarga.jpg" alt=""></a>
                    </div>
                    <div class="textos-work">
                        <h4>Programacion</h4>
                    </div>
                </div>
                <div class="cont-work programacion">
                    <div class="img-work">
                        <img src="img/414fd8b7-modo-manual.png" alt="">
                    </div>
                    <div class="textos-work">
                        <h4>Programacion</h4>
                    </div>
                </div>
                <div class="cont-work programacion">
                    <div class="img-work">
                        <img src="img/images.jpg" alt="">
                    </div>
                    <div class="textos-work">
                        <h4>Programacion</h4>
                    </div>
                </div>
                <div class="cont-work diseño">
                    <div class="img-work">
                        <img src="img/91f932e3-100ejer.png" alt="">
                    </div>
                    <div class="textos-work">
                        <h4>Diseño</h4>
                    </div>
                </div>
                <div class="cont-work diseño">
                    <div class="img-work">
                        <img src="img/3c00eea4-viajero11.png" alt="">
                    </div>
                    <div class="textos-work">
                        <h4>Diseño</h4>
                    </div>
                </div>
                <div class="cont-work diseño">
                    <div class="img-work">
                        <img src="img/3D-estándar-sin-logo-de-sello-de-la-nueva-edición-de-Cincuenta-sombras-más-oscuras.png" alt="">
                    </div>
                    <div class="textos-work">
                        <h4>Diseño</h4>
                    </div>
                </div>
                <div class="cont-work marketing">
                    <div class="img-work">
                        <img src="img/images (1).jpg" alt="">
                    </div>
                    <div class="textos-work">
                        <h4>Marketing</h4>
                    </div>
                </div>
                <div class="cont-work marketing">
                    <div class="img-work">
                        <img src="img/images (2).jpg" alt="">
                    </div>
                    <div class="textos-work">
                        <h4>Marketing</h4>
                    </div>
                </div>
                <div class="cont-work marketing">
                    <div class="img-work">
                        <img src="img/posters-pelicula-x-men-dark-phoenix-2019-42x30cm-D_NQ_NP_920429-MLA28652129170_112018-F.jpg" alt="">
                    </div>
                    <div class="textos-work">
                        <h4>Marketing</h4>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer id="contacto">
        <div class="footer contenedor">
            <div class="marca-logo">
              <h6>Daniel Acosta Aponza</h6>
              <h6>3004717234</h6>
            </div>
            <div class="iconos">
                <a  href=""><i class="fab fa-youtube"></a></i>
                <a href="https://www.facebook.com/danielitho.acostaaponza"><i class="fab fa-facebook-square"></a></i>
                <a href="https://github.com/pulls"><i class="fab fa-github"></i>
            </div>
            <?php if (isset($_SESSION['message'])) { ?>
                                            <div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
                                            <strong><?= $_SESSION['message'] ?></strong>
                                            
                                            </div>
            
                                      <?php session_unset(); } ?> 
                                      <div class="limiter">
            <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
                <div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
                    <form class="login100-form validate-form flex-sb flex-w">
                        <span class="login100-form-title p-b-53">
                            Envios de Libros
                        </span>
    
                        <a href="#" class="btn-face m-b-20">
                            <i class="fa fa-facebook-official"></i>
                            Facebook
                        </a>
    
                        <a href="#" class="btn-google m-b-20">
                           
                            Google
                        </a>
                        
                        <div class="p-t-31 p-b-9">
                            <span class="txt1">
                                    Username
                            </span>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate = "Username is required">
                            <input class="input100" type="text" name="username" >
                            <span class="focus-input100"></span>
                        </div>
                        
                        <div class="p-t-13 p-b-9">
                            <span class="txt1">
                                Password
                            </span>
    
                            <a href="#" class="txt2 bo1 m-l-5">
                                Forgot?
                            </a>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate = "Password is required">
                            <input class="input100" type="password" name="pass" >
                            <span class="focus-input100"></span>
                        </div>
    
                        <div class="container-login100-form-btn m-t-17">
                            <button type="submit">Sign In</button>
                        </div>
    
                        <div class="w-full text-center p-t-55">
                            <span class="txt2">
                                Not a member?
                            </span>
    
                            <a href="#" class="txt2 bo1">
                                Sign up now
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    
        <div id="dropDownSelect1"></div>

    </body>
    </html>
                          
        </div>
       

    </footer>
    <script src="js/jquery.js"></script>
    <script src="js/main.js"></script>
    <script src="js/filtro.js"></script>
</body>
</html>