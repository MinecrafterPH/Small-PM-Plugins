<?php

namespace MCPH\KillStats;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
class Main extends PluginBase
{
  
  public $config;
  
  public function onEnable()
  {
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
    $this->getLogger()->info("KillStats has been enabled.");
    $this->config = new Config($this->getDataFolder()."config.yml", Config::YAML);

  }
  
  public function onDisable()
  {
    $this->getLogger()->info("KillStats has been disabled.");
  }
  
  public function onCommand(CommandSender $sender, Command $command, $label, array $args)
  {
    if(strtolower($command->$getName())== "kills")
    {
      if($sender instanceof Player) 
      {
        if($sender->hasPermission("stats.kills"))
        {
          $kills = $this->config->getNested($playername . ".kills");
          $sender->sendMessage(TextFormat::GREEN . "Kills:" . TextFormat::AQUA . "$kills");
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
  // unfinished code
