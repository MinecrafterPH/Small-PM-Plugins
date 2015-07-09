<?php

namespace MCPH\Invisibility;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\entity\Entity;
use pocketmine\Player;

class Main extends PluginBase
{
  
  public function onEnable()
  {
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
    $this->getLogger()->info("Invisibility has been enabled.");
    $this->saveDefaultConfig();
  }
  
  public function onDisable()
  {
    $this->getLogger()->info("Invisibility has been disabled.");
  }
  
  public function onCommand(CommandSender $sender, Command $command, $label, array $args)
  {
    if(strtolower($command->$getName())== "invis-on")
    {
      if($sender instanceof Player) 
      {
        if($sender->hasPermission("invisible.on"))
        {
          $this->enableInvisibility($sender);
        }
        else {
          $sender->sendMessage(TextFormat::RED . "You don't have permissions to use this command.");
        }  
      }
      else {
        $sender->sendMessage(TextFormat::RED . "Please run this command in-game!");
      }  
    }
    elseif(strtolower($command->$getName())== "invis-off")
    {
      if($sender instanceof Player) 
      {
        if($sender->hasPermission("invisible.off"))
        {
          $this->disableInvisibility($sender);
        }
        else {
          $sender->sendMessage(TextFormat::RED . "You don't have permissions to use this command.");
        }
      }
      else {
        $sender->sendMessage(TextFormat::RED . "Please run this command in-game!");
      }
    }  
  }
  
  public function enableInvisibility($sender)
  {
    $sender->setDataFlag(Entity::DATA_FLAGS, Entity::DATA_FLAG_INVISIBLE, true);
    $sender->setDataProperty(Entity::DATA_SHOW_NAMETAG, Entity::DATA_TYPE_BYTE, 0);
    $sender->sendMessage(TextFormat::GREEN . "You have enabled invisibility!");
  }
  
  public function disableInvisibility($sender)
  {
    $sender->setDataFlag(Entity::DATA_FLAGS, Entity::DATA_FLAG_INVISIBLE, false);
    $sender->setDataProperty(Entity::DATA_SHOW_NAMETAG, Entity::DATA_TYPE_BYTE, 1);
    $sender->sendMessage(TextFormat::RED . "You have disabled invisibility!");
  }
