<?php

namespace Saas\Model;

class Config
{
    private $id;
    
    public function setId($id)
    {
        $this->id = (string)$id;
    }
    
    public function getId()
    {
        return $this->id;
    }
    
    private $value;
    
    public function setValue($value)
    {
        $this->value = (string)$value;
    }
    
    public function getValue()
    {
        return $this->value;
    }
}
