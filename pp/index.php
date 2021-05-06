<?php
include './nedmin/connect.php';
    $fetch_settings = $db ->prepare("SELECT * FROM site_settings WHERE settings_id=1");
    $fetch_settings->execute();
    $fetch_set=$fetch_settings->fetch(PDO::FETCH_ASSOC);


    $fetch_skill = $db ->prepare("SELECT * FROM skills WHERE skill_id=1");
    $fetch_skill->execute();
    $fetch_s=$fetch_skill->fetch(PDO::FETCH_ASSOC);

    $fetch_about = $db ->prepare("SELECT * FROM about_me WHERE about_id=1");
    $fetch_about->execute();
    $fetch_a=$fetch_about->fetch(PDO::FETCH_ASSOC);

    $fetch_contact = $db ->prepare("SELECT * FROM contact WHERE contact_id=1");
    $fetch_contact->execute();
    $fetch_c=$fetch_contact->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?php echo $fetch_set['site_title']; ?> </title>

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
                        <li class="page-scroll"><a href="#about"><?php echo $fetch_a['about_title'] ?></a></li>
                        <li class="page-scroll"><a href="#skills"><?php echo $fetch_s['skill_title'] ?></a></li>
                        <li class="page-scroll"><a href="#contact"><?php echo $fetch_c['contact_title'] ?></a></li>
                        
                    </ul><!-- /.navbar-nav -->

                </div><!-- /.navbar-collapse -->

            </div>
        </nav><!-- /.primary-navigation -->
    </header><!-- /#header -->

    <div id="hero" class="hero">
        <div class="container">
            <div class="row">

                <div class="col-md-6">
                    <h1><?php echo $fetch_set['namee']; ?></h1>
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
                        <h2><?php echo $fetch_a['about_title'] ?></h2>
                        <img src="assets/img/lines.svg" class="img-lines" alt="lines">
                        <p><?php echo $fetch_a['content'] ?> </p>
                        <a href="<?php echo $fetch_a['cv'] ?>" class="btn btn-fill" target="_blank" download>CV İNDİR</a>
                    </div>
                </div>
            </div>
        </section><!-- /.secton-about -->
        
        <section class="site-section section-skills" id="skills">
            <div class="container">
                <div class="text-center">
                    <h3><?php echo $fetch_s['skill_title'] ?></h3>
                    <img src="assets/img/lines.svg" class="img-lines" alt="lines">
                </div>
                
                <div class="row">
                    <div class="col-md-4">
                        <div class="skill">
                            <h4><?php echo $fetch_s['first_skill'] ?></h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-transitiongoal="<?php echo $fetch_s['first_counter'] ?>"></div><!-- /.progress-bar -->
                            </div><!-- /.progress -->
                        </div><!-- /.skill -->
                        <div class="skill">
                            <h4><?php echo $fetch_s['second_skill'] ?></h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-transitiongoal="<?php echo $fetch_s['second_counter'] ?>"></div><!-- /.progress-bar -->
                            </div><!-- /.progress -->
                        </div><!-- /.skill -->
                    </div>
                    <div class="col-md-4">
                        <div class="skill">
                            <h4><?php echo $fetch_s['third_skill'] ?></h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-transitiongoal="<?php echo $fetch_s['third_counter'] ?>"></div><!-- /.progress-bar -->
                            </div><!-- /.progress -->
                        </div><!-- /.skill -->
                        <div class="skill">
                            <h4><?php echo $fetch_s['fourth_skill'] ?></h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-transitiongoal="<?php echo $fetch_s['fourth_counter'] ?>"></div><!-- /.progress-bar -->
                            </div><!-- /.progress -->
                        </div><!-- /.skill -->
                    </div>
                    <div class="col-md-4">
                        <div class="skill">
                            <h4><?php echo $fetch_s['fifth_skill'] ?></h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-transitiongoal="<?php echo $fetch_s['fifth_counter'] ?>"></div><!-- /.progress-bar -->
                            </div><!-- /.progress -->
                        </div><!-- /.skill -->
                        <div class="skill">
                            <h4><?php echo $fetch_s['sixth_skill'] ?></h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-transitiongoal="<?php echo $fetch_s['sixth_counter'] ?>"></div><!-- /.progress-bar -->
                            </div><!-- /.progress -->
                        </div><!-- /.skill -->
                    </div>
                </div>
            </div>
        </section><!-- /.secton-skills -->
        <section id="contact" class="site-section section-form text-center">
            <div class="container">

                <h3><?php echo $fetch_c['contact_title'] ?></h3>
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
                            <a href="<?php echo $fetch_c['location_link'] ?>" target="_blank"><?php echo $fetch_c['locationn'] ?></a>
                        </div>
                        <div class="col-md-4 col-xs-6 md-margin-b-30">
                            <h4>Telefon</h4>
                            <a href="tel:<?php echo $fetch_c['gsm'] ?>" target="_blank"><?php echo $fetch_c['gsm'] ?></a>
                        </div>
                        <div class="col-md-4 col-xs-6">
                            <h4>Email</h4>
                            <a href="mailto:<?php echo $fetch_c['email'] ?>" target="_blank"><?php echo $fetch_c['email'] ?></a>
                        </div>
                    </div>
                    
                </div>
                <h4>Sosyal Medya</h4>
                <a a href="<?php echo $fetch_c['twitter'] ?>" target="_blank" title="Twitter" ><i class="fab fa-twitter-square fa-4x twitter-color"></i> </a>
                <a a href="<?php echo $fetch_c['instagram'] ?>" target="_blank" title="Instagram"><i class="fab fa-instagram-square fa-4x instagram-color "></i></a>
                <a a href="<?php echo $fetch_c['github'] ?>" target="_blank" title="GitHub"><i class="fab fa-github-square fa-4x github-color "></i></a>
                <a a href="<?php echo $fetch_c['linkedin'] ?>"  target="_blank" title="LinkedIn"><i class="fab fa-linkedin fa-4x linkedin-color "></i></a>
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