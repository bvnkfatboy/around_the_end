<style>
.navbar-brand {
 margin: auto;
}

nav .navbar-nav li a{
  color: black !important;
}
nav .navbar-nav li a:hover{
  color: white !important;
  background-color: black;
}

nav{
    /*  */
    
}

</style>


<nav class="navbar navbar-light">
<a class="navbar-brand"  href="?page=home">
  <img src="dist/img/logo_text_black.png" width="300"  class="logo"loading="lazy">
</a>
</nav>


<nav class="navbar navbar-expand-lg navbar-light ">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <ul class="navbar-nav mr-auto">
        <li class="nav-item mx-auto">
            <a class="nav-link" href="#">OUTERWEAR</a>
        </li>
        <li class="nav-item mx-auto">
            <a class="nav-link" href="#">SHIRTS</a>
        </li>
        <li class="nav-item mx-auto">
            <a class="nav-link" href="#">BOTTOMS</a>
        </li>
        <li class="nav-item mx-auto">
            <a class="nav-link" href="#">HEADWEAR</a>
        </li>
        <li class="nav-item mx-auto">
            <a class="nav-link" href="#">ACCESSORIES</a>
        </li>
        <li class="nav-item mx-auto">
            <a class="nav-link" href="#">MASKS</a>
        </li>
    </ul>
    <?php
    
    session_start();
    if(isset($_SESSION['auth-id'])){
        $acc_link = "?page=profile";
    }else{
        $acc_link = "?page=login";
    }


    ?>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item mx-auto">
            <a class="nav-link" href="#">SHOP ALL COLLECTIONS</a>
        </li>
        <li class="nav-item mx-auto">
            <a class="nav-link" href="<?php echo($acc_link); ?>">ACCOUNT</a>
        </li>
        <li class="nav-item mx-auto">
            <a class="nav-link" href="#">CART (0)</a>
        </li>
        <?php
        $check_admin = isset($_SESSION['auth-status']);
        if($check_admin == 'admin'){
        echo' 
            <li class="nav-item mx-auto">
                <a class="nav-link" href="?page=admin">หลังร้าน</a>
            </li> 
            ';
        }
        ?>

    </ul>

  </div>
</nav>