<?php
class ContactController extends Controller {
    public function __construct( $data = null)
    {
        $this->model=new ContactModel();
        parent::__construct($data);
    }
    public function index(){
        if($_POST){
            if($this->model->saveMessage($_POST)){
                $this->data=true;
                Session::setMessage('Send message');
            }else{
                $this->data=false;
                Session::setMessage('Error send');
            }
        }else{
            $this->data =  true;
        }
    }
    public function admin_index(){
      $this->data= $this->model->getFeedback();
    }
    public  function admin_delete(){
        if($this->model->deleteMassage($this->params[0])){
            App::redirect(Config::get('site_link').'admin/contact');
        }
    }
    public function admin_response(){
        if($this->model->responseMessage($this->params[0])){
            App::redirect(Config::get('site_link').'admin/contact');
        }
    }
}