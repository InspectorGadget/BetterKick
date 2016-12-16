<?php

namespace BetterKick;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerRespawnEvent;
use pocketmine\event\player\PlayerCommandPreProcessEvent;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\utils\TextFormat;

class MainClass extends PluginBase implements Listener {

	public function onEnable(){
	
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		$this->getLogger()->info("BetterKick succefully enabled!");
	}

	public function onCommand(CommandSender $sender, Command $command, $label, array $args){
		switch(strtolower($command->getName())){
		
			case "example":
				$sender->sendMessage("Hello ".$sender->getName()."!");
				return true;
			break;
			
		}
	}

	public function onSay(PlayerCommandPreProcessEvent $event){
		$msg = $event->getMessage();
		$msgg = explode(" ", $msg);
			if($msgg == "/kick"){

					$sender->sendMessage("Hello ".$sender->getName()."!");

					$event->setCancelled(true); //Doesn't do the old command
			}
	}
	
	public function onDisable() {
	}
	
}
