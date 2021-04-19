<?php

include 'connect.php';
ob_start();
session_start();

//admin kayıt
if (isset($_POST['signup'])) {
    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $password_1 = $_POST['password_1'];
    $password_2 = $_POST['password_2'];

    //şifre uyuşma kontrolü
    if ($password_1 === $password_2) {
        //echo 'şifreler aynı';
        //şifre karakter kontrolü
        if (strlen($password_1) >= 6) {
            //echo 'başarılı';

            $admin_control = $db->prepare("SELECT * FROM user");
            $admin_control->execute();
            $has_admin = $admin_control->rowCount();
            if ($has_admin == 0) {
                $pass = sha1($password_1);
                $admin_signup = $db->prepare("INSERT INTO user SET
                user_name='$user_name',
                email='$email',
                password='$pass'");

                $insert = $admin_signup->execute();

                if ($insert) {
                   // echo 'başarılı';
                    header("Location: login.php?status=ok&user_name=$user_name");
                } else {
                    //echo 'başarısız';
                    header("Location: register.php?register=no");
                }
            } else {
                //echo 'kayıtlı admin mevcut';
                header("Location: register.php?register=hasadmin");
            }
        } else {
            //echo 'şifre kısa';
            header("Location: register.php?register=lowchar");
        }
    } else {
        //echo 'şifreler farklı';
        header("Location: register.php?register=inequal");
    }
}
//Admin  giriş
if (isset($_POST['login'])) {
    $user_name = $_POST['user_name'];
    $pass = sha1($_POST['password']);

    $login = $db->prepare("SELECT * FROM user WHERE user_name='$user_name' and password='$pass'");
    $login ->execute();

    $count = $login -> rowCount();

    if($count == 1){
        $_SESSION['user_name'] = $user_name;
        header("Location: index.php");
    }else{
        header("Location: login.php?login=no");
    }
    
}

//?update && insert
// skill insert
if(isset($_POST['insert_skills'])){
    $skill_title = $_POST['skill_title'];
    $first_skill = $_POST['first_skill'];
    $second_skill = $_POST['second_skill'];
    $third_skill = $_POST['third_skill'];
    $fourth_skill = $_POST['fourth_skill'];
    $fifth_skill = $_POST['fifth_skill'];
    $sixth_skill = $_POST['sixth_skill'];
    $first_counter = $_POST['first_counter'];
    $second_counter = $_POST['second_counter'];
    $third_counter = $_POST['third_counter'];
    $fourth_counter = $_POST['fourth_counter'];
    $fifth_counter = $_POST['fifth_counter'];
    $sixth_counter = $_POST['sixth_counter'];

    $insert_skill = $db -> prepare("INSERT INTO skills SET
    skill_title='$skill_title',
    first_skill ='$first_skill',
    second_skill ='$second_skill',
    third_skill ='$third_skill',
    fourth_skill ='$fourth_skill',
    fifth_skill ='$fifth_skill',
    sixth_skill ='$sixth_skill',
    first_counter ='$first_counter',
    second_counter ='$second_counter',
    third_counter ='$third_counter',
    fourth_counter ='$fourth_counter',
    fifth_counter ='$fifth_counter',
    sixth_counter ='$sixth_counter'
    ");
    $insert=$insert_skill -> execute();
    if($insert){
        header("Location: skill.php?insert=ok");
    }else{
        header("Location: skill.php?insert=no");
    }
}

//skill update
if(isset($_POST['update_skills'])){
    $skill_title = $_POST['skill_title'];
    $first_skill = $_POST['first_skill'];
    $second_skill = $_POST['second_skill'];
    $third_skill = $_POST['third_skill'];
    $fourth_skill = $_POST['fourth_skill'];
    $fifth_skill = $_POST['fifth_skill'];
    $sixth_skill = $_POST['sixth_skill'];
    $first_counter = $_POST['first_counter'];
    $second_counter = $_POST['second_counter'];
    $third_counter = $_POST['third_counter'];
    $fourth_counter = $_POST['fourth_counter'];
    $fifth_counter = $_POST['fifth_counter'];
    $sixth_counter = $_POST['sixth_counter'];

    $update_skill = $db -> prepare("UPDATE skills SET
        skill_title='$skill_title',
        first_skill ='$first_skill',
        second_skill ='$second_skill',
        third_skill ='$third_skill',
        fourth_skill ='$fourth_skill',
        fifth_skill ='$fifth_skill',
        sixth_skill ='$sixth_skill',
        first_counter ='$first_counter',
        second_counter ='$second_counter',
        third_counter ='$third_counter',
        fourth_counter ='$fourth_counter',
        fifth_counter ='$fifth_counter',
        sixth_counter ='$sixth_counter' WHERE skill_id=1     
    ");
    $update=$update_skill -> execute();
    if($update){
        header("Location: skill.php?update=ok");
    }else{
        header("Location: skill.php?update=no");
    }
}