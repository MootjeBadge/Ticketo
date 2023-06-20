<?php 
class DB{
    protected $host='localhost';
    protected $user='root';
    protected $password='2.DnomvozSI8KNA(';
    protected $database='support_center';

    public $conn;

    public function __construct()
    {
        $this->conn=new mysqli($this->host,$this->user,$this->password,$this->database);
        if($this->conn->errno){
            die('Database error');
        }
    }
}
?>