<?php
class PageController extends Controller
{
    public function __construct(array $data = array())
    {
        $this->model= new Post();
        parent::__construct($data);

    }
    public function index()
    {
       $this->data= $this->model->getPost();
    }
    public function view()
    {
        if($_POST) {

            if (Coments::saveComents($_POST)) {
                $loc=Config::get('site_link')."page/view/".$this->params[0];
                    App::redirect($loc);
            }else{
                Session::setMessage('Error send');
            }
        }
        $this->data['post']= $this->model->getIdPost($this->params[0]);
        $this->data['coments']= Coments::getComents($this->params[0]);

    }
    public function admin_index(){
     $this->data=$this->model->getPost();
    }
    public function admin_edit(){
        $this->data=$this->model->getIdPost($this->params[0]);
        if($_POST){
          if( $this->model->updatePost($this->params[0],$_POST)){
              App::redirect(Config::get('site_link').'admin');
          }
        }
    }
    public function admin_delete(){
       if( $this->data=$this->model->deletePost($this->params[0])){
           App::redirect(Config::get('site_link').'admin');
       }
    }
    public function admin_add(){
        if($_POST){
            if($this->model->savePost($_POST)){
                  App::redirect(Config::get('site_link').'admin');
            }
        }
    }
}