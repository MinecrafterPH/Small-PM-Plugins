<?php

namespace MCPH\BlockChanger;

use pocketmine\block\Block;
use pocketmine\plugin\PluginBase;
use pocketmine\level\Position;
use pocketmine\utils\Config;

class Main extends PluginBase{
  public function onEnable(){
    $cfg = $this->getConfig();
    $ticks = $cfg->get("ticks");
    $this->getServer()->getScheduler()->scheduleDelayedRepeatingTask(new Tasks\ChangeBlockTask($this, new Position($cfg->get("x1"), $cfg->get("y1"), $cfg->get("z1"), $this->getServer()->getDefaultLevel()), [Block::get(Block::STAINED_CLAY, 4), Block::get(Block::STAINED_CLAY, 13), Block::get(Block::STAINED_CLAY, 14)]), $ticks, $ticks);
    $this->getServer()->getScheduler()->scheduleDelayedRepeatingTask(new Tasks\ChangeBlockTask($this, new Position($cfg->get("x2"), $cfg->get("y2"), $cfg->get("z2"), $this->getServer()->getDefaultLevel()), [Block::get(Block::STAINED_CLAY, 4), Block::get(Block::STAINED_CLAY, 13), Block::get(Block::STAINED_CLAY, 14)]), $ticks, $ticks);
    $this->getServer()->getScheduler()->scheduleDelayedRepeatingTask(new Tasks\ChangeBlockTask($this, new Position($cfg->get("x3"), $cfg->get("y3"), $cfg->get("z3"), $this->getServer()->getDefaultLevel()), [Block::get(Block::STAINED_CLAY, 4), Block::get(Block::STAINED_CLAY, 13), Block::get(Block::STAINED_CLAY, 14)]), $ticks, $ticks);
    $this->getServer()->getScheduler()->scheduleDelayedRepeatingTask(new Tasks\ChangeBlockTask($this, new Position($cfg->get("x4"), $cfg->get("y4"), $cfg->get("z4"), $this->getServer()->getDefaultLevel()), [Block::get(Block::STAINED_CLAY, 4), Block::get(Block::STAINED_CLAY, 13), Block::get(Block::STAINED_CLAY, 14)]), $ticks, $ticks);
    $this->getServer()->getScheduler()->scheduleDelayedRepeatingTask(new Tasks\ChangeBlockTask($this, new Position($cfg->get("x5"), $cfg->get("y5"), $cfg->get("z5"), $this->getServer()->getDefaultLevel()), [Block::get(Block::STAINED_CLAY, 4), Block::get(Block::STAINED_CLAY, 13), Block::get(Block::STAINED_CLAY, 14)]), $ticks, $ticks);
    $this->getLogger()->info("BlockChanger has been enabled.");
  }
  
  public function onDisable(){
    $this->getLogger()->info("BlockChanger has been disabled.");
  }
}
