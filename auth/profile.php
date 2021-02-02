<?php include_once('include/navbar.php')?>
<?php if(isset($_SESSION['auth-id'])){?>
<style>
    .user-info {
        font-family: 'Helvetica', sans-serif;
        
    }
    .title-menu{
        font-family: 'Courier New', monospace;
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


<div class="container-fluid">
    <div class="user-info">
        <div class="row">
            <div class="col-md-6">
            <div class="user-name">
                <h4 class="title-menu">ACCOUNT DETAILS</h4>
                
                <p><?php echo($_SESSION['auth-name']);?></p>
            </div>
            <div class="user-addre">
                <h4 class="title-menu">ADRESS DETAILS</h4>
                <p><?php echo($_SESSION['auth-address']);?></p>

            </div>
            <a href="#" class="btn btn-primary btn-block">EDIT PROFILE</a>
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
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
        if (result.isConfirmed) {
            location.href = '?page=logout';         
        }
        })
    }
</script>
<?php }?>

<?php include_once('include/footer.php')?>
