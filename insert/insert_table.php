<?php
    include(dirname(__DIR__).'/App/Insert.php');
    
    // config 
    $tableName = "test";
    $redirect = "../form.html";
    
    
    $insert = new Insert($tableName);
    $insert->insert();
    header("Location: $redirect");

?>