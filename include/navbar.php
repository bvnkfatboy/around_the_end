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

.navbarei{
    min-height: 30;
  padding-top: 4.5rem;
}
.navbarc-white {
        background:white;
}
</style>

<div class="navbarei">



<nav class="navbar navbar-expand-lg navbar-light fixed-top navbarc-white">
<nav class="navbar navbar-light">
<a class="navbar-brand"  href="?page=home">
  <img src="dist/img/logo_text_black.png" width="200px"  class="logo"loading="lazy">
</a>
</nav>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <ul class="navbar-nav mr-auto">
        <li class="nav-item mx-auto">
            <a class="nav-link" href="?page=outerwear">OUTERWEAR</a>
        </li>
        <li class="nav-item mx-auto">
            <a class="nav-link" href="?page=shirsts">SHIRTS</a>
        </li>
        <li class="nav-item mx-auto">
            <a class="nav-link" href="?page=bottoms">BOTTOMS</a>
        </li>
        <li class="nav-item mx-auto">
            <a class="nav-link" href="?page=headwear">HEADWEAR</a>
        </li>
        <li class="nav-item mx-auto">
            <a class="nav-link" href="?page=accessories">ACCESSORIES</a>
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
            <a class="nav-link" href="?page=allproduct">SHOP ALL COLLECTIONS</a>
        </li>
        <li class="nav-item mx-auto">
            <a class="nav-link" href="<?php echo($acc_link); ?>">ACCOUNT</a>
        </li>
        <li class="nav-item mx-auto">
            <a class="nav-link" href="?page=cart">CART (0)</a>
        </li>
        <?php
        // $check_admin = ($_SESSION['auth-status']);
        $nav_admin = isset($_SESSION['auth-status']) ? $_SESSION['auth-status'] : '';  
        if($nav_admin == "admin"){
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
</div>