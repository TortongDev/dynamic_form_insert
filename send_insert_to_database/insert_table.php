<?php
    include(dirname(__DIR__).'/App/Insert.php');
    $insert = new Insert('test');
    $insert->insert();
    header("Location: ../form.html");

?>