<?php

namespace xenialdan\gameapi\event;

use pocketmine\event\plugin\PluginEvent;
use pocketmine\plugin\Plugin;

class StartGameEvent extends PluginEvent{
	public static $handlerList = null;

	/** @var Plugin */
	private $game;

	public function __construct(Plugin $plugin, Plugin $game){
print __CLASS__ . '-' . __LINE__ . ':';//TODO REMOVE
		parent::__construct($plugin);
		$this->game = $game;
	}

	/**
	 * @return Plugin
	 */
	public function getPlugin(): Plugin{
print __CLASS__ . '-' . __LINE__ . ':';//TODO REMOVE
		return $this->game;
	}

	public function getGame(){
print __CLASS__ . '-' . __LINE__ . ':';//TODO REMOVE
		return $this->game;
	}

	public function getName(){
print __CLASS__ . '-' . __LINE__ . ':';//TODO REMOVE
		$this->getGame()->getName();
	}
}