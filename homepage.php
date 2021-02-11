<?php include_once('include/navbar.php') ?>


<div class="row justify-content-md-center mt-4">

    <div class="mx-auto">
        <div id="promote" class="carousel slide" style="max-width: 1700px;" data-ride="carousel" interval="4000" pause="hover">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <a href="#"><img class="d-block w-100 "  src="dist/img/carousel/open_shop_sele.jpg"></a>
                </div>

            </div>
        </div>
    </div>
</div>

<style>
.productshow{
  background-color:#181818;
}
</style>

<div class="productshow">
<div class="row mt-4" >

    <div class="col-sm-3 ">
        <div id="productshow" class="carousel slide" style="max-width: 500px;" data-ride="carousel" interval="4000" pause="hover">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <a href="#"><img class="d-block w-100 " src="dist/img/carousel/1.jpg"></a>
                </div>
                <div class="carousel-item ">
                <a href="#"><img class="d-block w-100 " src="dist/img/carousel/2.jpg"></a>
                </div>
                <div class="carousel-item ">
                <a href="#"><img class="d-block w-100 " src="dist/img/carousel/3.jpg"></a>
                </div>
                <div class="carousel-item ">
                <a href="#"><img class="d-block w-100 "src="dist/img/carousel/4.jpg"></a>
                </div>
            </div>

            <a class="carousel-control-prev" href="#productshow" role="button" data-slide="prev">
              <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
              <!-- <span class="sr-only">Previous</span> -->
            </a>
            <a class="carousel-control-next" href="#productshow" role="button" data-slide="next">
              <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
              <!-- <span class="sr-only">Next</span> -->
            </a>

        </div>
    </div>

    <div class="col-sm-9">
    <div id="banner2" class="carousel slide" style="max-width: 1600px;" data-ride="carousel" interval="4000" pause="hover">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <a href="#"><img class="d-block w-100 " src="dist/img/carousel/banner2.jpg"></a>
                </div>

            </div>
        </div>
    </div>
</div>
</div>



<?php include_once('include/footer.php');?>