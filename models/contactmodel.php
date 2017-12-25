<?php
class ContactModel extends Model {
    public function saveMessage($params){
        if(empty($params['name']) or empty($params['email']) or empty($params['message'])){
            return false;
        }
        $sql="INSERT INTO `feedback`( `name`, `email`, `subject`, `message`,`is_new`)
              VALUES ('{$params['name']}','{$params['email']}','{$params['subject']}','{$params['message']}','1')";
         return $this->db->queryInsert($sql);
    }
    public function getFeedback(){
        $sql="SELECT `id`,`name`, `email`, `subject`, `message`,`is_new` FROM `feedback` ORDER by `is_new` DESC ";
        return $this->db->querySelect($sql);
    }
    public function deleteMassage($id){
        $sql="DELETE FROM `feedback` WHERE `id`={$id}";
        return $this->db->queryDelete($sql);
    }
    public function responseMessage($id){
        $sql="UPDATE `feedback` SET `is_new`='0' WHERE `id`='{$id}'";
        return $this->db->queryUpdate($sql);
    }
}
?>