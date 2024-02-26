<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<?php
class Select{
    public $tablename;
    private $host   = "localhost";
    private $user   = "root";
    private $pass   = "";
    private $dbname = "db_khanalukling";
    public $pdo;
    public $classname;
    public function __construct($tablename,$classname){
        $this->tablename = $tablename; 
        $this->classname = $classname;
    }
    public function select($field){
        $field_db = "";
        $field_name = "<th>#</th>";
        foreach ($field as $key => $value) {
            $field_db .= $key.',';
            $field_name .= '<th>'.$value.'</th>';
        }
        $field_db = substr($field_db , 0 , -1);
        $field_name .= "<th></th>";
        $sql = "SELECT {$field_db} FROM $this->tablename";
        $this->connect();
        $select = $this->pdo->query($sql);
        echo <<<TABLE
        <table class="table $this->classname">
            <tr>$field_name</tr>
        TABLE;
        $number = 0;
        while ($r = $select->fetch(PDO::FETCH_ASSOC)) {
            $number++;
            echo <<<TABLE1
                <tr>
                    <td>{$number}</td>
            TABLE1;
                foreach ($r as $key => $value) {
                    @$$key .= $r[$key];
                    echo <<<TABLE11
                        <td>{$$key}</td>
                    TABLE11;
                }
                echo "<td><a href='' class='btn btn-warning'>แก้ไข</a></td></tr>";
        }
        echo <<<TABLE2
        </table>
        TABLE2;
    }
    public function __destruct(){
        $this->pdo = NULL;
    }
    public function connect(){
        try {
            $pdo = new PDO("mysql:host=$this->host;dbname=$this->dbname;",$this->user,$this->pass,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));     
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);  
            // echo "Connection Success";
            return $this->pdo = $pdo;
        } catch (PDOException $err) {
            echo $err->getMessage();
        }
    }
    public function disconnect(){
        $this->pdo = NULL;
    }
}
?>