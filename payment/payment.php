



<style>
    .login-form {
        width: 450px;
        margin: 50px auto;
        font-size: 15px;
        
    }

    .login-form a {
        color: black;

    }

    .login-form a:hover {
        text-decoration: none;

    }

    .login-form form {
        margin-bottom: 15px;


        padding: 30px;
    }

    .login-form h2 {
        margin: 0 0 15px;
    }

    .form-control,
    .btn {
        min-height: 38px;
        border-radius: 2px;
    }

    .btn {
        font-size: 15px;
        font-weight: bold;
        background-color: black;
        border: 1px black;
    }

    .btn:hover {
        background-color: whitesmoke;
        color: black;

    }
    label {
        
    }
</style>


<?php include_once('include/navbar.php') ?>

<div class="login-form">
    <form action="" method="post">
        <div class="form-group">
        <label >ชื่อ - นามสกุล</label>
            <input type="text" class="form-control"  name="pay-name" required="required">
        </div>
        <div class="form-group">
        <label >วันที่โอน</label>
            <input class="form-control" type="date"  name="pay-date">
        </div>
        <div class="form-group">
        <label >ธนาคารที่โอน</label>

                <select  class="form-control" name="pay-bank">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                </select>
        </div>

        <div class="form-group">
        <label >เลขออเดอร์</label>
            <input type="text" class="form-control"  name="pay-key" required="required">
        </div>

        <div class="form-group">
        <label >สลิป</label>
            <input class="form-control" type="file"  name="pay-img">
        </div>
 
 <br>
        <div class="form-group">
            <button type="submit" name="pay-app" class="btn btn-primary btn-block">CREATE</button>
        </div>

    </form>
    <p class="text-center"><a href="?page=home">Return to Store</a></p>
</div>

<?php include_once('include/footer.php') ?>