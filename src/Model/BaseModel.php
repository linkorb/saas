<?php

namespace Saas\Model;

abstract class BaseModel
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

    private $title;
    
    public function setTitle($title)
    {
        $this->title = (string)$title;
    }
    
    public function getTitle()
    {
        return $this->title;
    }
    
    private $description;
    
    public function setDescription($description)
    {
        $this->description = (string)$description;
    }
    
    public function getDescription()
    {
        return $this->description;
    }

    private $url;
    
    public function setUrl($url)
    {
        $this->url = (string)$url;
    }
    
    public function getUrl()
    {
        return $this->url;
    }
    
    private $amount;
    
    public function setAmount($amount)
    {
        $this->amount = (string)$amount;
    }
    
    public function getAmount()
    {
        return $this->amount;
    }
    
    private $currency;
    
    public function setCurrency($currency)
    {
        $this->currency = (string)$currency;
    }
    
    public function getCurrency()
    {
        return $this->currency;
    }
    
    private $interval;
    
    public function setInterval($interval)
    {
        $this->interval = (string)$interval;
    }
    
    public function getInterval()
    {
        return $this->interval;
    }
    
    private $trialdays;
    
    public function setTrialDays($trialdays)
    {
        $this->trialdays = (string)$trialdays;
    }
    
    public function getTrialDays()
    {
        return $this->trialdays;
    }
    
    private $configs = array();
    
    public function addConfig(Config $config)
    {
        $this->configs[$config->getId()] = $config;
    }
    

}
