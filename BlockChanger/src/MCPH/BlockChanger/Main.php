<?php

namespace MCPH\BlockChanger;

use pocketmine\block\Block;
use pocketmine\plugin\PluginBase;
use pocketmine\level\Position;
use pocketmine\utils\Config;
use MCPH\BlockChanger\Tasks\ChangeBlockTask;
use pocketmine\event\player\PlayerInteractEvent;

class Main extends PluginBase{
  
  public function onEnable(){
    $cfg = $this->getConfig();
    $ticks = $cfg->get("ticks");
    $this->getServer()->getScheduler()->scheduleDelayedRepeatingTask(new ChangeBlockTask($this, new Position($cfg->get("x1"), $cfg->get("y1"), $cfg->get("z1"), $this->getServer()->getDefaultLevel()), [Block::get(Block::STAINED_CLAY, 14), Block::get(Block::STAINED_CLAY, 11), Block::get(Block::STAINED_CLAY, 4)]), $ticks, $ticks);
    $this->getServer()->getScheduler()->scheduleDelayedRepeatingTask(new ChangeBlockTask($this, new Position($cfg->get("x2"), $cfg->get("y2"), $cfg->get("z2"), $this->getServer()->getDefaultLevel()), [Block::get(Block::STAINED_CLAY, 14), Block::get(Block::STAINED_CLAY, 11), Block::get(Block::STAINED_CLAY, 4)]), $ticks, $ticks);
    $this->getServer()->getScheduler()->scheduleDelayedRepeatingTask(new ChangeBlockTask($this, new Position($cfg->get("x3"), $cfg->get("y3"), $cfg->get("z3"), $this->getServer()->getDefaultLevel()), [Block::get(Block::STAINED_CLAY, 14), Block::get(Block::STAINED_CLAY, 11), Block::get(Block::STAINED_CLAY, 4)]), $ticks, $ticks);
    $this->getServer()->getScheduler()->scheduleDelayedRepeatingTask(new ChangeBlockTask($this, new Position($cfg->get("x4"), $cfg->get("y4"), $cfg->get("z4"), $this->getServer()->getDefaultLevel()), [Block::get(Block::STAINED_CLAY, 14), Block::get(Block::STAINED_CLAY, 11), Block::get(Block::STAINED_CLAY, 4)]), $ticks, $ticks);
    $this->getServer()->getScheduler()->scheduleDelayedRepeatingTask(new ChangeBlockTask($this, new Position($cfg->get("x5"), $cfg->get("y5"), $cfg->get("z5"), $this->getServer()->getDefaultLevel()), [Block::get(Block::STAINED_CLAY, 14), Block::get(Block::STAINED_CLAY, 11), Block::get(Block::STAINED_CLAY, 4)]), $ticks, $ticks);
    $this->getServer()->getScheduler()->scheduleDelayedRepeatingTask(new ChangeBlockTask($this, new Position($cfg->get("x6"), $cfg->get("y6"), $cfg->get("z6"), $this->getServer()->getDefaultLevel()), [Block::get(Block::STAINED_CLAY, 14), Block::get(Block::STAINED_CLAY, 11), Block::get(Block::STAINED_CLAY, 4)]), $ticks, $ticks);
    $this->getServer()->getScheduler()->scheduleDelayedRepeatingTask(new ChangeBlockTask($this, new Position($cfg->get("x7"), $cfg->get("y7"), $cfg->get("z7"), $this->getServer()->getDefaultLevel()), [Block::get(Block::STAINED_CLAY, 14), Block::get(Block::STAINED_CLAY, 11), Block::get(Block::STAINED_CLAY, 4)]), $ticks, $ticks);
    $this->getServer()->getScheduler()->scheduleDelayedRepeatingTask(new ChangeBlockTask($this, new Position($cfg->get("x8"), $cfg->get("y8"), $cfg->get("z8"), $this->getServer()->getDefaultLevel()), [Block::get(Block::STAINED_CLAY, 14), Block::get(Block::STAINED_CLAY, 11), Block::get(Block::STAINED_CLAY, 4)]), $ticks, $ticks);
    $this->getServer()->getScheduler()->scheduleDelayedRepeatingTask(new ChangeBlockTask($this, new Position($cfg->get("x9"), $cfg->get("y9"), $cfg->get("z9"), $this->getServer()->getDefaultLevel()), [Block::get(Block::STAINED_CLAY, 14), Block::get(Block::STAINED_CLAY, 11), Block::get(Block::STAINED_CLAY, 4)]), $ticks, $ticks);
    $this->getServer()->getScheduler()->scheduleDelayedRepeatingTask(new ChangeBlockTask($this, new Position($cfg->get("x10"), $cfg->get("y10"), $cfg->get("z10"), $this->getServer()->getDefaultLevel()), [Block::get(Block::STAINED_CLAY, 14), Block::get(Block::STAINED_CLAY, 11), Block::get(Block::STAINED_CLAY, 4)]), $ticks, $ticks);
    $this->getServer()->getScheduler()->scheduleDelayedRepeatingTask(new ChangeBlockTask($this, new Position($cfg->get("x11"), $cfg->get("y11"), $cfg->get("z11"), $this->getServer()->getDefaultLevel()), [Block::get(Block::STAINED_CLAY, 14), Block::get(Block::STAINED_CLAY, 11), Block::get(Block::STAINED_CLAY, 4)]), $ticks, $ticks);
    $this->getServer()->getScheduler()->scheduleDelayedRepeatingTask(new ChangeBlockTask($this, new Position($cfg->get("x12"), $cfg->get("y12"), $cfg->get("z12"), $this->getServer()->getDefaultLevel()), [Block::get(Block::STAINED_CLAY, 14), Block::get(Block::STAINED_CLAY, 11), Block::get(Block::STAINED_CLAY, 4)]), $ticks, $ticks);
    $this->getServer()->getScheduler()->scheduleDelayedRepeatingTask(new ChangeBlockTask($this, new Position($cfg->get("x13"), $cfg->get("y13"), $cfg->get("z13"), $this->getServer()->getDefaultLevel()), [Block::get(Block::STAINED_CLAY, 14), Block::get(Block::STAINED_CLAY, 11), Block::get(Block::STAINED_CLAY, 4)]), $ticks, $ticks);
    $this->getServer()->getScheduler()->scheduleDelayedRepeatingTask(new ChangeBlockTask($this, new Position($cfg->get("x14"), $cfg->get("y14"), $cfg->get("z14"), $this->getServer()->getDefaultLevel()), [Block::get(Block::STAINED_CLAY, 14), Block::get(Block::STAINED_CLAY, 11), Block::get(Block::STAINED_CLAY, 4)]), $ticks, $ticks);
    $this->getServer()->getScheduler()->scheduleDelayedRepeatingTask(new ChangeBlockTask($this, new Position($cfg->get("x15"), $cfg->get("y15"), $cfg->get("z15"), $this->getServer()->getDefaultLevel()), [Block::get(Block::STAINED_CLAY, 14), Block::get(Block::STAINED_CLAY, 11), Block::get(Block::STAINED_CLAY, 4)]), $ticks, $ticks);
    $this->getServer()->getScheduler()->scheduleDelayedRepeatingTask(new ChangeBlockTask($this, new Position($cfg->get("x16"), $cfg->get("y16"), $cfg->get("z16"), $this->getServer()->getDefaultLevel()), [Block::get(Block::STAINED_CLAY, 14), Block::get(Block::STAINED_CLAY, 11), Block::get(Block::STAINED_CLAY, 4)]), $ticks, $ticks);
    $this->getServer()->getScheduler()->scheduleDelayedRepeatingTask(new ChangeBlockTask($this, new Position($cfg->get("x17"), $cfg->get("y17"), $cfg->get("z17"), $this->getServer()->getDefaultLevel()), [Block::get(Block::STAINED_CLAY, 14), Block::get(Block::STAINED_CLAY, 11), Block::get(Block::STAINED_CLAY, 4)]), $ticks, $ticks);
    $this->getServer()->getScheduler()->scheduleDelayedRepeatingTask(new ChangeBlockTask($this, new Position($cfg->get("x18"), $cfg->get("y18"), $cfg->get("z18"), $this->getServer()->getDefaultLevel()), [Block::get(Block::STAINED_CLAY, 14), Block::get(Block::STAINED_CLAY, 11), Block::get(Block::STAINED_CLAY, 4)]), $ticks, $ticks);

    $this->getLogger()->info("BlockChanger has been enabled.");
  }
  
  public function onDisable(){
    $this->getLogger()->info("BlockChanger has been disabled.");
  }
}
	public function onBlockTap(PlayerInteractEvent $event)
	{
     $player = $event->getPlayer();
     $level = $player->getLevel();
     $block = $event->getBlock();
     $x = $block->getX();
     $y = $block->getY();
     $z = $block->getZ();
     $player->sendMessage($x . " " . $y . " " . $z);
    }
}
