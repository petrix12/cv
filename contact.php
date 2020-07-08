<!doctype html>
<html lang="es">

<head>
    <title>Conctato - Ing. Pedro Bazó</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <?php include "partes/head.php"; ?>
</head>

<body>

    <section class="w3l-bootstrap-header">
        <nav class="navbar navbar-expand-lg navbar-light py-lg-3 py-2">
            <div class="container">
                <?php include "partes/logo.php"; ?>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa fa-bars"></span>
                </button>
                <?php include "partes/menu.php"; ?>
            </div>
        </nav>
    </section>
    <section class="w3l-about-breadcrum">
        <div class="breadcrum-bg">
            <div class="container py-5">
                <p><a href="index.php">Inicio</a> &nbsp; / &nbsp; Contáctame</p>
            </div>
        </div>
    </section>

    <!-- contact -->
    <section class="w3l-contacts-12" id="contact">
        <div class="contact-top pt-5">
            <div class="container py-md-3">
                <div class="row cont-main-top">
                    <!-- contact form -->
                    <div class="contacts12-main col-lg-6 ">
                        <form action="enviar.php" method="post" class="main-input">
                            <div class="top-inputs d-grid">
                                <input type="text" placeholder="Nombre" name="nombre" id="nombre" required="">
                            </div>
                            <input type="email" name="email" placeholder="Email" id="email" required="">
                            <textarea placeholder="Mensaje" name="mensaje" id="mensaje" required=""></textarea>
                            <div class="text-right">
                                <button type="submit" class="btn btn-theme2">Enviar</button>
                            </div>
                        </form>
                    </div>
                    <!-- //contact form -->
                    <!-- contact address -->
                    <div class="contact col-lg-6 mt-lg-0 mt-5">
                        <div class="cont-subs">
                            <div class="cont-add">
                                <div class="cont-add-lft">
                                    <span class="fa fa-map-marker" aria-hidden="true"></span>
                                </div>
                                <div class="cont-add-rgt">
                                    <p class="contact-text-sub">Res. Vista Lago, Av. La Guarita, Ccs 1080, Miranda. Venezuela</p>
                                </div>
                            </div>
                            <div class="cont-add add-2">
                                <div class="cont-add-lft">
                                    <span class="fa fa-envelope" aria-hidden="true"></span>
                                </div>
                                <div class="cont-add-rgt">
                                    <a href="mailto:bazo.pedro@gmail.com">
                                        <p class="contact-text-sub">bazo.pedro@gmail.com</p>
                                    </a>
                                </div>
                            </div>
                            <div class="cont-add">
                                <div class="cont-add-lft">
                                    <span class="fa fa-phone" aria-hidden="true"></span>
                                </div>
                                <div class="cont-add-rgt">
                                    <a href="tel:+7-800-999-800">
                                        <p class="contact-text-sub">+58-414-124.97.53</p>
                                    </a>
                                </div>
                            </div>
                            <div class="cont-add add-3">
                                <div class="cont-add-lft">
                                    <span class="fa fa-file-pdf-o" aria-hidden="true"></span>
                                </div>
                                <div class="cont-add-rgt">
                                    <a href="descargas/cv/CVPedroBazo20190426.pdf" target="_blank">
                                        <p class="contact-text-sub">Descargar mi CV</p>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- //contact address -->

                </div>
            </div>
            <!-- map -->
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d1557.1110843077633!2d-66.85458379865086!3d10.44730641104122!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d10.447498999999999!2d-66.85394939999999!5e0!3m2!1ses!2sve!4v1593389030862!5m2!1ses!2sve" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            <!-- //map -->
        </div>
    </section>
    <!-- //contact -->

    <?php include "partes/pie.php"; ?>
</body>

</html>
<!-- // grids block 5 -->