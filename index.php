<!DOCTYPE html>
<!-- =============================================================
 /   Project:        David Web - Currículo Eletrônico
 /   Version:        1.0
 /   Author:         David Jeiel
 /   Primary use:    Curriculum.
 /   Email:          davidjeiel@gmail.com
 /   Follow:         http://www.twitter.com/davidjeiel
 /   Like:           http://www.facebook.com/davidjeiel
 /   Website:        http://www.davidjeiel.com
 / ============================================================== -->
<html lang="pt-br">
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8"/>
        <title>David WEB</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="" name="author"/>

        <!-- GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
        <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <!-- PAGE LEVEL PLUGIN STYLES -->
        <link href="css/animate.css" rel="stylesheet">

        <!-- THEME STYLES -->
        <link href="css/layout.min.css" rel="stylesheet" type="text/css"/>

        <!-- Favicon -->
        <link rel="shortcut icon" href="img/developer.png" type="image/x-icon" />
    </head>
    <!-- END HEAD -->
    <!-- BODY -->
    <body id="body" data-spy="scroll" data-target=".header">
        <!--========== HEADER ==========-->
        <header class="header navbar-fixed-top">
            <!-- Navbar -->
            <nav class="navbar" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="menu-container js_nav-item">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="toggle-icon"></span>
                        </button>

                        <!-- Logo -->
                        <div class="logo">
                            <a class="logo-wrap" href="#body">
                                <div class="logo-img logo-img-main" alt="Asentus Logo">
                                    <h3 style="color: white;">David WEB</h3>                                    
                                </div>
                                <img class="logo-img logo-img-active" src="img/logoDP3.jpg" alt="David Jeiel">
                            </a>
                        </div>
                        <!-- End Logo -->
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse nav-collapse">
                        <div class="menu-container">
                            <ul class="nav navbar-nav navbar-nav-right">
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#body">Início</a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#about">Sobre eu!</a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#experience">Experiencia</a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#work">Meu forte</a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#contact">Contatos</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Navbar Collapse -->
                </div>
            </nav>
            <!-- Navbar -->
        </header>
        <!--========== END HEADER ==========-->

        <!--========== SLIDER ==========-->
        <div class="promo-block parallax-window" data-parallax="scroll" data-image-src="img/ba2.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="promo-block-divider">
                            <h1 class="promo-block-title">David WEB</h1>
                            <p class="promo-block-text">Web Designer &amp; FullStack Developer</p>
                        </div>
                        <ul class="list-inline">
                            <li><a href="https://www.facebook.com/davidjeiel" class="social-icons"><i class="icon-social-facebook"></i></a></li>
                            <li><a href="https://twitter.com/davidjeiel" class="social-icons"><i class="icon-social-twitter"></i></a></li>
                            <li><a href="https://www.behance.net/davidjeiel" class="social-icons"><i class="icon-social-behance"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/davidjeiel/" class="social-icons"><i class="icon-social-linkedin"></i></a></li>
                            <li><a href="https://github.com/davidjeiel" class="social-icons"><i class="icon-social-github"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!--// end row -->
            </div>
        </div>
        <!--========== SLIDER ==========-->

        <!--========== PAGE LAYOUT ==========-->
        <!-- About -->
        <div id="about">
            <div class="container content-lg">
                <div class="row">
                    <div class="col-sm-3 sm-margin-b-30">
                        <div class="text-right sm-text-left">
                            <h2 class="margin-b-0">Sobre Eu</h2>
                            <p>Um pouco sobre meu trabalho.</p>
                        </div>
                    </div>
                    <div class="col-sm-8 col-sm-offset-1">
                        <div class="margin-b-60">
                            <p>Olá!</p>
                            <p>
                                Me chamo David e sou desenvolvedor Web FullStack. Isto significa que crio toda a infra estrutura de um sistema que fica hospedado na internet, deste bancos de dados a páginas com controle de acesso e funções personalizadas.
                            </p>
                            <p>
                                Exponho aqui as linguagens com as quais me identifico melhor     
                            </p>
                        </div>

                        <!-- Progress Box -->
                        <div class="progress-box">
                            <h5>PHP <span class="color-heading pull-right">96%</span></h5>
                            <div class="progress">
                                <div class="progress-bar bg-color-base" role="progressbar" data-width="96"></div>
                            </div>
                        </div>
                        <div class="progress-box">
                            <h5>HTML5 <span class="color-heading pull-right">87%</span></h5>
                            <div class="progress">
                                <div class="progress-bar bg-color-base" role="progressbar" data-width="87"></div>
                            </div>
                        </div>
                        <div class="progress-box">
                            <h5>JavaSript <span class="color-heading pull-right">63%</span></h5>
                            <div class="progress">
                                <div class="progress-bar bg-color-base" role="progressbar" data-width="52"></div>
                            </div>
                        </div>
                        <div class="progress-box">
                            <h5>C# <span class="color-heading pull-right">45%</span></h5>
                            <div class="progress">
                                <div class="progress-bar bg-color-base" role="progressbar" data-width="45"></div>
                            </div>
                        </div>
                        <!-- End Progress Box -->
                    </div>
                </div>
                <!--// end row -->
            </div>
        </div>
        <!-- End About -->

        <!-- Experience 
        <div id="experience">
            <div class="bg-color-sky-light" data-auto-height="true">
                <div class="container content-lg">
                    <div class="row">
                        <div class="col-sm-3 sm-margin-b-30">
                            <div class="text-right sm-text-left">
                                <h2 class="margin-b-0">Experiencia</h2>
                                <p>Alguns trabalhos publicados.</p>
                            </div>
                        </div>
                        <div class="col-sm-8 col-sm-offset-1">
                            <div class="row row-space-2 margin-b-4">
                                <div class="col-md-4 md-margin-b-4">
                                    <div class="service" data-height="height">
                                        <div class="service-element">
                                            <i class="service-icon icon-chemistry"></i>
                                        </div>
                                        <div class="service-info">
                                            <h3>HTML5/CSS3</h3>
                                            <p class="margin-b-5">Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor</p>
                                        </div>
                                        <a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" class="content-wrapper-link"></a>    
                                    </div>
                                </div>
                                <div class="col-md-4 md-margin-b-4">
                                    <div class="service bg-color-base wow zoomIn" data-height="height" data-wow-duration=".3" data-wow-delay=".1s">
                                        <div class="service-element">
                                            <i class="service-icon color-white icon-screen-tablet"></i>
                                        </div>
                                        <div class="service-info">
                                            <h3 class="color-white">Photoshop</h3>
                                            <p class="color-white margin-b-5">Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor</p>
                                        </div>
                                        <a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" class="content-wrapper-link"></a>    
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="service" data-height="height">
                                        <div class="service-element">
                                            <i class="service-icon icon-badge"></i>
                                        </div>
                                        <div class="service-info">
                                            <h3>Front-end</h3>
                                            <p class="margin-b-5">Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor</p>
                                        </div>
                                        <a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" class="content-wrapper-link"></a>    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        End Experience -->

        <!-- Work -->
        <div id="work">
            <div class="container content-lg">
                <div class="row">
                    <div class="col-sm-3 sm-margin-b-30">
                        <div class="text-right sm-text-left">
                            <h2 class="margin-b-0">Trabalhos</h2>
                            <p>Algumas soluções que já entreguei.</p>
                        </div>
                    </div>
                    <div class="col-sm-8 col-sm-offset-1">
                        <!-- Masonry Grid -->
                        <div class="masonry-grid row row-space-2">
                            <div class="masonry-grid-sizer col-xs-6 col-sm-6 col-md-1"></div>
                            <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-8 margin-b-4">
                                <!-- Work -->
                                <div class="work work-popup-trigger">
                                    <div class="work-overlay">
                                        <img class="full-width img-responsive" src="img/rh.png" alt="Portfolio Image">
                                    </div>
                                    <div class="work-popup-overlay">
                                        <div class="work-popup-content">
                                            <a href="javascript:void(0);" class="work-popup-close">Hide</a>
                                            <div class="margin-b-30">
                                                <h3 class="margin-b-5">Gestão interna</h3>
                                                <span>Um design limpo e minimalista para organizar nosso pessoal</span>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                                    <div class="margin-t-10 sm-margin-t-0">
                                                        <p>Trata-se da centralização da matriz de acesso de usuários a todos os sistemas da unidade.</p>
                                                        <p>Usando esta aplicação, além de detalhar quem trabalha em qual célula, o superior hierárquico pode informar qual sistema o usuário acessa e qual uso ele faz da aplicação.</p>
                                                        <p>Controla também patrimônio e lista para quem desejar a composição das células, ramais e aniversários dos participantes </p>
                                                        <ul class="list-inline work-popup-tag">
                                                            <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Design,</a></li>
                                                            <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Coding,</a></li>
                                                            <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Portfolio</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="margin-t-10 sm-margin-t-0">
                                                        <p class="margin-b-5"><strong>Idealizador e desenvolvedor:</strong> David Jeiel</p>
                                                        <p class="margin-b-5"><strong>Área utilizadora:</strong> CEFUS</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Work -->
                            </div>
                            <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4 md-margin-b-4">
                                <!-- Work -->
                                <div class="work work-popup-trigger">
                                    <div class="work-overlay">
                                        <img class="full-width img-responsive" src="img/mapa.png" alt="Portfolio Image">
                                    </div>
                                    <div class="work-popup-overlay">
                                        <div class="work-popup-content">
                                            <a href="javascript:void(0);" class="work-popup-close">Hide</a>
                                            <div class="margin-b-30">
                                                <h3 class="margin-b-5">Mapa de conhecimentos</h3>
                                                <span>Simple e direto ao ponto</span>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                                    <div class="margin-t-10 sm-margin-t-0">
                                                        <p>Sistema feito para a SUPUJ/GEPUB, visa apoiar .</p>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                                                        <ul class="list-inline work-popup-tag">
                                                            <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="http://keenthemes.com/">Design,</a></li>
                                                            <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="http://keenthemes.com/">Coding,</a></li>
                                                            <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="http://keenthemes.com/">Portfolio</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="margin-t-10 sm-margin-t-0">
                                                        <p class="margin-b-5"><strong>Project Leader:</strong> John Doe</p>
                                                        <p class="margin-b-5"><strong>Designer:</strong> Alisa Keys</p>
                                                        <p class="margin-b-5"><strong>Developer:</strong> Mark Doe</p>
                                                        <p class="margin-b-5"><strong>Customer:</strong> Keenthemes</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Work -->
                            </div>
                            <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4 md-margin-b-4">
                                <!-- Work -->
                                <div class="work work-popup-trigger">
                                    <div class="work-overlay">
                                        <img class="full-width img-responsive" src="img/painel_vigov.jpg" alt="Portfolio Image">
                                    </div>
                                    <div class="work-popup-overlay">
                                        <div class="work-popup-content">
                                            <a href="javascript:void(0);" class="work-popup-close">Hide</a>
                                            <div class="margin-b-30">
                                                <h3 class="margin-b-5">Painel VIGOV</h3>
                                                <span>Tudo em um só lugar</span>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                                    <div class="margin-t-10 sm-margin-t-0">
                                                        <p>Uma sugestão para processo seletivo na caixa, trata-se de um painel que concentra as informações da vice presidência de governo e permite que na páçgina inicial se obtenha acesso de dados diretamente gerados pelo SICONV, o sistema de gestão de convênios do governo federal.
                                                        </p>
                                                        <ul class="list-inline work-popup-tag">
                                                            <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Design,</a></li>
                                                            <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="">Coding,</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="margin-t-10 sm-margin-t-0">
                                                        <p class="margin-b-5"><strong> Criador:</strong> David Jeiel</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Work -->
                            </div>
                            <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4 margin-b-4">
                                <!-- Work -->
                                <div class="work work-popup-trigger">
                                    <div class="work-overlay">
                                        <img class="full-width img-responsive" src="img/repasses_lei_151.png" alt="Portfolio Image">
                                    </div>
                                    <div class="work-popup-overlay">
                                        <div class="work-popup-content">
                                            <a href="javascript:void(0);" class="work-popup-close">Hide</a>
                                            <div class="margin-b-30">
                                                <h3 class="margin-b-5">Repasses legais</h3>
                                                <span>Atendimento a leis de repasses baseadas na 151</span>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                                    <div class="margin-t-10 sm-margin-t-0">
                                                        <p>Sistema atende à demanda de repasses legais de depósitos judiciais para estados e municípios.</p>
                                                        <p>Com atendimento prioritário, o sistema já gerou bilhões em atendimento a hrepasses legais oriundos de leis federais, estaduais e municipais</p>
                                                        <ul class="list-inline work-popup-tag">
                                                            <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Design,</a></li>
                                                            <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Coding,</a></li>
                                                            <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Portfolio</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="margin-t-10 sm-margin-t-0">
                                                        <p class="margin-b-5"><strong>Project Leader:</strong> Marcio Aboudib</p>
                                                        <p class="margin-b-5"><strong>Designer:</strong> David Jeiel</p>
                                                        <p class="margin-b-5"><strong>Developer:</strong> David Jeiel</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Work -->
                            </div>
                            <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4 margin-b-4">
                                <!-- Work -->
                                <div class="work work-popup-trigger">
                                    <div class="work-overlay">
                                        <img class="full-width img-responsive" src="img/repasses_lei_151.2.png" alt="Portfolio Image">
                                    </div>
                                    <div class="work-popup-overlay">
                                        <div class="work-popup-content">
                                            <a href="javascript:void(0);" class="work-popup-close">Hide</a>
                                            <div class="margin-b-30">
                                                <h3 class="margin-b-5">Repasses legais</h3>
                                                <span>Atendimento a leis de repasses baseadas na 151</span>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                                    <div class="margin-t-10 sm-margin-t-0">
                                                        <p>Sistema atende à demanda de repasses legais de depósitos judiciais para estados e municípios.</p>
                                                        <p>Com atendimento prioritário, o sistema já gerou bilhões em atendimento a hrepasses legais oriundos de leis federais, estaduais e municipais</p>
                                                        <ul class="list-inline work-popup-tag">
                                                            <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Design,</a></li>
                                                            <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Coding,</a></li>
                                                            <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Portfolio</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="margin-t-10 sm-margin-t-0">
                                                        <p class="margin-b-5"><strong>Project Leader:</strong> Marcio Aboudib</p>
                                                        <p class="margin-b-5"><strong>Designer:</strong> David Jeiel</p>
                                                        <p class="margin-b-5"><strong>Developer:</strong> David Jeiel</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Work -->
                            </div>
                        </div>
                        <!-- End Masonry Grid -->
                    </div>
                </div>
                <!--// end row -->
            </div>
        </div>
        <!-- End Work -->
            
        <!-- Contact -->
        <div id="contact">
            <div class="bg-color-sky-light">
                <div class="container content-lg">
                    <div class="row">
                        <div class="col-sm-3 sm-margin-b-30">
                            <div class="text-right sm-text-left">
                                <h2 class="margin-b-0">Contato</h2>
                                <p>Me chama aí!</p>
                            </div>
                        </div>
                        <div class="col-sm-8 col-sm-offset-1">
                            <div class="row">
                                <div class="col-md-3 col-xs-6 md-margin-b-30">
                                    <h5>Contato Presencial:</h5>
                                    <a href="#">Brasília, DF</a>
                                </div>
                                <div class="col-md-3 col-xs-6 md-margin-b-30">
                                    <h5>Telefone:</h5>
                                    <a href="#">+61 9 8300 2725</a>
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <h5>Email:</h5>
                                    <a href="mailto:davidjeiel@gmail.com">davidjeiel@gmail.com</a>
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <h5>Site:</h5>
                                    <a href="http://davidjeiel.com/">davidjeiel.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--// end row -->
                </div>
            </div>
        </div>
        <!-- End Contact -->        
    </body>
    <!-- END BODY -->
    <!--========== FOOTER ==========-->
    <footer class="footer">
        <div class="content container">
            <div class="row">
                <div class="col-xs-6">
                    <img class="footer-logo" src="img/logoDP3.jpg" alt="David Jeiel">
                </div>
            </div>
            <!--// end row -->
        </div>
        <!-- Back To Top -->
        <a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>

            <!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
            <!-- CORE PLUGINS -->
            <script src="vendor/jquery.min.js" type="text/javascript"></script>
            <script src="vendor/jquery-migrate.min.js" type="text/javascript"></script>
            <script src="vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

            <!-- PAGE LEVEL PLUGINS -->
            <script src="vendor/jquery.easing.js" type="text/javascript"></script>
            <script src="vendor/jquery.back-to-top.js" type="text/javascript"></script>
            <script src="vendor/jquery.smooth-scroll.js" type="text/javascript"></script>
            <script src="vendor/jquery.wow.min.js" type="text/javascript"></script>
            <script src="vendor/jquery.parallax.min.js" type="text/javascript"></script>
            <script src="vendor/jquery.appear.js" type="text/javascript"></script>
            <script src="vendor/masonry/jquery.masonry.pkgd.min.js" type="text/javascript"></script>
            <script src="vendor/masonry/imagesloaded.pkgd.min.js" type="text/javascript"></script>

            <!-- PAGE LEVEL SCRIPTS -->
            <script src="js/layout.min.js" type="text/javascript"></script>
            <script src="js/components/progress-bar.min.js" type="text/javascript"></script>
            <script src="js/components/masonry.min.js" type="text/javascript"></script>
            <script src="js/components/wow.min.js" type="text/javascript"></script>
    </footer>
    <!--========== END FOOTER ==========-->    
</html>