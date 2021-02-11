<?php include_once('include/navbar.php')?>
<?php if(isset($_SESSION['auth-id'])){?>
<style>
    .user-info {
        
        
    }
    .title-menu{
        
        margin-top: 25px;
    }

    .user-info p{
        margin-left: 20px;
    }

    .btn {        
        max-width: 150px;
        border-radius: 2px;
        font-size: 15px;
        font-weight: bold;
        background-color: black;
        border: 1px black;
    }

    .btn:hover{
        background-color: whitesmoke;
        color: black;

    }

</style>
<?php
include('config.inc.php');
$sql = "SELECT * FROM account WHERE acc_id='".$_SESSION["auth-id"]."' ";
$result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result);
extract($row);

?>

<div class="container-fluid">
    <div class="user-info">
        <div class="row">
            <div class="col-md-6">
            <div class="user-name">
                <h4 class="title-menu">ACCOUNT DETAILS</h4>
                <p>name: <?=$acc_name?></p>
                <p>email: <?=$acc_email?></p>
                <p>phone: <?=$acc_phone?></p>
            </div>
            <div class="user-addre">
                <h4 class="title-menu">ADRESS DETAILS</h4>
                <p><?=$acc_address?></p>

            </div>
            <a href="?page=edit_profile" class="btn btn-primary btn-block">EDIT PROFILE</a>
            <a href="#" onclick="conf()" class="btn btn-primary btn-block">LOGOUT</a>
            </div>
            <div class="col-md-6">
            
            </div>
        </div>
    </div>
</div>

<script>
    function conf(){
        Swal.fire({
        title: 'คุณแน่ใจ?',
        text: "คุณแน่ใจที่จะออกจากระบบ",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'ออกจากระบบ',
        cancelButtonText: 'ยังคงอยู่ในระบบ'
        }).then((result) => {
        if (result.isConfirmed) {
            location.href = '?page=logout';         
        }
        })
    }
</script>
<?php }?>

<?php include_once('include/footer.php')?>
