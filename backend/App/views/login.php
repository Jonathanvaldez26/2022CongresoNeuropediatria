<?php
    echo $header;
?>
    <body class="">
    <main class="main-content main-content-bg mt-0">
        <section>
            <nav class="navbar navbar-expand-lg  blur blur-rounded top-0  z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
                <div class="container-fluid">
                    <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 ">
                        <!--<img src="/assets/img/logos/apm.png" style="width: 40px; height: 40px; margin-left: 5px; margin-right: 5px;">
                        <img src="/assets/img/logos/wadd.png" style="width: 40px; height: 40px; margin-left: 5px; margin-right: 5px;">-->
                         Neurología Pediátrica
                    </a>

                    <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0" id="navigation">
                        <ul class="navbar-nav navbar-nav-hover mx-auto">
                        </ul>
                        <ul class="navbar-nav d-lg-block d-none">
                            <li class="nav-item">
                                <a href="/Login/" class="btn btn-sm  bg-gradient-info  btn-round mb-0 me-1" onclick="smoothToPricing('pricing-soft-ui')">INICIAR SESIÓN</a>
                                <!--<a href="https://registro.dualdisorderswaddmexico2022.com/Login/" class="flag-cont" onclick="smoothToPricing('pricing-soft-ui')">
                                    <img id="flag" src="/assets/img/spain.png">
                                </a>-->
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="page-header min-vh-75">
                <div class="container mt-0">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                            <div class="card card-plain mt-3">
                                <div class="card-header pb-0 text-start">
                                    <div class="text-center">
                                    <!-- <img src="/assets/img/logos/apm.png" style="width: 140px; margin:0px auto; height: 140px;" class="img-responsive">
                                    <img src="/assets/img/logos/wadd.png" style="width: 140px; margin:0px auto; height: 140px;" class="img-responsive"> -->
                                        <!--<h5  style="color: #1B8586;" class="font-weight-bolder mt-7">XXXI</h5>-->
                                        <hr>
                                        <h4  style="color: #a19a9a;" class="font-weight-bolder">"XXXI Congreso Anual de la Sociedad Mexicana de Neurología Pediátrica"</h4>
                                </div>
                                </div>
                                <div class="card-body">
                                    <form role="form" class="text-start" id="login" action="/Login/crearSession" method="POST" class="form-horizontal">
                                        <label>¿Tiene usted una cuenta?</label>
                                        <div class="mb-1">
                                            <input type="email" name="usuario" id="usuario" class="form-control" placeholder="Escribe tu correo electrónico aquí" aria-label="Email">
                                        </div>
                                        <div class="text-center">
                                            <button type="button" id="btnEntrar" class="btn bg-gradient-info w-100 mt-2 mb-0">INISIAR SESIÓN</button>
                                        </div>
                                    </form>
                                    <div class="text-center">
                                        <p class="mb-3 text-sm mx-auto">
                                        ¿No tienes una cuenta? Para crear su cuenta al Congreso, haga clic en el botón Registrarse y proporcione una dirección de correo electrónico válida..
                                            <a style="background: #445573; color: #ffffff;" href="/Register/" type="button" class="btn w-100 mt-2 mb-0">Registrarme</a>

                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                                <!--<div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image:url('/assets/img/curved-images/curved9.jpg')"></div>-->
                                <video autoplay muted loop >
                                    <source class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" src="/assets/vid/POSTER-VI.mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
    <footer class="footer py-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center mb-0 mt-0">
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                        <span class="text-lg fab fa-facebook"></span>
                    </a>
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                        <span class="text-lg fab fa-twitter"></span>
                    </a>
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                        <span class="text-lg fab fa-instagram"></span>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-8 mx-auto text-center mt-0">
                    <p class="mb-0 text-secondary">
                        Copyright © <script>
                            document.write(new Date().getFullYear())
                        </script> Soft by Creative Grupo LAHE.
                    </p>
                </div>
            </div>
        </div>
    </footer>

    </body>

<?php echo $footer; ?>