<?php
include 'connect.php';
?>

<html>

<head>
    <meta charset="UTF-8">
    <title>Kayıt Ol</title>
    <meta name="description" content="Login - Register Template">
    <meta name="author" content="Lorenzo Angelino aka MrLolok">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./build/css/custom.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Bootstrap -->
<link href="./vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="./vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="./vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="./vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="./build/css/custom.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #303641;
        }
    </style>
</head>

<body>

    <div id="container-register"style="height: 553px; width: 350px; ">
    
        <div id="title">
            <i class="material-icons lock">lock</i> Kayıt Ol
        </div>
        
        <form method="POST"action="./process.php">
        <?php if (@$_GET['register'] == 'no'){?>
            <div class="alert alert-danger alert-dismissible fade in" role="alert"  style="width: 325px; margin-top: 10px; margin-left: 14px;
        margin-right: 60px;">
                    <strong>Hata!</strong>bizimle iletişime geçin.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close" ><span aria-hidden="true">×</span>
                    </button>
        </div>
        <?php } elseif(@$_GET['register'] == 'hasadmin'){?>
            <div class="alert alert-danger alert-dismissible fade in" role="alert"  style="width: 325px; margin-top: 10px; margin-left: 14px;
        margin-right: 60px;">
                    <strong>Hata!</strong> kayıtlı admin mevcut.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close" ><span aria-hidden="true">×</span>
                    </button>
        </div> 

        <?php } elseif (@$_GET['register'] == 'lowchar'){?>
            <div class="alert alert-danger alert-dismissible fade in" role="alert"  style="width: 325px; margin-top: 10px; margin-left: 14px;
        margin-right: 60px;">
                    <strong>Hata!</strong> Şifre en az 6 karakterden oluşmalıdır.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close" ><span aria-hidden="true">×</span>
                    </button>
        </div> 
        
        
        <?php } elseif (@$_GET['register'] == 'inequal'){ ?>
            <div class="alert alert-danger alert-dismissible fade in" role="alert"  style="width: 300px; margin-top: 10px; margin-left: 20px;
        margin-right: 60px;">
                    <strong>Hata!</strong> Şifreler uyuşmuyor.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close" ><span aria-hidden="true">×</span>
                    </button>
        </div> 


        <?php } ?>
        <div class="input">
                <div class="input-addon">
                    <i class="material-icons">person</i>
                </div>
                <input id="username" name="user_name" placeholder="Kullanıcı adı" type="text" required class="validate" autocomplete="off">
            </div>    
        
        <div class="input">
                <div class="input-addon">
                    <i class="material-icons">email</i>
                </div>
                <input id="email" name="email"placeholder="Eposta" type="email" required class="validate" autocomplete="off">
            </div>

            <div class="clearfix"></div>


            <div class="clearfix"></div>

            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">vpn_key</i>
                </div>
                <input id="password" name="password_1" placeholder="Şifre" type="password" required class="validate" autocomplete="off">
            </div>
            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">vpn_key</i>
                </div>
                <input id="password2" name="password_2" placeholder="Şifre Tekrarı" type="password" required class="validate" autocomplete="off">
            </div>

            <br>
                
            <input type="submit" name="signup" value="Kayıt Ol" />
        </form>
        <div class="register">
            
            <a href="login.php"><button id="register-link">Giriş Yap</button></a>
        </div>
    </div>



</body>
<!-- jQuery -->
<script src="./vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="./vendors/bootstrap/dist/js/bootstrap.min.js"></script>

</html>