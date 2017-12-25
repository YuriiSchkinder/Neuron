<?php
class Post extends Model
{


    public function getPost()
    {
        $sql = 'SELECT `id`, `title`, `author`, `date`, `desctiption`, `path` FROM `posts`  ';

        return $this->db->querySelect($sql);

    }

    public function getIdPost($id)
    {
        $sql = "SELECT id, title, author, `date`,content, path , desctiption  FROM `posts`  WHERE id={$id}";
        return $this->db->querySelect($sql);
    }

    public function savePost($data)
    {
        if (!$_FILES or empty($data['title']) or empty($data['author']) or empty($data['desctiption']) or empty($data['content'])) {
            return false;
        }
        $id_post = current(current($this->db->querySelect("SELECT MAX(id) as `id` FROM `posts`")))+1;
        $newPath = "images" . DS . "page" . DS . basename($_FILES['img']['name']);
        $newName = "images/page/" . "post-" . $id_post . '.' . substr($_FILES['img']['name'], strrpos($_FILES['img']['name'], '.') + 1);
        $sql = "INSERT INTO `posts` (`title`, `author`, `desctiption`, `content`,`path`) VALUES ('{$data['title']}',
        '{$data['author']}','{$data['desctiption']}','{$data['content']}','{$newName}')";
        if ($this->db->queryInsert($sql)) {
            move_uploaded_file(rename($_FILES['img']['tmp_name'], $newName), $newPath);
            return true;
        }
        return false;
    }
    public  function deletePost($id){
        $sql="DELETE FROM `posts` WHERE  `id`={$id}";
        return $this->db->queryDelete($sql);
    }
    public function updatePost($id,$data){
        if ( empty($data['title']) or empty($data['author']) or empty($data['desctiption']) or empty($data['content'])) {
            return false;
        }
        if(!empty($_FILES['img']['name'])){
            $newPath = "images" . DS . "page" . DS . basename($_FILES['img']['name']);
            $newName = "images/page/" . "post-" . $id . '.' . substr($_FILES['img']['name'], strrpos($_FILES['img']['name'], '.') + 1);
            $sql="UPDATE `posts` SET `title`='{$data['title']}',`author`='{$data['author']}',`desctiption`='{$data['desctiption']}',
              `content`='{$data['content']}',`path`='{$newName}'  WHERE `id`={$id}";
            move_uploaded_file(rename($_FILES['img']['tmp_name'], $newName), $newPath);

        }else{
            $sql="UPDATE `posts` SET `title`='{$data['title']}',`author`='{$data['author']}',`desctiption`='{$data['desctiption']}',
              `content`='{$data['content']}'  WHERE `id`={$id}";
            }
        if ($this->db->queryUpdate($sql)) {
            return true;
        }
            return false;
    }
}

?>