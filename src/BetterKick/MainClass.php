<?php

namespace BetterKick;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\command\Command;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\command\CommandSender;
use pocketmine\event\player\PlayerCommandPreProcessEvent;

class MainClass extends PluginBase implements Listener {
	
	public function onEnable() {
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		// add logger here
	}
	
	public function onCommand(CommandSender $sender, Command $cmd, $label, array $param) {
		switch(strtolower($cmd->getName())) {
		
			case "example":
				
				$sender->sendMessage("Hi " . $sender->getName() . "!");
			
				return true;
			break;
		
		}
	}
	
	public function onCMD(PlayerCommandPreProcessEvent $e) {
		
		$msg = $e->getMessage();
		
		$ex = explode(" ", $msg);
		
		/**
			* 'explode' explodes the messages to arrays
			* $ex[0]
			* $ex[1] 
		*/
		
		if($ex[0] === "/kick") { // === works better than ==
			
			// Your lines here
			
			$e->setCancelled(true);
			
		}
	}
	
	public function onDisable() {
	}
	
}
