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


    .btn-edit{
        max-width: 100px;
        border-radius: 2px;
        font-size: 15px;
        font-weight: bold;
        background-color: black;
        color:white;
        border: 1px black;
    }

    .btn-edit:hover{
        background-color: whitesmoke;
        color: black;

    }



</style>
<a href="?page=admin" class="btn btn-primary btn-block btn-back">กลับหน้าหลังบ้าน</a><br>


<h1 class="text-center">ข้อมูลออเดอร์</h1>
<br>
<?php
    include_once('config.inc.php');
    $result = mysqli_query($conn,"SELECT * FROM orders ORDER BY order_id asc");

    while($row = mysqli_fetch_array($result)){
        echo '    
        <a href="?page=orders&&OrderID='.$row["order_id"].'" class="text-dark" style="text-decoration:none">
            <div class="card mx-auto" style="">
            <div class="card-body">
                <h5 class="card-title">ออเดอร์ : '.$row["order_key"].' <p> โดย '.$row["order_name"].'</p> </h5>
                <h6 class="card-subtitle mb-2 text-muted">วันที่: '.$row["order_date"].'</h6>
                <p class="card-text"></p>
            </div>
            </div>
        </a> ';

    }

    ?>

<?php include_once('include/footer.php');?>
<?php }else {
    header('Location: ?page=home');
}?>

