<?php

$pathAppInsert = __DIR__.'\App\Insert.php';
$pathAppEdit = __DIR__.'\App\Edit.php';
$pathAppSelect = __DIR__.'\App\Select.php';
$pathAppDelete = __DIR__.'\App\Delete.php';
$pathInsert = __DIR__.'\insert\insert_table.php';
$pathSelect = __DIR__.'\select\select_table.php';
$pathDelete = __DIR__.'\delete\delete_data.php';
$pathEdit = __DIR__.'\edit\edit_data.php';
$pathConfig = __DIR__.'\App\config.php';

$myPathPate = isset($_GET['pathweb']) ? htmlspecialchars(trim($_GET['pathweb'])) :'';
$myfolder = "../$myPathPate/App";
$myfolder1 = "../$myPathPate/insert";
$myfolder2 = "../$myPathPate/select";
$myfolder3 = "../$myPathPate/delete";
$myfolder4 = "../$myPathPate/edit";
@mkdir("$myfolder",7777);
@mkdir("$myfolder1",7777);
@mkdir("$myfolder2",7777);
@mkdir("$myfolder3",7777);
@mkdir("$myfolder4",7777);

$myfolder = dirname(__DIR__).'\\'.$myPathPate.'\App';
$myfolder1 = dirname(__DIR__).'\\'.$myPathPate.'\insert';
$myfolder2 = dirname(__DIR__).'\\'.$myPathPate.'\select';
$myfolder3 = dirname(__DIR__).'\\'.$myPathPate.'\delete';
$myfolder4 = dirname(__DIR__).'\\'.$myPathPate.'\edit';
 
exec("copy ". $pathConfig. ' '.$myfolder);
exec("copy ". $pathAppDelete. ' '.$myfolder);
exec("copy ". $pathAppInsert. ' '.$myfolder);
exec("copy ". $pathAppEdit. ' '.$myfolder);
exec("copy ". $pathAppSelect. ' '.$myfolder);
exec("copy ". $pathInsert . " ".$myfolder1);
exec("copy ". $pathSelect . " ".$myfolder2);
exec("copy ". $pathDelete . " ".$myfolder3);
exec("copy ". $pathEdit . " ".$myfolder4);

?>