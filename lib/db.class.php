<?php
class DB{
    protected  $connection;
    public function __construct($host,$db_name,$user,$password)
    {
        $dsn="mysql:host={$host}; dbname={$db_name}";
        $this->connection=new PDO($dsn,$user,$password);
        $this->connection->exec('set names utf8');
    }
    public function querySelect($sql){
        if (!$this->connection){
            return false;
        }
       $result= $this->connection->query($sql);
         return $result->fetchAll(PDO::FETCH_ASSOC);
    }
    public function queryInsert($sql){
        if (!$this->connection){
            return false;
        }
        if($this->connection->query($sql)){
            return true;
        }
        return false;
    }
    public function queryDelete($sql){
        if (!$this->connection){
            return false;
        }
        if($this->connection->query($sql)){
            return true;
        }
        return false;
    }
    public function queryUpdate($sql){
        if (!$this->connection){
            return false;
        }
        if($this->connection->query($sql)){
            return true;
        }
        return false;
    }
}
?>