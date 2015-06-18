<?php

namespace MCPH\NoDeathDrops;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerDeathEvent;
use pocketmine\utils\Config;

class Main extends PluginBase implements Listener 
{
 public function onEnable()
 {
   $this->getServer()->getPluginManager()->registerEvents($this, $this);
   $this->getLogger()->info("NoDeathDrop has been enabled!");
 }
 public function onDisable()
 {
   $this->getLogger()->info("NoDeathDrop has been disabled!");
 } 
 public function onDeath(PlayerDeathEvent $event)
 {
   $cfg = $this->getConfig();
   $enable = $cfg->get("enable");
   if($event->getEntity() instanceof Player and $enable !== true){
       $event->setDrops([]);  
     }
   
   
 }
}
