<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>WOLFTECH - Inicio</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.png" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->

    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />


</head>

<div id="inicio">
</div>
<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container px-4 px-lg-5">
        <a href="#inicio">
  <img src="assets/favicon.png" alt="Description of the image" width="60" height="60">
</a>
            <a class="navbar-brand" href="#p    age-top"><img src="assets/img/" alt=""></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#about">Acerca de nosotros</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projects">Proyecto</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contacto</a></li>
                    <li class="nav-item">

                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
            <div class="d-flex justify-content-center">
                <div class="text-center">
                    <h1 class="mx-auto my-0 text-uppercase">WolfTech</h1>
                    <h2 class="text-white-50 mx-auto mt-2 mb-5"></h2>
                    <br><br><br><br><br><br><br><br><br><br><br>

                    <style>
                    .btn-compra {
                        padding: 20px 40px;
                        font-size: 24px;
                        font-weight: bold;
                        text-transform: uppercase;
                        color: #00ffff;
                        background-color: transparent;
                        border: 2px solid #00ffff;
                        border-radius: 10px;
                        cursor: pointer;
                        transition: all 0.3s ease;
                        position: relative;
                        overflow: hidden;
                        text-shadow: 0 0 10px #00ffff;
                        box-shadow: 0 0 20px #00ffff, inset 0 0 20px #00ffff;
                    }

                    .btn-compra:before {
                        content: "";
                        position: absolute;
                        top: -50%;
                        left: -50%;
                        width: 200%;
                        height: 200%;
                        background: rgba(0, 255, 255, 0.1);
                        transform-origin: 0 0;
                        animation: rotate 6s linear infinite;
                        z-index: -1;
                    }

                    .btn-compra:hover {
                        background-color: rgba(0, 255, 255, 0.1);
                        box-shadow: 0 0 40px #00ffff, inset 0 0 40px #00ffff;
                        text-shadow: 0 0 20px #00ffff;
                    }

                    .btn-compra:active {
                        transform: scale(0.95);
                    }

                    @keyframes rotate {
                        100% {
                            transform: rotate(360deg);
                        }
                    }

                    .btn-compra span {
                        display: inline-block;
                        vertical-align: middle;
                    }

                    .btn-compra .icon {
                        margin-right: 10px;
                        font-size: 28px;
                    }

                    .pulse {
                        animation: pulse 2s infinite;
                    }

                    @keyframes pulse {
                        0% {
                            transform: scale(1);
                        }

                        50% {
                            transform: scale(1.05);
                        }

                        100% {
                            transform: scale(1);
                        }
                    }
                    </style>

                    <button class="btn-compra pulse" id="btnCompra">
                        <span class="icon">🛒</span>
                        <span>Compra Ya</span>
                    </button>

                    <script>
                    document.getElementById('btnCompra').addEventListener('click', function() {
                        // Cambia 'https://tu-pagina-de-ventas.com' por la URL real de tu página de ventas
                        window.location.href = 'http://localhost/pepe/';

                    });
                    </script>




                </div>
            </div>
        </div>
    </header>
    <!-- About-->
    <section class="about-section text-center" id="about">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8">

                    <p class="text-white-50">
                        Esta pagina esta diseñada por dos jovenes soñadores con metas por delante queriendo salir
                        adelante con un proyecto diseñado a todo el ambito tecgnologico por eso te invito a que te tomes
                        la delicadeza de explorar cada uno de los rincones de nuestra fabulosa creacion,
                        y veras lo sensacional que es entrar al mundo y al paraiso de lo que es la tecgnologia.

                    </p>
                </div>
            </div>

        </div>
    </section>
    <!-- Projects-->
    <section class="projects-section bg-light" id="projects">
    <div class="container px-4 px-lg-5">
        <!-- Featured Project Row-->
        <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
            <div class="col-xl-8 col-lg-7">
                <img class="img-fluid mb-3 mb-lg-0 fade-in-up" width="45%" height="auto" src="assets/img/ensamble.png" alt="..." />
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="featured-text text-center text-lg-left">
                    <h4>Ensambles</h4>
                    <br>
                    <p class="text-black-50 mb-0">En el contexto del hardware, un ensamble es el proceso de ensamblar componentes para formar un dispositivo completo. Por ejemplo, el ensamblaje de una computadora implica montar la placa base, conectar el procesador, instalar la memoria RAM y el almacenamiento, y conectar otros periféricos.</p>
                </div>
            </div>
        </div>
        <br><br><br><br><br><br><br><br><br>
        <!-- Project One Row-->
        <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
            <div class="col-lg-6"><img class="img-fluid fade-in-up" src="assets/img/setup.png" alt="..." /></div>
            <div class="col-lg-6">
                <div class="bg-black text-center h-100 project">
                    <div class="d-flex h-100">
                        <div class="project-text w-100 my-auto text-center text-lg-left">
                            <h4 class="text-white">Torres</h4>
                            <br>
                            <p class="mb-0 text-white-50">Son sistemas de computación diseñados para ser utilizados en una ubicación fija, como una oficina, estudio o espacio de trabajo en el hogar. A diferencia de las laptops o computadoras portátiles, los PCs de escritorio no están diseñados para la portabilidad y suelen ofrecer más potencia, capacidad de expansión y facilidad de mantenimiento.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br><br><br><br><br><br><br><br>
        <!-- Project Two Row-->
        <div class="row gx-0 justify-content-center">
            <div class="col-lg-6"><img class="img-fluid fade-in-up" src="assets/img/laptopgamer.png" alt="..." /></div>
            <div class="col-lg-6 order-lg-first">
                <div class="bg-black text-center h-100 project">
                    <div class="d-flex h-100">
                        <div class="project-text w-100 my-auto text-center text-lg-right">
                            <h4 class="text-white">Portatiles</h4>
                            <p class="mb-0 text-white-50">Another example of a project with its respective description. These sections work well responsively as well!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .fade-in-up {
        opacity: 0;
        transform: translateY(40px);
        transition: opacity 2s ease-out, transform 2s ease-out;
    }
    .fade-in-up.visible {
        opacity: 1;
        transform: translateY(0);
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, {
        threshold: 0.1
    });

    document.querySelectorAll('.fade-in-up').forEach(img => {
        observer.observe(img);
    });
});
</script>
    <!-- Signup-->
    <li class="nav-item"><a class="nav-link" href="#signup1"></a>
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5">
                <div class="col-md-10 col-lg-8 mx-auto text-center">
                    <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                    <h2 class="text-white mb-5">Registrate para que estes al tanto de Nosotros!</h2>

                    <form class="form-signup" id="contactForm" data-sb-form-api-token="API_TOKEN">
                        <!-- Email address input-->
                        <div class="row input-group-newsletter">
                            <div class="col"><input class="form-control" id="emailAddress" type="email"
                                    placeholder="Ingresa Direccion de correo" aria-label="Ingresa Direccion de correo"
                                    data-sb-validations="required,email" /></div>
                            <div class="col-auto"><button class="btn btn-primary disabled" id="submitButton"
                                    type="submit">Notificame</button></div>
                        </div>
                        <br><br><br><br><br><br><br><br><br><br>
                        <div class="invalid-feedback mt-2" data-sb-feedback="emailAddress:required">Se requiere un
                            correo electronico</div>
                        <div class="invalid-feedback mt-2" data-sb-feedback="emailAddress:email">Correo no valido</div>
                        <!-- Submit success message-->
                        <!---->
                        <!-- This is what your users will see when the form-->
                        <!-- has successfully submitted-->
                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center mb-3 mt-2 text-white">
                                <div class="fw-bolder">Envio de Formulario exitoso!</div>

                                <br />

                            </div>
                        </div>
                        <!-- Submit error message-->
                        <!---->
                        <!-- This is what your users will see when there is-->
                        <!-- an error submitting the form-->
                        <div class="d-none" id="submitErrorMessage">
                            <div class="text-center text-danger mb-3 mt-2">Error al enviar mensaje!</div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </section>
        <!-- Contact-->

        </div>
        </div>
        </div>
        <ul class="wrapper">
            <li class="icon facebook">
                <a href="https://www.facebook.com" target="_blank">
                    <span><i class="fab fa-facebook-f"></i></span>
                </a>
            </li>
            <li class="icon youtube">
                <a href="https://www.youtube.com/@Wolf_Tech." target="_blank">
                    <span><i class="fab fa-youtube"></i></span>
                </a>
            </li>
            <li class="icon tiktok">
                <a href="https://www.tiktok.com/@wolf_tech1" target="_blank">
                    <span><i class="fab fa-tiktok"></i></span>
                </a>
            </li>
            <li class="icon instagram">
                <a href="https://www.instagram.com/wolf_tech1/" target="_blank">
                    <span><i class="fab fa-instagram"></i></span>
                </a>
            </li>
        </ul>
        </div>
        <style>
        @import url('https://fonts.googleapis.com/css2?family=SUSE:wght@100..800&display=swap');

        * {
            margin: 0;
            padding: 0;

        }

        *:focus,
        *:active {
            outline: none !important;
            -webkit-tap-highlight-color: transparent;
        }

        html,
        body {
            display: table;
            height: 100%;
            width: 100%;
            font-family: "SUSE", sans-serif;
            place-items: center;
            text-align: center;
            background: radial-gradient(circle at 24.1% 68.8%, rgb(50, 50, 50) 0%, rgb(0, 0, 0) 99.4%);
        }

        .wrapper {
            display: inline-flex;
            list-style: none;
        }

        .wrapper .icon {
            position: relative;
            background: #ffffff;
            border-radius: 15px;
            padding: 15px;
            margin: 10px;
            width: 50px;
            height: 50px;
            font-size: 18px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            transition: all 0.2s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }

        .wrapper .icon a {
            display: flex;
            /* Add this line */
            width: 100%;
            height: 100%;
            justify-content: center;
            align-items: center;
        }

        .wrapper .tooltip {
            position: absolute;
            top: 0;
            font-size: 14px;
            background: #ffffff;
            color: #ffffff;
            padding: 5px 8px;
            border-radius: 5px;
            box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
            opacity: 0;
            pointer-events: none;
            transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }

        .wrapper .tooltip::before {
            position: absolute;
            content: "";
            height: 8px;
            width: 8px;
            background: #ffffff;
            bottom: -3px;
            left: 50%;
            transform: translate(-50%) rotate(45deg);
            transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }

        .wrapper .icon:hover .tooltip {
            top: -45px;
            opacity: 1;
            visibility: visible;
            pointer-events: auto;
        }

        .wrapper .icon:hover span,
        .wrapper .icon:hover .tooltip {
            text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.1);
        }

        .wrapper .facebook:hover,
        .wrapper .facebook:hover .tooltip,
        .wrapper .facebook:hover .tooltip::before {
            background: #1877F2;
            color: #ffffff;
        }

        .wrapper .tiktok:hover,
        .wrapper .tiktok:hover .tooltip,
        .wrapper .tiktok:hover .tooltip::before {
            background: #000000;
            color: #ffffff;
        }

        .wrapper .instagram:hover,
        .wrapper .instagram:hover .tooltip,
        .wrapper .instagram:hover .tooltip::before {
            background: #e911be;
            color: #ffffff;
        }

        .wrapper .youtube:hover,
        .wrapper .youtube:hover .tooltip,
        .wrapper .youtube:hover .tooltip::before {
            background: #CD201F;
            color: #ffffff;
        }
        </style>
        </div>
        </section>
        <!-- Footer-->
        <footer class="footer bg-black small text-center text-white-50">
            <div class="container px-4 px-lg-5">Copyright &copy; Your Website 2023</div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>