<?php
include(__DIR__.'/App/Select.php');
$sl = new Select('*' , 'test');
$select = $sl->setWhere("id = '1' ");

?>