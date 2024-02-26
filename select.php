<?php
include(__DIR__.'/App/Select.php');
$sl = new Select('test','table_style');
$select = $sl->select(array(
    'username' => 'ผู้ใช้งาน',
    'password' => 'รหัสผ่าน',
    'status'   => 'สถานะ'
));
?>