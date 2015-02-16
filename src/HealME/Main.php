<?php

namespace HealME;

use pocketmine\event\Listener;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;

class Main extends PluginBase implements Listener{
    public function onEnable(){
      $this->saveDefaultConfig();
      $this->getServer()->getPluginManager()->registerEvents($this, $this);
      $this->getLogger()->info(TEXTFORMAT::RED . "HealME] " . TEXTFORMAT::GREEN . "I'm Enabled! Let's HEAL!");
    }
 }
public function onCommand(CommandSender $sender, Command $command, $label, array $args) {
	if($sender instanceof Player) {
		$player = $sender->getPlayer()->getName();
		if(strtolower($command->getName('heal'))) {
		$healed = $this->getServer()->getPlayerExact($args[1]);
          	$myhealth = $player->getHealth(); //Gets health
		$sethealth = $myhealth + 10; //Adds health
		$healed->setHealth($sethealth); //Sets health
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
