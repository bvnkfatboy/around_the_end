<?php

include_once('config.inc.php');


    
$removeid = $_GET['acc-id']; 

if($removeid != ''){


    $sql = mysqli_query($conn,"DELETE FROM account WHERE acc_id = '".$removeid."' ");

    if($sql){
        header('Location: ?page=admin_member');
    }

}

?>