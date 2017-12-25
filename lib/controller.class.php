<?php
class Controller{
    protected $model;
    protected $data;
    protected $params;
    public function getData(){
        return $this->data;
    }
    public function __construct($data=null){

        $this->data=$data;
        $this->params=App::getRouter()->getParams();
    }
}
?>