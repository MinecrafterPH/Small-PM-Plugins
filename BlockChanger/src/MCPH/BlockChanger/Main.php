<?php

namespace MCPH\BlockChanger;

use pocketmine\block\Block;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase{
  public function onEnable(){
    $cfg = $this->getConfig();
    $x = $cfg->get("x");
    $y = $cfg->get("y");
    $z = $cfg->get("z")
    $this->getServer()->getScheduler()->scheduleDelayedRepeatingTask(new Tasks\ChangeBlockTask($this, new Position($x, $y, $z, $this->getServer()->getDefaultLevel()), [Block::get(Block::WOOL, 0), Block::get(Block::WOOL, 15)]), 20, 20);
    $this->getLogger()->info("BlockChanger has been enabled.");
  }
  
  public function onDisable(){
    $this->getLogger()->info("BlockChanger has been disabled.");
  }
}
