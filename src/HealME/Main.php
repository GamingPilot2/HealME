<?php

namespace HealME;

use pocketmine\event\Listener;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use pocketmine\command\CommandExecuter

public function onCommand(CommandSender $sender, Command $command, $label, array $args) {
	if($sender instanceof Player) {
		$player = $sender->getPlayer()->getName();
		if(strtolower($command->getName('heal'))) {
		$healed = $this->getServer()->getPlayerExact($args[1]);
          	$myhealth = $player->getHealth();
		$sethealth = $myhealth + 10; 
		$healed->setHealth($sethealth); 
		$healed->sendMessage("HealME] You Have Been Healed By " . $player . "!");
			if(empty($args[1])) {
		            $player->setHealth($sethealth)
		            $player->sendMessage("HealME] You Have Been Healed!")
				}else{
		            		$player->setHealth($sethealth)
		        		 $player->sendMessage("HealME] You Have Been Healed!")
				}
	}
		}
	}
}
