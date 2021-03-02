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

    .uploadpro{
    }

</style>
<a href="?page=admin_product" class="btn btn-primary btn-block btn-back">กลับหน้าจัดการสินค้า</a><br>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-7">
            <div class="uploadpro">

            </div>
		</div>
		<div class="col-md-5">

		</div>
	</div>
</div>

<?php }else {
    header('Location: ?page=home');
}?>

