

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $output = '<title>%TITLE%</title>'; ?>

    <link rel="stylesheet" href="dist/css/reset.css">
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/css/font.css">
    <link rel="stylesheet" href="dist/css/fontawesome.css">
    <link rel="stylesheet" href="dist/css/sweetalert2.min.css">
    <link href="dist/img/logo_white.jpg" rel="icon" type="image/jpg" />
    <script src="dist/js/jquery-3.5.1.slim.min.js"></script>
    <script src="dist/js/bootstrap.bundle.min.js"></script>
    <script src="dist/js/sweetalert2.all.min.js"></script>

    <style>
        body{
            width: 100%;
            max-width: 1700px;
            
        }
    </style>
</head>


<body class="mx-auto">
    <?php 
    $current_page = isset($_GET['page']) ? $_GET['page'] : 'home' ;

    switch ($current_page) {
        case ('home'):
            include_once 'homepage.php';
            $title = "Official Around The End - Apparel,Accessories & Load Nermal - A.T.E";
            $output = str_replace('%TITLE%', $title, $output);
            echo $output;
            break;
        case ('test'):
            include_once 'test.php';
            $title = "test";
            $output = str_replace('%TITLE%', $title, $output);
            echo $output;
            break;
        case ('login'):
            include_once 'auth/login.php';
            $title = "Login - A.T.E";
            $output = str_replace('%TITLE%', $title, $output);
            echo $output;
            break;
        case ('register'):
            include_once 'auth/register.php';
            $title = "Register - A.T.E";
            $output = str_replace('%TITLE%', $title, $output);
            echo $output;
            break;
        case ('logout'):
            include_once 'auth/logout.php';
            $title = "Logout - A.T.E";
            $output = str_replace('%TITLE%', $title, $output);
            echo $output;
            break;
        case ('profile'):
            include_once 'auth/profile.php';
            $title = "Profile - A.T.E";
            $output = str_replace('%TITLE%', $title, $output);
            echo $output;
            break;
        case ('edit_profile'):
            include_once 'auth/editprofile.php';
            $title = "Profile - A.T.E";
            $output = str_replace('%TITLE%', $title, $output);
            echo $output;
            break;
        default:
            include_once 'error404.php';
            $title = "ERROR PAGE - A.T.E";
            $output = str_replace('%TITLE%', $title, $output);
            echo $output;
    }
    ?>
</body>

</html>