<?php
class GalleryController extends Controller {
    public function __construct(array $data = array())
    {
        parent::__construct($data);
        $this->model=new Model();
    }

    public function index(){
        $this->data=$this->model->getPath(App::getRouter()->getController());
    }
}