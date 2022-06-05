<?php
class Core{
    protected $currentController='Pages';
    protected $currentMethod='index';
    protected $params=[];
    public function __construct(){
        print_r($this->geturl);
    }
    function geturl(){
        if(isset($_GET['url'])){
            $url=rtrim($_GET['url'],'/');
            $url=filter_var($url,FILTER_SANITIZE_URL);
            $url=explode('/',$url);
            return $url;
        }
    }
}
?>