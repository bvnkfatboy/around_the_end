<style>
.login-form {
    width: 450px;
    margin: 50px auto;
  	font-size: 15px;
    font-family: 'Helvetica', sans-serif;
}

.login-form a{
    color: black;
    
}

.login-form a:hover{
   text-decoration: none;
   
}
.login-form form {
    margin-bottom: 15px;


    padding: 30px;
}
.login-form h2 {
    margin: 0 0 15px;
}
.form-control, .btn {
    min-height: 38px;
    border-radius: 2px;
}
.btn {        
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

<?php include_once('include/navbar.php')?>

<div class="login-form">
    <form action="?page=auth&&check=login" method="post">  
        <div class="form-group">
            <input type="email" class="form-control" placeholder="Email" id="auth-email" name="auth-email" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" id="auth-pass" name="auth-pass" required="required">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">SIGN IN</button>
        </div>
    
    </form>
    <p class="text-center"><a href="?page=register">Create an Account</a></p>
    <p class="text-center"><a href="?page=home">Return to Store</a></p>
    <p class="text-center"><a href="#">Forgot your password?</a></p>
</div>

<?php include_once('include/footer.php')?>