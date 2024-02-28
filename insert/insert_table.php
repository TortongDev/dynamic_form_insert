<?php
    include(dirname(__DIR__).'/App/Insert.php');
    
    // config 1
    $tableName = "test";
    // config 2
    $redirect = "../form.html";
    
    
    $insert = new Insert($tableName);
    $insert->insert();
    header("Location: $redirect");
    exit;

?>