<?php
include './nedmin/connect.php';

$sorgu = $db->prepare("SELECT*FROM site_settings ");
$sorgu->execute();

$bilgiyi_cek=$sorgu->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?php echo $bilgiyi_cek['site_title']; ?> </title>

    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes" />

    <!-- Fonts -->
    <script src="https://kit.fontawesome.com/0008cb15a3.js" crossorigin="anonymous"></script>

    <!-- Favicon
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon.png">

    <!-- Stylesheets
    ================================================== -->
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

    <header id="masthead" class="site-header" data-anchor-target=".hero" data-top="background: rgba(255,255,255,0); padding 10px 0; box-shadow: 0px 0px 20px 6px rgba(0, 0, 0, 0);" data-top-bottom="background: rgba(255,255,255,1); padding: -10px 0; box-shadow: 0px 0px 20px 6px rgba(0, 0, 0, 0.2);">
        <nav id="primary-navigation" class="site-navigation">
            <div class="container">
                <div class="navbar-header page-scroll">

                    <button type="button" class="navbar-toggle collapsed" data-target="#portfolio-perfect-collapse" aria-expanded="false" >
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    
                    <a href="#hero" class="site-logo"><img src="assets/img/logo.png" style="width: 90px;margin: bottom -50px;" alt="logo"></a>

                </div><!-- /.navbar-header -->

                <div class="main-menu" id="portfolio-perfect-collapse" style="margin-top: 30px;">

                    <ul class="nav navbar-nav navbar-right">

                        <li class="page-scroll"><a href="#hero">GİRİŞ</a></li>
                        <li class="page-scroll"><a href="#about">HAKKIMDA</a></li>
                        <li class="page-scroll"><a href="#skills">YETENEKLER</a></li>
                        <li class="page-scroll"><a href="#contact">İLETİŞİM</a></li>
                        
                    </ul><!-- /.navbar-nav -->

                </div><!-- /.navbar-collapse -->

            </div>
        </nav><!-- /.primary-navigation -->
    </header><!-- /#header -->

    <div id="hero" class="hero">
        <div class="container">
            <div class="row">

                <div class="col-md-6">
                    <h1>HARUN ALTUN</h1>
                    <div class="page-scroll">
                        <a href="#contact" class="btn btn-fill ">MESAJ GÖNDER</a>

                    </div>
                </div>
            
                <div class="col-md-6 text-right">
                    <img src="assets/img/alex-vidal.png" alt="alex-vidal">
                </div>

            </div>
        </div>
    </div><!-- /.hero -->

    <main id="main" class="site-main">

        <section id="about" class="site-section section-about text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <h2>HAKKIMDA</h2>
                        <img src="assets/img/lines.svg" class="img-lines" alt="lines">
                        <p>İsmim Harun Altun.19 yaşındayım.İnönü Üniversitesinde  eğitim görmeye devam ediyorum.Müzik dinlemeyi,oyun oynamayı ve yüzmeyi severim. </p>
                        <a href="http://www.grad.illinois.edu/sites/default/files/pdfs/cvsamples.pdf" class="btn btn-fill" target="_blank" download>CV İNDİR</a>
                    </div>
                </div>
            </div>
        </section><!-- /.secton-about -->

        <section class="site-section section-skills" id="skills">
            <div class="container">
                <div class="text-center">
                    <h3>YETENEKLER</h3>
                    <img src="assets/img/lines.svg" class="img-lines" alt="lines">
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="skill">
                            <h4>Html/css</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-transitiongoal="1"></div><!-- /.progress-bar -->
                            </div><!-- /.progress -->
                        </div><!-- /.skill -->
                        <div class="skill">
                            <h4>C</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-transitiongoal="10"></div><!-- /.progress-bar -->
                            </div><!-- /.progress -->
                        </div><!-- /.skill -->
                    </div>
                    <div class="col-md-4">
                        <div class="skill">
                            <h4>Javascript</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-transitiongoal="1"></div><!-- /.progress-bar -->
                            </div><!-- /.progress -->
                        </div><!-- /.skill -->
                        <div class="skill">
                            <h4>Problem  çözme</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-transitiongoal="60"></div><!-- /.progress-bar -->
                            </div><!-- /.progress -->
                        </div><!-- /.skill -->
                    </div>
                    <div class="col-md-4">
                        <div class="skill">
                            <h4>Php</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-transitiongoal="1"></div><!-- /.progress-bar -->
                            </div><!-- /.progress -->
                        </div><!-- /.skill -->
                        <div class="skill">
                            <h4>Sabır</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-transitiongoal="85"></div><!-- /.progress-bar -->
                            </div><!-- /.progress -->
                        </div><!-- /.skill -->
                    </div>
                </div>
            </div>
        </section><!-- /.secton-skills -->
        <section id="contact" class="site-section section-form text-center">
            <div class="container">

                <h3>İLETİŞİM</h3>
                <img src="assets/img/lines.svg" class="img-lines" alt="lines">
                <form>
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="text" name="isim" class="form-control mt-x-0" placeholder="İsim" required>
                        </div>
                        <div class="col-sm-6">
                            <input type="email" name="email" class="form-control" placeholder="Email" required>   
                        </div>
                        <div class="col-sm-12">
                            <textarea name="message" id="mesaj" class="form-control" placeholder="Mesaj" required></textarea>
                            
                        </div>
                    </div>
                    <button href="#" class="btn btn-border" type="submit">MESAJ GÖNDER <span class="glyphicon glyphicon-send"></span></button>
                    <div class="row">
                        <div class="col-md-4 col-xs-6 md-margin-b-30">
                            <h4>Konum</h4>
                            <a href="https://www.google.com/maps/place/Küçükçekmece%2Fİstanbul/data=!4m2!3m1!1s0x14caa4102814e62d:0xf17358ce73944614?sa=X&ved=2ahUKEwj0u6zH2MbvAhU_DmMBHTRtBiEQ8gEwPHoECCQQAQ" target="_blank">Küçükçekmece,İstanbul</a>
                        </div>
                        <div class="col-md-4 col-xs-6 md-margin-b-30">
                            <h4>Telefon</h4>
                            <a href="tel:+905549591150" target="_blank">+90 554 959 11 50</a>
                        </div>
                        <div class="col-md-4 col-xs-6">
                            <h4>Email</h4>
                            <a href="mailto:hrnaltun44@gmail.com" target="_blank">hrnaltun44@gmail.com</a>
                        </div>
                    </div>
                    
                </div>
                <h4>Sosyal Medya</h4>
                <a a href="" target="_blank" title="Twitter" ><i class="fab fa-twitter-square fa-4x twitter-color"></i> </a>
                <a a href="https://www.instagram.com/harunamabikmis/" target="_blank" title="Instagram"><i class="fab fa-instagram-square fa-4x instagram-color "></i></a>
                <a a href="https://github.com/Juluiskane" target="_blank" title="GitHub"><i class="fab fa-github-square fa-4x github-color "></i></a>
                <a a href="https://www.linkedin.com/in/harun-altun-2482a916a/"  target="_blank" title="LinkedIn"><i class="fab fa-linkedin fa-4x linkedin-color "></i></a>
                </form>
            </div>
        </section><!-- /.section-form -->

    </main><!-- /#main -->

    <footer id="colophon" class="site-footer">
        <div class="container">
            </div>
                <div class="col-sm-12 col-sm-offset-0 col-xs-0 col-xs-offset-12"><p class="copyright"></p></div>
                <div class="col-sm-12 col-xs-0">
                    <div class="text-right page-scroll">
                        <a class="icon icon-up-bg" href="#hero"><i class="icon-up"></i></a>
                    </div>
                </div>
        </div>
    </footer><!-- /#footer -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/js/skrollr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-progressbar/0.9.0/bootstrap-progressbar.min.js"></script>
    <script src="assets/js/jquery.countTo.min.js"></script>
    <script src="assets/js/script.js"></script>
  
</body>
</html>