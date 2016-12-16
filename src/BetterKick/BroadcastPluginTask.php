<?php

namespace SmashAC;

use pocketmine\Player;
use pocketmine\scheduler\PluginTask;
use pocketmine\Server;

class BroadcastPluginTask extends PluginTask{

	public function onRun($currentTick){
		Server::getInstance()->broadcastMessage("§4[SmashAC] §eThis server uses SmashAC!");
	}
}
