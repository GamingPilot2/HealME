<?php
namespace HealME;

use pocketmine\event\Listener;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use pocketmine\command\CommandExecuter;

class Main extends PluginBase implements Listener{
    	public function onEnable() {
      	$this->getServer()->getPluginManager()->registerEvents($this, $this);
      	$this->getLogger()->info(TEXTFORMAT::RED . "HealME] " . TEXTFORMAT::GREEN . "I'm Enabled! Let's HEAL!");
    }
	public function onCommand(CommandSender $sender, Command $command, $label, array $args) {
		if($sender instanceof Player) {
			if(strtolower($command->getName('heal'))) {
			$healed = $this->getServer()->getPlayerExact($args[1]);
          		$myhealth = $player->getHealth();
			$sethealth = $myhealth + 10; 
			$healed->setHealth($sethealth); 
			$healed->sendMessage("HealME] You Have Been Healed By " . $player . "!");
				if(empty($args[1])) {
				$player = $sender->getPlayer()->getName();
          			$myhealth = $player->getHealth();
				$sethealth = $myhealth + 10; 
		            	$player->setHealth($sethealth)
				}
	}
		}
	}
}
