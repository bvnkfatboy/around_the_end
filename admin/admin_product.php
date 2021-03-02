<?php

include_once('include/navbar.php');

$check_admin = isset($_SESSION['auth-status']) ? $_SESSION['auth-status'] : ''; 

if($check_admin == 'admin' ){

?>


<style>
    .btn-back {        
        max-width: 150px;
        border-radius: 2px;
        font-size: 15px;
        font-weight: bold;
        background-color: black;
        border: 1px black;
        margin-top:30px;
        margin-right:auto;
        margin-left:30px;
    }

    .btn-back:hover{
        background-color: whitesmoke;
        color: black;

    }

    .btn-proinsert {        
        max-width: 150px;
        border-radius: 2px;
        font-size: 15px;
        font-weight: bold;
        background-color: black;
        border: 1px black;
        margin-left:auto;
        margin-right:30px;
    }

    .btn-proinsert:hover{
        background-color: whitesmoke;
        color: black;

    }

</style>
<a href="?page=admin" class="btn btn-primary btn-block btn-back">กลับหน้าหลังบ้าน</a>
<hr>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-2">
            <h4>หมวดหมู่สินค้า</h4>
            <div class="list-group list-group-flush">
            <a href="?page=admin_product&&catalog=all" class="list-group-item list-group-item-action">- ALL</a>
            <a href="?page=admin_product&&catalog=outerwear" class="list-group-item list-group-item-action">- OUTERWEAR</a>
            <a href="?page=admin_product&&catalog=shirst" class="list-group-item list-group-item-action">- SHIRST</a>
            <a href="?page=admin_product&&catalog=bottoms" class="list-group-item list-group-item-action">- BOTTOMS</a>
            <a href="?page=admin_product&&catalog=headwear" class="list-group-item list-group-item-action">- HEADWEAR</a>
            <a href="?page=admin_product&&catalog=accessories" class="list-group-item list-group-item-action">- ACCESSORIES</a>
            </div>
		</div>
		<div class="col-md-10">
            <a href="?page=product_insert" class="btn btn-primary btn-block btn-proinsert">เพิ่มสินค้า</a>
            <?php
            $current_page = isset($_GET['catalog']) ? $_GET['catalog'] : 'all' ;
            switch ($current_page) {

                case ('all'):
                    include_once 'admin/product/catalog/c_all.php';
                    $title = "หลังร้าน - A.T.E";
                    $output = str_replace('%TITLE%', $title, $output);
                    echo $output;
                    break;
                case ('outerwear'):
                    include_once 'admin/product/catalog/c_outerwear.php';
                    $title = "หลังร้าน - A.T.E";
                    $output = str_replace('%TITLE%', $title, $output);
                    echo $output;
                    break;
                case ('shirst'):
                    include_once 'admin/product/catalog/c_shirst.php';
                    $title = "หลังร้าน - A.T.E";
                    $output = str_replace('%TITLE%', $title, $output);
                    echo $output;
                    break;
                case ('bottoms'):
                    include_once 'admin/product/catalog/c_bottoms.php';
                    $title = "หลังร้าน - A.T.E";
                    $output = str_replace('%TITLE%', $title, $output);
                    echo $output;
                    break;
                case ('headwear'):
                    include_once 'admin/product/catalog/c_headwear.php';
                    $title = "หลังร้าน - A.T.E";
                    $output = str_replace('%TITLE%', $title, $output);
                    echo $output;
                    break;
                case ('accessories'):
                    include_once 'admin/product/catalog/c_accessorie.php';
                    $title = "หลังร้าน - A.T.E";
                    $output = str_replace('%TITLE%', $title, $output);
                    echo $output;
                    break;
        
                default:
                    include_once 'error404.php';
                    $title = "ERROR PAGE - A.T.E";
                    $output = str_replace('%TITLE%', $title, $output);
                    echo $output;
            };

            ?>
		</div>
	</div>
</div>
<?php include_once('include/footer.php');?>
<?php }else {
    header('Location: ?page=home');
}?>

