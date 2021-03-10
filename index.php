

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
            max-width: 1324px;
                
        }
    </style>
</head>


<body class="mx-auto">
    <?php 
    $current_page = isset($_GET['page']) ? $_GET['page'] : 'home' ;

    switch ($current_page) {
        case ('outerwear'):
            include_once 'product/outerwear.php';
            $title = "OUTERWEAR - A.T.E";
            $output = str_replace('%TITLE%', $title, $output);
            echo $output;
            break;
        case ('shirsts'):
            include_once 'product/shirsts.php';
            $title = "SHIRSTS - A.T.E";
            $output = str_replace('%TITLE%', $title, $output);
            echo $output;
            break;
        case ('bottoms'):
            include_once 'product/bottoms.php';
            $title = "BOTTOMS - A.T.E";
            $output = str_replace('%TITLE%', $title, $output);
            echo $output;
            break;
        case ('headwear'):
            include_once 'product/headwear.php';
            $title = "HEADWEAR - A.T.E";
            $output = str_replace('%TITLE%', $title, $output);
            echo $output;
            break;
        case ('accessories'):
            include_once 'product/accessories.php';
            $title = "ACCESSORIES - A.T.E";
            $output = str_replace('%TITLE%', $title, $output);
            echo $output;
            break;
        case ('allproduct'):
            include_once 'product/allproduct.php';
            $title = "SHOP ALL COLLECTIONS - A.T.E";
            $output = str_replace('%TITLE%', $title, $output);
            echo $output;
            break;
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
        // auth process 
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

        // admin page
        case ('admin'):
            include_once 'admin/admin_page.php';
            $title = "หลังร้าน - A.T.E";
            $output = str_replace('%TITLE%', $title, $output);
            echo $output;
            break;
        case ('admin_member'):
            include_once 'admin/admin_member.php';
            $title = "หลังร้าน - A.T.E";
            $output = str_replace('%TITLE%', $title, $output);
            echo $output;
            break;
        case ('admin_product'):
            include_once 'admin/admin_product.php';
            $title = "หลังร้าน - A.T.E";
            $output = str_replace('%TITLE%', $title, $output);
            echo $output;
            break;
        case ('admin_approve'):
            include_once 'admin/admin_approve.php';
            $title = "หลังร้าน - A.T.E";
            $output = str_replace('%TITLE%', $title, $output);
            echo $output;
            break;
        case ('admin_tracking'):
            include_once 'admin/admin_tracking.php';
            $title = "หลังร้าน - A.T.E";
            $output = str_replace('%TITLE%', $title, $output);
            echo $output;
            break;
        case ('admin_data'):
            include_once 'admin/admin_data.php';
            $title = "หลังร้าน - A.T.E";
            $output = str_replace('%TITLE%', $title, $output);
            echo $output;
            break;

        // admin member
        case ('member_edit'):
            include_once 'admin/member/member_edit.php';
            $title = "หลังร้าน - A.T.E";
            $output = str_replace('%TITLE%', $title, $output);
            echo $output;
            break;
        case ('member_remove'):
            include_once 'admin/member/member_remove.php';
            $title = "หลังร้าน - A.T.E";
            $output = str_replace('%TITLE%', $title, $output);
            echo $output;
            break;

        // admin product
        case ('product_edit'):
            include_once 'admin/product/product_edit.php';
            $title = "หลังร้าน - A.T.E";
            $output = str_replace('%TITLE%', $title, $output);
            echo $output;
            break;
        case ('product_insert'):
            include_once 'admin/product/product_insert.php';
            $title = "หลังร้าน - A.T.E";
            $output = str_replace('%TITLE%', $title, $output);
            echo $output;
            break;
        case ('product_remove'):
            include_once 'admin/product/product_remove.php';
            $title = "หลังร้าน - A.T.E";
            $output = str_replace('%TITLE%', $title, $output);
            echo $output;
            break;


        // order systems
        case ('product'):
            include_once 'product/product.php';
            $title = "ตะกร้าสินค้า - A.T.E";
            $output = str_replace('%TITLE%', $title, $output);
            echo $output;
            break;
        case ('order_delete'):
            include_once 'product/order/delete.php';
            $title = "ตะกร้าสินค้า - A.T.E";
            $output = str_replace('%TITLE%', $title, $output);
            echo $output;
            break;
        case ('orders'):
            include_once 'product/orders.php';
            $title = "ออเดอร์ - A.T.E";
            $output = str_replace('%TITLE%', $title, $output);
            echo $output;
            break;
        case ('order'):
            include_once 'product/order/order.php';
            $title = "ตะกร้าสินค้า - A.T.E";
            $output = str_replace('%TITLE%', $title, $output);
            echo $output;
            break;
        case ('cart_clear'):
            include_once 'product/order/clear.php';
            $title = "ตะกร้าสินค้า - A.T.E";
            $output = str_replace('%TITLE%', $title, $output);
            echo $output;
            break;
        case ('cart'):
            include_once 'product/order/cart.php';
            $title = "ตะกร้าสินค้า - A.T.E";
            $output = str_replace('%TITLE%', $title, $output);
            echo $output;
            break;
        case ('checkout'):
            include_once 'product/order/checkout.php';
            $title = "ตะกร้าสินค้า - A.T.E";
            $output = str_replace('%TITLE%', $title, $output);
            echo $output;
            break;
        case ('save_checkout'):
            include_once 'product/order/save_checkout.php';
            $title = "ตะกร้าสินค้า - A.T.E";
            $output = str_replace('%TITLE%', $title, $output);
            echo $output;
            break;

        case ('payment'):
            include_once 'payment/payment.php';
            $title = "ชำระเงิน - A.T.E";
            $output = str_replace('%TITLE%', $title, $output);
            echo $output;
            break;

        case ('payments'):
            include_once 'admin/payments/payments.php';
            $title = "พนักงานตรวจสอบ - A.T.E";
            $output = str_replace('%TITLE%', $title, $output);
            echo $output;
            break;

        case ('payments_app'):
            include_once 'admin/payments/payments_app.php';
            $title = "พนักงานตรวจสอบ - A.T.E";
            $output = str_replace('%TITLE%', $title, $output);
            echo $output;
            break;
        case ('payments_del'):
            include_once 'admin/payments/payments_del.php';
            $title = "พนักงานตรวจสอบ - A.T.E";
            $output = str_replace('%TITLE%', $title, $output);
            echo $output;
            break;

        case ('track_set'):
            include_once 'admin/tracking/tracking_set.php';
            $title = "แจ้งเลขพัสดุ - A.T.E";
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

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
</body>

</html>