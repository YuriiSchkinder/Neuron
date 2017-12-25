<?php
class Router{
    protected $uri;
    protected $controller_name;
    protected $route;
    protected $action;
    protected $method_prefix;
    protected $params;
    public function getController(){
        return $this->controller_name;
    }
    public function getRoute(){
        return $this->route;
    }
    public function getAction(){
        return $this->action;
    }
    public function getMethodPrefix(){
        return $this->method_prefix;
    }
    public function getParams(){
        return $this->params;
    }
    public function __construct($uri)
    {
        $this->uri=urldecode(trim($uri,'/'));
        $routes=Config::get('routes');
        $this->route=Config::get('default_routes');
        $this->method_prefix=isset($routes[$this->route])? $routes[$this->route] : '';
        $this->controller_name=Config::get('default_comtroller');
        $this->action=Config::get('default_action');
        $uri_parts=explode('?',$this->uri);
        $path=$uri_parts[0];
        $path_parts=explode('/',$path);

        if(count($path_parts)){
            if(in_array(strtolower(current($path_parts)),array_keys($routes))){
                $this->route=strtolower(current($path_parts));
                $this->method_prefix=isset($routes[$this->route])? $routes[$this->route] : '';
                array_shift($path_parts);
            }
            if(current($path_parts)){
                $this->controller_name=strtolower(current($path_parts));
                array_shift($path_parts);
            }
            if(current($path_parts)){
                $this->action=strtolower(current($path_parts));
                array_shift($path_parts);
            }
            $this->params=$path_parts;

        }

    }
}
?>