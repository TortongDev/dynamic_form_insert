<?php
 include(dirname(__DIR__).'/App/Delete.php');
 $delete = new Delete;

// config อ้างอิจาก ฐานข้อมูล
// config 1
$primaryKeyName = 'id';
// config 2
$tableName      = 'tb_content';




$delete->setTable($tableName);
$delete->setID($primaryKeyName , @$_GET['id']);
$delete->start_delete();
 
?>