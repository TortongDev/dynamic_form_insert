<?php
sleep(5);
echo json_encode(['status'=>1]);
exec('copy C:\laragon\www\TortongFramework\App\Insert.php C:\laragon\www\TortongFramework');
?>