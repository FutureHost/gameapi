<?php

/**
*  _____                    ____   ___    __     ___  
* | ____| _ __  ___  _ __  | ___| / _ \  / /_   / _ \ 
* |  _|  | '__|/ _ \| '_ \ |___ \| (_) || '_ \ | | | |
* | |___ | |  |  __/| | | | ___) |\__, || (_) || |_| |
* |_____||_|   \___||_| |_||____/   /_/  \___/  \___/ 
* 
* @version v2
* @author Eren5960
* @link https://github.com/Eren5960/JobForm
*/                   
namespace xenialdan\gameapi;

use pocketmine\plugin\PluginBase;

class Base extends PluginBase{
    
    private static $api;
    
    public function onEnable():void
    {
        self::$api = $api;
        $this->getLogger()->info("Game-API is now enable!");
    }
    
    public static function getAPI():Base
    {
        return self::$api
    }
}
