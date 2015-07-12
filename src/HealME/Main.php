<?php

namespace HealME;

use pocketmine\event\Listener;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use pocketmine\command\CommandExecuter;
use pocketmine\command\CommandSender;
use pocketmine\level\particle\HeartParticle;
use pocketmine\level\sound\PopSound;

class Main extends PluginBase implements Listener{
	
    	public function onEnable() {
      	$this->getServer()->getPluginManager()->registerEvents($this, $this);
      	$this->getLogger()->info(TextFormat::RED . "HealME] " . TextFormat::GREEN . "I'm Enabled! Let's HEAL!");
      	
    }
	public function onCommand(CommandSender $sender, Command $command, $label, array $args) {
		$heart = new HeartParticle($sender);
		if($sender instanceof Player) {
			switch($command->getName()){
        		case 'heal':
        		if($sender->isOp()){
			$defined = $args[0];
			$pop = new PopSound($defined);
			$healed->setHealth(20);
			$defined->getLevel()->addParticle($heart);
			$defined->getLevel()->addSOund($pop);
			$defined->sendMessage(TextFormat::BLUE."[" . TextFormat::RED . TextFormat::BOLD . "HealME" . TextFormat::RESET . TextFormat::BLUE . "] " . TextFormat::GREEN . "You Have Been Healed By " . TextFormat::GOLD . "" . $sender->getName() . "" . TextFormat::GREEN . "!");
			$sender->sendMessage(TextFormat::BLUE."[" . TextFormat::RED . TextFormat::BOLD . "HealME" . TextFormat::RESET . TextFormat::BLUE . "] " . TextFormat::GREEN . "Healed $defined");
				if(empty($args[0])) {
		            	$sender->setHealth(20);
		            	$sender->sendMessage("HealME] You Have Been Healed!");
					}
				}
	}else{
		$sender->sendMessage(TextFormat::RED."Only OPs Can Do That!");
	}
		}
	}else{
		if(!($sender instanceof Player)){
		$sender->sendMessage("Run this command in game.");
	}
	}
	}
