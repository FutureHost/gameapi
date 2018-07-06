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
* @link https://github.com/Eren5960
*/                  

namespace xenialdan\gameapi\task;

use pocketmine\plugin\Plugin;
use pocketmine\scheduler\Task;
use xenialdan\gameapi\Arena;

class StartTickerTask extends Task{

	private $arena;
	public $plugin;
	
	public function __construct(Plugin $plugin, Arena $arena){
		$this->plugin = $plugin;
		$this->arena = $arena;
	}

	public function onRun(int $currentTick){
		if ($this->arena instanceof Arena){
			$this->arena->sendTimer($this->plugin);
			return;
		} else
			$this->plugin->getScheduler()->cancelTask($this->getTaskId());
		return;
	}
}
