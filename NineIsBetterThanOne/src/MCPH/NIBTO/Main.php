<?php
namespace MCPH\NIBTO;

use pocketmine\Server;
use pocketmine\item\Item;
use pocketmine\event\block\BlockBreakEvent;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase as Base;

class Main extends Base implements Listener{
    
    public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->info("NIBTO has been enabled.")
    }
    
    public function onDisable(){
        $this->getLogger()->info("NIBTO has been disabled.")
    }
    
    public function onBreak(BlockBreakEvent $event){
            if($event->getBlock()->getId() === 57){
                $event->setDrops(array(Item::get(264, 0, 9)));
            }
            if($event->getBlock()->getId() === 42){
                $event->setDrops(array(Item::get(265, 0, 9)));
            }
            if($event->getBlock()->getId() === 41){
                $event->setDrops(array(Item::get(266, 0, 9)));
            }
            if($event->getBlock()->getId() === 22){
                $event->setDrops(array(Item::get(351:4, 0, 9)));
            }
            if($event->getBlock()->getId() === 133){
                $event->setDrops(array(Item::get(388, 0, 9)));
            }
            if($event->getBlock()->getId() === 152){
                $event->setDrops(array(Item::get(331, 0, 9)));
            }
            if($event->getBlock()->getId() === 173){
                $event->setDrops(array(Item::get(263, 0, 9)));
            }
        }
   }
