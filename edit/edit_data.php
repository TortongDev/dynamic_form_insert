<?php
    require_once(dirname(__DIR__).'/App/Edit.php');
    $edit = new Edit;
    $id = isset($_POST['id']) ? htmlspecialchars(trim($_POST['id'])) : '';

    // config
    $sql = "update .....  "; // คำสั่ง update ใน mysql
    $val = array(
        // column คือชื่อ name จากฟอร์ม input
        $_POST["column1"],
        $_POST["column2"]
    );
    $where = "WHERE id = ? ";




    $edit->update($sql.$where,$val);
?>