<?php

$pathAppInsert = __DIR__.'\App\Insert.php';
$pathAppEdit = __DIR__.'\App\Edit.php';
$pathAppSelect = __DIR__.'\App\Select.php';
$pathInsert = __DIR__.'\send_insert_to_database\insert_table.php';
$pathSelect = __DIR__.'\select\select_table.php';

$myPathPate = isset($_GET['pathweb']) ? htmlspecialchars(trim($_GET['pathweb'])) :'';
$myfolder = "../$myPathPate/App";
$myfolder1 = "../$myPathPate/send_insert_to_database";
$myfolder2 = "../$myPathPate/select";
@mkdir("$myfolder",7777);
@mkdir("$myfolder1",7777);
@mkdir("$myfolder2",7777);

$myfolder = dirname(__DIR__).'\\'.$myPathPate.'\App';
$myfolder1 = dirname(__DIR__).'\\'.$myPathPate.'\send_insert_to_database';
$myfolder2 = dirname(__DIR__).'\\'.$myPathPate.'\select';

exec("copy ". $pathAppInsert. ' '.$myfolder);
exec("copy ". $pathAppEdit. ' '.$myfolder);
exec("copy ". $pathAppSelect. ' '.$myfolder);
exec("copy ". $pathInsert . " ".$myfolder1);
exec("copy ". $pathSelect . " ".$myfolder2);

?>