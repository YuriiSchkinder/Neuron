<?php
class Model{
    protected $db;
    public function __construct()
    {
        $this->db=App::$db;
    }
    public function getPath($dir)
    {
        $arr_path = [];
        foreach (scandir('images' . DS . $dir) as $path) {
            if ($path != '.' && $path != '..') {
                $arr_path[] = 'images' . DS . $dir . DS . $path;
            }
        }
        return $arr_path;
    }
    public function getPathId($dir,$id)
    {
        $arr_path = [];
        foreach (scandir('images' . DS . $dir) as $path) {
            if ($path != '.' && $path != '..') {
                $arr_path[] = 'images' . DS . $dir . DS . $path;
            }
        }
        return $arr_path;
    }
}