<?php
 include(dirname(__DIR__).'/App/Delete.php');
 $delete = new Delete;

// config อ้างอิจาก ฐานข้อมูล
$primaryKeyName = 'id';
$tableName      = 'tb_content';




$delete->setTable($tableName);
$delete->setID($primaryKeyName , @$_GET['id']);
$delete->start_delete();
 
?>