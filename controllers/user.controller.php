<?php
class UserController extends Controller{
public function __construct($data = null)
{
    parent::__construct($data);
    $this->model=new UserModel();
}
public function admin_login(){
 if($_POST && $_POST['login'] && $_POST['password']){
     $user=$this->model->getByLogin($_POST['login']);
     $hash= md5(Config::get('salt').$_POST['password']);
     if($user && $hash==$user[0]['password']){
         Session::set('login',$user[0]['login']);
         Session::set('role',$user[0]['role']);
     }
     App::redirect(Config::get('site_link').'admin');
 }
}
public function admin_logout(){
    Session::destroy();
    App::redirect(Config::get('site_link'));
}

}

?>