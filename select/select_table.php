<?php
    include(dirname(__DIR__).'/App/Select.php');
    $show = new Select();
    
    $show->setOption('*'); 
    //$show->setOption("field_name1, field_name2");

    $show->setTable('tb_content');
    
    // $test->where('id ='.$_GET['id']);
    $stmt = $show->query();
?>

<table>
    <tr>
        <th>column 1</th>
        <th>column 2</th>
    </tr>
    <?php while($r = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
        <tr>

            <td>
                <?php echo $r['field_name1'] ?>
            </td>

            <td>
                <?php echo $r['field_name2'] ?>
            </td>

        </tr>
    <?php endwhile; ?>
</table>