<?php

class IndexController extends Yaf\Controller_Abstract {
    //        $class = new ReflectionClass($this->getView());
//        $method = $class->getMethods();
//        echo "<pre>";
//        print_r($method);
//        echo "</pre>";
//
//        echo "<pre>";
//        ReflectionClass::export($this->getView());
    public function indexAction() {//默认Action
        $this->getView()->assign("content", "Hello1 World");
    }
    public function index2Action() {//默认Action
        $this->getView()->assign("content", "Hello2 World");
    }

}
?>