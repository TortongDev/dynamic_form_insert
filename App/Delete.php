<?php
include(__DIR__."/config.php");
class Delete
{
    private $host   = HOST;
    private $user   = USER;
    private $pass   = PASS;
    private $dbname = DBNAME;
    public $pdo;
    public $setTable;
    public $id;
    public function __construct(){

    }
    public function setTable($tablename){
        $this->setTable = $tablename;
    }
    public function setID($id){
        $this->id = $id;
    }

    public function start_delete(){
        $del = $this->pdo->query("DELETE FROM $this->setTable WHERE id = $this->id");
    }
}
?>