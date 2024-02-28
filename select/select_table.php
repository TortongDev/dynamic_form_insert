<?php
    include(dirname(__DIR__).'/App/Select.php');
    $show = new Select();
    
    // Config  อ้างอิงจากในฐานข้อมูล
    $tableName = 'tb_content';
    $option = ' * '; // * คือดึงมาทุกคอลัมน์ในตารางฐานข้อมูล
    // $option = ' field1, field2 ';  คือดึงมาเฉพาะคอลัมน์ที่ต้องการในตารางฐานข้อมูล


    $show->setOption($option); 
    $show->setTable($tableName);
    $stmt = $show->query();
?>

<table>
    <tr>
        <th>column 1</th>
        <th>column 2</th>
        <th>column 3</th>
        <th>column 4</th>
    </tr>
    <?php
        $NUMBER = 0;
        while($r = $stmt->fetch(PDO::FETCH_ASSOC)): 
        $NUMBER++;
    ?>
        <tr>
            <td>
                <?php echo $NUMBER; ?>
            </td>
            <td>
                <?php echo $r['เปลี่ยนชื่อ column ที่ต้องการแสดงจากฐานข้อมูล 1'] ?> 
            </td>
            <td>
                <?php echo $r['เปลี่ยนชื่อ column ที่ต้องการแสดงจากฐานข้อมูล 2'] ?>
            </td>

            <td>
                <a href="../edit/edit_data.php?id=<?php echo $r['id'] ?>" class="btn btn-warning">แก้ไขข้อมูล</a>
                <a href="../delete/delete_data.php?id=<?php echo $r['id'] ?>" class="btn btn-primary">ลบข้อมูล</a>
            </td>

        </tr>
    <?php endwhile; ?>
</table>
