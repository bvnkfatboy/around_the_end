<?php include_once('include/navbar.php')?>
<?php if(isset($_SESSION['auth-id'])){?>

<h3>Account Details</h3>
<p><?php echo($_SESSION['auth-name']);?></p>

<?php }?>

<?php include_once('include/footer.php')?>