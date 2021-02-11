<?php include_once('include/navbar.php') ?>


<!-- <div class="row justify-content-md-center mx-auto">
    <div class="col-sm-6 mx-auto">
        <div id="infomationslide" class="carousel slide" style="max-width: 1000px;" data-ride="carousel" interval="2000" pause="hover">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a href="#"><img class="d-block w-100" src="dist/img/carousel/1.jpg"></a>
                </div>
                <div class="carousel-item">
                    <a href="#"><img class="d-block w-100" src="dist/img/carousel/2.jpg"></a>
                </div>
                <div class="carousel-item">
                    <a href="#"><img class="d-block w-100" src="dist/img/carousel/3.jpg"></a>
                </div>
            </div>
            <a class="carousel-control-prev" href="#infomationslide" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#infomationslide" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="col-sm-6 mx-auto">
        <div id="promote" class="carousel slide" style="max-width: 1000px;" data-ride="carousel" interval="4000" pause="hover">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <a href="#"><img class="d-block w-100" src="dist/img/carousel/1.jpg"></a>
                </div>

            </div>
        </div>
    </div>
</div>
<br> -->

<style>



.column {
  float: left;
  width: 20%;
  padding: 0 15px;
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

.product_cards:hover p {
display: block;
}

.product_cards p {
    
    font-size: 14px;
    display: none;
    word-wrap: break-word;
}
.product_name{
    height: 25px;
    width: 100%;
}
</style>


<div class="row">

  <div class="column">
    <div class="product_cards">
        <img class="d-block w-100 mx-auto" width="336px" src="dist/img/product/1.jpg">
        <div class="product_name"><p class="product_text">Some text</p></div>
    </div>
  </div>


</div>


<?php include_once('include/footer.php');?>