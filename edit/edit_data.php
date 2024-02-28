<?php
    require_once(dirname(__DIR__).'/App/Edit.php');
    $edit = new Edit;
    $id = isset($_POST['id']) ? htmlspecialchars(trim($_POST['id'])) : '';
    $type_submit = isset($_POST['submit']) ? htmlspecialchars(trim($_POST['submit'])) : '';


    //config 1
    $primaryKeyName = "id";
    //config 2
    $tableName = "test";
    if($type_submit == 'update'):
    // config 3
    $sql = "update .....  "; // คำสั่ง update ใน mysql
    // config 4
    $val = array(
        // column คือชื่อ name จากฟอร์ม input
        $_POST["column1"],
        $_POST["column2"]
    );
    // config 5
    $where = "WHERE id = ? ";


    $edit->update($sql.$where,$val);
    endif;
    
    $selectUpdate = "SELECT * FROM $tableName WHERE $primaryKeyName = '".$id."' ";
    $selectUpdate = $edit->pdo->query($selectUpdate);
?>