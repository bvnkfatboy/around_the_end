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
        margin-left:auto;
        margin-right:auto;
        margin-top:30px;
    }

    .btn-back:hover{
        background-color: whitesmoke;
        color: black;

    }
</style>
<a href="?page=admin" class="btn btn-primary btn-block btn-back">กลับหน้าหลังบ้าน</a><br>
<?php }else {
    header('Location: ?page=home');
}?>

