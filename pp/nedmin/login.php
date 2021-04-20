<?php
include 'connect.php';
?>

<html>

<head>
    <meta charset="UTF-8">
    <title>Giriş</title>
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

    <div id="container-login"style="height:460px;
    width: 350px;">
        <div id="title">
            <i class="material-icons lock">lock</i> Giriş
        </div>
        <form method="POST"action="./process.php">
        <?php if(@$_GET['status'] == 'ok'){?>
            <div class="alert alert-success alert-dismissible fade in" role="alert"  style="width: 325px; margin-top: 10px; margin-left: 14px;
        margin-right: 60px;">
                    <strong>Tebrikler
                    <i> <?php echo $user = @$_GET['user_name']?></i>!</strong> başarılı bir şekilde kayıt oldunuz. 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close" ><span aria-hidden="true">×</span>
                    </button>
        </div>
            
            
            
        <?php } elseif(@$_GET['login'] == 'no'){ ?>
            
            <div class="alert alert-danger alert-dismissible fade in" role="alert"  style="width: 325px; margin-top: 10px; margin-left: 14px;
        margin-right: 60px;">
                    <strong>Hata!</strong> Girilen bilgiler yanlış.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close" ><span aria-hidden="true">×</span>
                    </button>
        </div>
        <?php } elseif(@$_GET['logout'] == 'ok'){ ?>
            
            <div class="alert alert-warning alert-dismissible fade in" role="alert"  style="width: 325px; margin-top: 10px; margin-left: 14px;
        margin-right: 60px;">
                    <strong>Çıkış yapıldı.</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close" ><span aria-hidden="true">×</span>
                    </button>
        </div>
        <?php } ?>
        <form>
            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">person</i>
                </div>
                <input id="username" name="user_name" placeholder="Kullanıcı Adı" type="text" required class="validate" autocomplete="off">
            </div>
            <div class="clearfix"></div>
            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">vpn_key</i>
                </div>
                <input id="password" name="password" placeholder="Şifre" type="password" required class="validate" autocomplete="off">
            </div>
        <br>
        <br>
            <input type="submit" name="login" value="Giriş Yap" />
        </form>
        <?php $control = $db->prepare("SELECT * FROM user ");
        $control->execute();
        $has_admin = $control->rowCount();
        if($has_admin == 0) {?>
        <div class="register" style="margin-bottom: 10px;">
            
            <a href="register.php"><button id="register-link">Kayıt Ol</button></a>
        </div>
        <?php } ?>
    </div>
</body>
<!-- jQuery -->
<script src="./vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="./vendors/bootstrap/dist/js/bootstrap.min.js"></script>

</html>
