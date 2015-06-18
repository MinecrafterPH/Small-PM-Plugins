<?php

namespace MCPH\NoExplosionDeath;

use pocketmine\plugin\PluginBase;
use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\event\Listener;
use pocketmine\Player;

class Main extends PluginBase implements Listener
{
  
   public function onEnable()
   {
     $this->getServer()->getPluginManager()->registerEvents($this, $this);
     $this->getLogger()->info("NoExplosionDeath has been enabled.");
   }
   public function onDisable()
   {
     $this->getLogger()->info("NoExplosionDeath has been disabled.");
   }
   public function onDamage(EntityDamageEvent $event)
   {
     $cause = $event->getCause();
     if($cause === EntityDamageEvent::CAUSE_BLOCK_EXPLOSION || $cause === EntityDamageEvent::CAUSE_ENTITY_EXPLOSION){
     $event->setCancelled();
     }
   }
}

?>
   
