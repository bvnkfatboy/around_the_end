<?php

include_once('include/navbar.php');

$check_admin = isset($_SESSION['auth-status']);

if($check_admin == 'admin' ){
?>




<style>



.column {
  float: left;
  width: 20%;
  padding: 0 15px;
  font-family: 'Kanit', sans-serif;
  color: black;
}

.row {margin: 0;}


.row:after {
  content: "";
  display: table;
  clear: both;
}


@media screen and (max-width: 900px) {
  .column {
    width: 50%;

  }
}

@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}


.product_cards {

  padding: 16px;
  text-align: center;

}

.product_cards:hover {

}

a{
    color:black;
    text-decoration:none;
}

a:hover{
    color: rgb(100,100,100);
    text-decoration:none;
}

.product_cards p {
    
    font-size: 14px;
    word-wrap: break-word;
}
.product_name{
    height: 25px;
    width: 100%;
}
</style>


<div class="row mt-5 ">
    

    <div class="column">
        <a href="">    
            <div class="product_cards">
                <i class="fas  fa-users mb-1 fa-5x mx-auto w-100 d-block"></i>
                <div class="product_name "><p class="product_text">สมาชิก</p></div>
            </div>
        </a>
    </div>

    <div class="column">
        <a href="">    
            <div class="product_cards">
                <i class="fas  fa-tshirt mb-1 fa-5x mx-auto w-100 d-block"></i>
                <div class="product_name "><p class="product_text">สินค้า</p></div>
            </div>
        </a>
    </div>

    <div class="column">
        <a href="">    
            <div class="product_cards">
                <i class="fas  fa-wallet mb-1 fa-5x mx-auto w-100 d-block"></i>
                <div class="product_name "><p class="product_text">ยืนยันชำระเงิน</p></div>
            </div>
        </a>
    </div>

    <div class="column">
        <a href="">    
            <div class="product_cards">
                <i class="fas  fa-shipping-fast mb-1 fa-5x mx-auto w-100 d-block"></i>
                <div class="product_name "><p class="product_text">แจ้งเลขพัสดุ</p></div>
            </div>
        </a>
    </div>

    <div class="column">
        <a href="">    
            <div class="product_cards">
                <i class="fas  fa-chart-pie mb-1 fa-5x mx-auto w-100 d-block"></i>
                <div class="product_name "><p class="product_text">ข้อมูลโดยรวม</p></div>
            </div>
        </a>
    </div>


</div>





<?php }else {
    header('Location: ?page=home');
}?>

