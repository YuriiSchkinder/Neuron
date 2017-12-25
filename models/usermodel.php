<?php
class UserModel extends Model{
public function getByLogin($login){
    $sql="SELECT `id`, `login`, `email`, `password`, `role`, `path_avatar` 
          FROM `users` WHERE `login`='{$login}' limit 1";

        return  $this->db->querySelect($sql);

}
}
?>