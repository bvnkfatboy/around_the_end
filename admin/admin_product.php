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
        margin-top:30px;
        margin-left:auto;
        margin-right:30px;
    }

    .btn-proinsert:hover{
        background-color: whitesmoke;
        color: black;

    }

</style>
<a href="?page=admin" class="btn btn-primary btn-block btn-back">กลับหน้าหลังบ้าน</a><br>
<hr>
<a href="?page=product_insert" class="btn btn-primary btn-block btn-proinsert">เพิ่มสินค้า</a><br>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-2">aasd
		</div>
		<div class="col-md-10">ddssa
		</div>
	</div>
</div>

<?php }else {
    header('Location: ?page=home');
}?>

