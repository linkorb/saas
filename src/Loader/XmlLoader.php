<?php

namespace Saas\Loader;

use Saas\Model\Product;
use Saas\Model\Plan;
use Saas\Model\Addon;
use Saas\Model\Config;
use SimpleXMLElement;

class XmlLoader
{
    public function load($filename)
    {
        $xmlstr = file_get_contents($filename);
        $productNode = new SimpleXMLElement($xmlstr);
        
        $product = new Product();
        $product->setId($productNode['id']);
        $product->setTitle($productNode['title']);
        $product->setUrl($productNode['url']);
        $product->setDescription($productNode['description']);
        
        foreach($productNode->config as $configNode) {
            $config = new Config();
            $config->setId($configNode['id']);
            $config->setValue($configNode['value']);
            $product->addConfig($config);
        }

        foreach($productNode->addon as $addonNode) {
            $addon = new Addon();
            $addon->setId($addonNode['id']);
            $addon->setAmount($addonNode['amount']);
            $addon->setCurrency($addonNode['currency']);
            
            foreach($addonNode->config as $configNode) {
                $config = new Config();
                $config->setId($configNode['id']);
                $config->setValue($configNode['value']);
                $addon->addConfig($config);
            }
            
            $product->addAddon($addon);
        }
        
        foreach($productNode->plan as $planNode) {
            $plan = new Plan();
            $plan->setId($planNode['id']);
            $plan->setAmount($planNode['amount']);
            $plan->setCurrency($planNode['currency']);
            $plan->setTrialDays($planNode['trialdays']);
            $plan->setInterval($planNode['interval']);
            
            foreach($planNode->config as $configNode) {
                $config = new Config();
                $config->setId($configNode['id']);
                $config->setValue($configNode['value']);
                $plan->addConfig($config);

            }

            $product->addPlan($plan);
        }

        print_r($product);
    }
}
