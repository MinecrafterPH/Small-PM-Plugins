<?php

namespace MCPH\ClosestPlayer;

use pocketmine\Player;
use pocketmine\Server;
use pocketmine\level\Position;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;

class Main extends PluginBase{

    public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->info(TextFormat::DARK_GREEN . "ClosestPlayer has been enabled!");
    }

    public function onDisable(){
        $this->getLogger()->info(TextFormat::DARK_RED . "ClosestPlayer has been disabled!");
    }

    public function onCommand(CommandSender $sender, Command $command, $label, array $args){
        if(strtolower($command->$getName())== "closest"){
            if($sender instanceof Position){ // if the sender is a position, for example a player
              $closest = null;
              $lastSquare = -1;
              foreach($sender->getLevel()-> getPlayers() as $p){ // for every player in the sender's world
                if($p !== $sender){
                  $square = $sender->distanceSquared($p); // get the square of the distance between the sender and the currently checking player
                  // use distanceSquared() because it is faster than distance()
                  if($lastSquare === -1 or $lastSquare > $square){ // this is the so far closest player
                    $closest = $p;
                    $lastSquare = $square;
                  }
                }
              }
            if($sender instanceof Player){  
              $sender->sendMessage("The closest player to you is" . $closest);
            }  
            }
        }
    }    
}
