<?php
echo $header;
?>

<body>
    <main class="main-content main-content-bg mt-0">
        <section>
            <nav class="navbar navbar-expand-lg  blur blur-rounded top-0  z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
                <div class="container-fluid">
                    <!--<a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 ">
                        <img src="/assets/img/logos/apmn.png" style="width: 40px; height: 40px; margin-left: 5px; margin-right: 5px;">
                        <img src="/assets/img/logos/waddn.png" style="width: 40px; height: 40px; margin-left: 5px; margin-right: 5px;">
                        XXXI Congreso Anual de la Sociedad Mexicana de Neurología Pediátrica
                    </a>-->

                    <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0" id="navigation">
                        <ul class="navbar-nav navbar-nav-hover mx-auto">
                        </ul>
                        <ul class="navbar-nav d-lg-block d-none">
                            <li class="nav-item">
                                <a href="/Login/" class="btn btn-sm  bg-gradient-info  btn-round mb-0 me-1" onclick="smoothToPricing('pricing-soft-ui')">INICIAR SESIÓN</a>
                                
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="min-vh-75">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-10 col-lg-10 col-md-12 d-flex flex-column mx-auto">
                            <div class="card card-plain mt-7">
                                <div class="container-fluid py-0">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="multisteps-form">
                                                <!--progress bar-->
                                                <!--<div class="row" id="card_progress">
                                                    <div class="col-12 col-lg-12 mx-auto my-4">
                                                        <div class="multisteps-form__progress">
                                                            <button class="multisteps-form__progress-btn js-active" title="User Info" disabled>
                                                                <span>User Info</span>
                                                            </button>
                                                           
                                                        </div>
                                                    </div>
                                                </div>-->
                                                <!--form panels-->
                                                <div class="row">
                                                    <div class="col-12 col-lg-12 m-auto">
                                                        <form class="multisteps-form__form" id="add" action="/Register/Success" method="POST">
                                                            <!--single form panel-->
                                                            <div id="card_one" class="card multisteps-form__panel p-3 border-radius-xl bg-white js-active" id="card_one" data-animation="FadeIn">
                                                                <h5 class="font-weight-bolder mb-0">INFORMACION PERSONAL</h5>
                                                                <p class="mb-0 text-sm">Complete el siguiente formulario para crear su cuenta del Congreso. Los campos marcados con un * son obligatorios. Escriba su(s) nombre(s) y apellido(s) exactamente como desea que aparezcan en su constancia..</p>
                                                                <div class="multisteps-form__content">
                                                                    <br>
                                                                    <p class="mb-0 text-sm">Para crear su cuenta del Congreso, proporcione una dirección de correo electrónico válida</p>

                                                                    <div class="row mt-3">
                                                                        <div class="col-12 col-sm-6">
                                                                            <label>Correo electrónico *</label>
                                                                            <input class="multisteps-form__input form-control all_input" type="email" id="email" name="email" placeholder="eg. user@domain.com" autocomplete="no">
                                                                            <span class="mb-0 text-sm" id="error" style="display:none;color:red;">Email incorrecto</span>
                                                                        </div>
                                                                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                                                            <label>Confirmar correo electrónico *</label>
                                                                            <input class="multisteps-form__input form-control all_input all_email" type="email" id="confirm_email" name="confirm_email" placeholder="eg. user@domain.com" disabled autocomplete="no">
                                                                            <span class="mb-0 text-sm" id="error_confirm" style="display:none;color:red;"><label style="color:red;"> El email no coincide *</label></span>
                                                                        </div>
                                                                        <input type="hidden" id="email_validado" name="email_validado">

                                                                        <p class="mb-0 text-sm">Toda la información relacionada con su registro, será enviada a esta dirección de correo electrónico</p>
                                                                    </div>
                                                                    <div class="row mt-3">
                                                                        <div class="col-12 col-sm-2">
                                                                            <label>Título *</label>
                                                                            <select class="multisteps-form__select form-control all_input_select" name="prefijo" id="prefijo" required disabled>
                                                                                <option value="" disabled selected>Select Option</option>
                                                                                <option value="Dr.">DR.</option>
                                                                                <option value="Sr.">MR.</option>
                                                                                <option value="Sra.">MSS.</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-12 col-sm-10">
                                                                            <label>Nombre(s) *</label>
                                                                            <input class="multisteps-form__input form-control all_input" type="text" id="nombre" name="nombre" maxlength="15" placeholder="eg. JOSÉ CARLOS" required style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" autocomplete="no" disabled require>
                                                                        </div>

                                                                    </div>
                                                                    <div class="row mt-3">
                                                                        <div class="col-12 col-sm-6">
                                                                            <label>Apellido *</label>
                                                                            <input class="multisteps-form__input form-control all_input" type="text" id="apellidop" name="apellidop" maxlength="15" placeholder="eg. Jones" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" autocomplete="no" disabled require>
                                                                        </div>
                                                                        <div class="col-12 col-sm-6">
                                                                            <label>segundo apellido</label>
                                                                            <input class="multisteps-form__input form-control" type="text" id="apellidom" name="apellidom" maxlength="15" placeholder="eg. Wilson" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" autocomplete="no" disabled require>
                                                                        </div>

                                                                    </div>
                                                                    <div class="row mt-3">
                                                                        <div class="col-12 col-sm-3">
                                                                            <label>Teléfono</label>
                                                                            <input class="multisteps-form__input form-control" type="text" id="telefono" name="telefono" maxlength="10" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" placeholder="eg. (555) 555-1234" autocomplete="no" disabled require>
                                                                        </div>

                                                                        <div class="col-12 col-sm-3">
                                                                            <label>Especialidades **</label>
                                                                            <select class="multisteps-form__select form-control all_input_select" name="especialidad" id="especialidad" disabled require>
                                                                              

                                                                                <option value="" disabled selected>(Seleccionar)</option>
                                                                                <option value="Cirug&iacute;a General y Endoscopia">Cirug&iacute;a General</option>

                                                                                <option value="Cirugía pedi&aacute;trica">Cirugía pedi&aacute;trica</option>
                                                                                <option value="Endoscopia Pedi&aacute;trica ">Endoscopia Pedi&aacute;trica </option>
                                                                                <option value="Gastroendoscopia ">Gastroendoscopia </option>

                                                                                <option value="Gastroenterolog&iacute;a">Gastroenterolog&iacute;a</option>
                                                                                <option value="Endoscopista gastrointestinal">Endoscopista gastrointestinal</option>

                                                                                <option value="Pediatr&iacute;a">Pediatr&iacute;a</option>
                                                                                <option value="Bariatr&iacute;a">Bariatr&iacute;a</option>
                                                                                <option value="Medicina interna">Medicina interna</option>
                                                                                <option value="T&eacute;cnico">T&eacute;cnico</option>
                                                                                <option id="otros" value="otros">Otros</option>

                                                                            </select>
                                                                        </div>

                                                                        <div class="col-12 col-sm-3">
                                                                            <label>Nacionalidad *</label>
                                                                            <select class="multisteps-form__select form-control all_input_select" name="pais" id="pais" onchange="actualizaEdos();" disabled require>
                                                                                <option value="" disabled selected>Select Option</option>
                                                                                <?php echo $idCountry; ?>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-12 col-sm-3 mt-3 mt-sm-0">
                                                                            <label>Estado *</label>
                                                                            <select class="multisteps-form__select form-control all_input_select" name="estado" id="estado" disabled require>

                                                                            </select>
                                                                        </div>
                                                                    </div>
 
                                                                    <div class="button-row d-flex mt-4">
                                                                        <button class="btn bg-gradient-success ms-auto mb-0 js-btn-next" id="next_one"  type="submit" title="Next" disabled>Guardar</button>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </form>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Modal -->

        <!-- Modal -->
        <footer class="footer pt-12">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6 mb-lg-0 mb-4">
                        <div class="copyright text-center text-sm text-muted text-lg-start">
                            © <script>
                                document.write(new Date().getFullYear())
                            </script>,
                            made with <i class="fa fa-heart"></i> by
                            <a href="" class="font-weight-bold" target="www.grupolahe.com">Creative GRUPO LAHE</a>.
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                            <li class="nav-item">
                                <a href="#" class="nav-link pe-0 text-muted">privacy policies</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <?php echo $footer; ?>
    </main>


</body>