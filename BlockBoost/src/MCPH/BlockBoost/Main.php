<?php

namespace MCPH\BlockBoost;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerMoveEvent;
use pocketmine\block\Block;
use pocketmine\math\Vector3;

class Main extends PluginBase implements Listener
{
  
  public function onEnable()
  {
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
    $this->getLogger()->info("BlockBoost has been enabled.");
  }
  
  public function onDisable()
  {
    $this->getLogger()->info("BlockBoost has been disabled.");
  }
  
  public function onMove(PlayerMoveEvent $event)
  {
    $player = $event->getPlayer();
    $from = $event->getFrom();
    $to = $event->getTo();
    if($from->getLevel()->getBlockIdAt($from->x, $from->y - 1, $from->z) === Block::REDSTONE_BLOCK)
    {
      $player->setMotion((new Vector3($to->x - $from->x, $to->y - $from->y, $to->z - $from->z))->multiply(5));
    }
  }
}  
