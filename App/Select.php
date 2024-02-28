<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<?php
class Select{
    private $host   = "localhost";
    private $user   = "root";
    private $pass   = "";
    private $dbname = "db_khanalukling";
    public $pdo;
    public $setTable;
    public $setOption;
    public $setWhere;
    public function __construct($setOption, $setTable){
        $this->setTable = $setTable;
        $this->setOption = $setOption;
        $this->connect();
        if(empty($this->setWhere)){
            $optionStart = "1=1";
        } else {
            $optionStart = "1=1 AND ";
        }
        echo "select {$this->setOption} from {$this->setTable} where {$optionStart} {$this->setWhere}";
        // $stmt = $this->pdo->query("select {$this->setOption} from {$this->setTable} where {$optionStart} {$this->setWhere}");
        // $stmt = $stmt->fetch(PDO::FETCH_ASSOC);
        // $this->disconnect();
        // return $stmt;
    }
    public function setwhere($where){
        $this->setWhere = $where;
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