<?php
namespace ZendTest\Di\TestAsset;

class ClassB
{
    private $param;
    
    public function __construct($param=null)
    {
        $this->param = $param;
    }
    public function getParam() 
    {
        return $this->param;
    }
    public function setParam($param) 
    {
        $this->param= $param;
    }
}
