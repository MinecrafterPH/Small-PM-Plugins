<?php

namespace MCPH\KillStats;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerDeathEvent;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\Player;
class Main extends PluginBase implements Listener
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
  
  public function onPlayerDeathEvent(PlayerDeathEvent $event)
  {
    $player = $event->getEntity();
		if ($player instanceof Player)
		{
		  $cause = $player->getLastDamageCause();
		  if($cause instanceof EntityDamageByEntityEvent)
		  {
		    $damager = $cause->getDamager();
		    if($damager instanceof Player)
		    {
		      $damagername = strtolower($damager->getName());
		      $this->config->setNested($damagername . ".kills", $this->config->getNested($damagername . ".kills") + 1);
          $this->config->save(); // Important!
		    }
		  }
		}
  }
}
