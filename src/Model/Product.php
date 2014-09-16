<?php

namespace Saas\Model;

use Saas\Model\Plan;
use Saas\Model\Addon;

class Product extends BaseModel
{
    private $plans = array();
    
    public function addPlan(Plan $plan)
    {
        $this->plans[$plan->getId()] = $plan;
    }

    private $addons = array();
    
    public function addAddon(Addon $addon)
    {
        $this->addons[$addon->getId()] = $addon;
    }
}
