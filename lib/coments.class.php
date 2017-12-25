<?php
class Coments{
    protected static $db;
    public static $count;
    public static function countComents($id){
        $sql="SELECT COUNT(id_post) as count FROM `coments` WHERE id_post={$id} GROUP BY id_post";
        $result=App::$db->querySelect($sql);
            return  $result?$result[0]['count']:0;
    }
    public static function getComents($id){
        $sql="SELECT `id_post`,`name`,`message`,`date` FROM `coments` WHERE `id_post`={$id}";
        $result=App::$db->querySelect($sql);
        if($result){
            return $result;
        }else{
            $result['bool']=false;
        }
        return $result;
    }
    public function saveComents($params){
        if(empty($params['id_post']) or empty($params['name']) or empty($params['email']) or empty($params['message'])){
            return false;
        }
        $sql= " INSERT INTO `coments`(`id_post`, `name`, `email`, `message`)
         VALUES ('{$params['id_post']}','{$params['name']}','{$params['email']}','{$params['message']}')";

        return App::$db->queryInsert($sql);
    }
}