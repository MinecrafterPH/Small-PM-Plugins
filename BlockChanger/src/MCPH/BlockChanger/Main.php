<?php

namespace MCPH\BlockChanger;

use pocketmine\block\Block;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase{
  public function onEnable(){
    $this->getServer()->getScheduler()->scheduleDelayedRepeatingTask(new Tasks\ChangeBlockTask($this, new Position(125, 56, 63, $this->getServer()->getDefaultLevel()), [Block::get(Block::WOOL, 0), Block::get(Block::WOOL, 15)]), 20, 20);
    $this->getLogger()->info("BlockChanger has been enabled.");
  }
  
  public function onDisable(){
    $this->getLogger()->info("BlockChanger has been disabled.");
  }
}
