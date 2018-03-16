<?php
class App{
    protected static $obj_router;
    public static $db;
    public static function getRouter(){
        return self::$obj_router;
    }
    public static function run($uri){
        self::$obj_router= new Router($uri);
       self::$db= new DB(Config::get('db_host'),Config::get('db_name'),Config::get('db_root'),Config::get('db_password'));
var_dump(self::$db);
exit();
        $controller_class=ucfirst(self::$obj_router->getController()).'Controller';
        $controller_method=strtolower(self::$obj_router->getMethodPrefix().self::$obj_router->getAction());
        $layout=self::$obj_router->getRoute();
        if($layout=='admin' && Session::get('role')!='admin'){
            if($controller_method !='admin_login'){
                App::redirect(Config::get('site_link').'admin/user/login');
            }
        }
        $controller_obj=new $controller_class;
        if(method_exists($controller_obj,$controller_method)){
            $controller_obj->$controller_method();
            $view_odj= new View($controller_obj->getData());
            $content= $view_odj->render();
        }else{
            throw new Exception('METHOD ERROR '.$controller_method);
        }
        $layoyt=self::$obj_router->getRoute();
        $layoyt_path=VIEW_PATH.DS.$layoyt.'.php';
        $layoyt_obj=new View(compact('content'),$layoyt_path);
        echo $layoyt_obj->render();
    }
    public static function redirect($location)
    {
        header("Location:{$location}");
	}
}
