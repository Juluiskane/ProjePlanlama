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
    $login->execute();

    $count = $login->rowCount();

    if ($count == 1) {
        $_SESSION['user_name'] = $user_name;
        header("Location: index.php");
    } else {
        header("Location: login.php?login=no");
    }
}

//?update && insert
// skill insert
if (isset($_POST['insert_skills'])) {
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

    $insert_skill = $db->prepare("INSERT INTO skills SET
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
    $insert = $insert_skill->execute();
    if ($insert) {
        header("Location: skill.php?insert=ok");
    } else {
        header("Location: skill.php?insert=no");
    }
}

//skill update
if (isset($_POST['update_skills'])) {
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

    $update_skill = $db->prepare("UPDATE skills SET
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
    $update = $update_skill->execute();
    if ($update) {
        header("Location: skill.php?update=ok");
    } else {
        header("Location: skill.php?update=no");
    }
}
//insert about 
if (isset($_POST['insert_about'])) {
    $about_title = $_POST['about_title'];
    $content = $_POST['content'];
    $cv = $_POST['cv'];

    $insert_about = $db->prepare("INSERT INTO about_me SET
    about_title ='$about_title',
    content= '$content',
    cv='$cv'
    ");
    $insert_a = $insert_about->execute();
    if ($insert_a) {
        header("Location: about_us.php?insert_a=ok");
    } else {
        header("Location: about_us.php?insert_a=no");
    }
}

//about update
if (isset($_POST['update_about'])) {
    $about_title = $_POST['about_title'];
    $content = $_POST['content'];
    $cv = $_POST['cv'];

    $update_about = $db->prepare("UPDATE about_me SET
    about_title ='$about_title',
    content= '$content',
    cv='$cv' WHERE about_id=1
    ");
    $update_a = $update_about->execute();
    if ($update_a) {
        header("Location: about_us.php?update_a=ok");
    } else {
        header("Location: about_us.php?update_a=no");
    }
}

// insert contact
if (isset($_POST['insert_contact'])) {
    $contact_title = $_POST['contact_title'];
    $locationn = $_POST['locationn'];
    $location_link = $_POST['location_link'];
    $email = $_POST['email'];
    $gsm = $_POST['gsm'];
    $twitter = $_POST['twitter'];
    $instagram = $_POST['instagram'];
    $github = $_POST['github'];
    $linkedin = $_POST['linkedin'];

    $insert_contact = $db->prepare("INSERT INTO contact SET
    contact_title ='$contact_title',
    locationn ='$locationn',
    location_link='$location_link',
    email ='$email',
    gsm ='$gsm',
    twitter ='$twitter',
    instagram ='$instagram',
    github ='$github',
    linkedin ='$linkedin'
    ");
    $insert_c = $insert_contact->execute();
    if ($insert_c) {
        header("Location: contact.php?insert_c=ok");
    } else {
        header("Location: contact.php?insert_c=no");
    }
}
//update contact
if (isset($_POST['update_contact'])) {
    $contact_title = $_POST['contact_title'];
    $locationn = $_POST['locationn'];
    $location_link = $_POST['location_link'];
    $email = $_POST['email'];
    $gsm = $_POST['gsm'];
    $twitter = $_POST['twitter'];
    $instagram = $_POST['instagram'];
    $github = $_POST['github'];
    $linkedin = $_POST['linkedin'];

    $update_contact = $db->prepare("UPDATE contact SET
    contact_title ='$contact_title',
    locationn ='$locationn',
    location_link='$location_link',
    email ='$email',
    gsm ='$gsm',
    twitter ='$twitter',
    instagram ='$instagram',
    github ='$github',
    linkedin ='$linkedin' WHERE contact_id=1
    ");
    $update_c = $update_contact->execute();
    if ($update_c) {
        header("Location: contact.php?update_c=ok");
    } else {
        header("Location: contact.php?update_c=no");
    }
}
//insert settings
if (isset($_POST['insert_settings'])) {
    $site_title = $_POST['site_title'];
    $namee = $_POST['name'];

    $insert_settings = $db->prepare("INSERT INTO site_settings SET
    site_title ='$site_title',
    namee= '$namee'
    
    ");
    $insert_set = $insert_settings->execute();
    if ($insert_set) {
        header("Location: settings.php?insert_set=ok");
    } else {
        header("Location: settings.php?insert_set=no");
    }
}

//update settings
if (isset($_POST['update_settings'])) {
    $site_title = $_POST['site_title'];
    $namee = $_POST['namee'];
    $password = $_POST['password'];
    $newpassword = $_POST['newpassword'];
    $newpassword2 = $_POST['newpassword2'];
    $pass2 = sha1($password);

    $chancepass = $db->prepare("SELECT * FROM user WHERE user_id=1 AND password='$pass2'");
    $chancepass->execute(); 
    $countt = $chancepass->rowCount();
    if ($countt == 1) {
        $pass3=sha1($newpassword);
        if(!($pass3==$pass2)){
            if ($newpassword == $newpassword2) {
                if (strlen($newpassword) >= 6) {
                $pass1 = sha1($newpassword);
                $admin_newpassword = $db->prepare("UPDATE user SET password='$pass1' ");
                $updatepass = $admin_newpassword->execute();
                }
            }
        }
    }
    $update_settings = $db->prepare("UPDATE site_settings SET 
            site_title ='$site_title',
            namee= '$namee'
            
            WHERE settings_id=1
            ");
    $update_set = $update_settings->execute();

    if ($update_set and $updatepass) {
        header("Location: logout.php");
    } else {
        header("Location: settings.php?update_set=no");
    }
}
