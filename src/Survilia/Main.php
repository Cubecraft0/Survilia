<?php

namespace main;

require "event\PlayerJoin.php";

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;

class Main extends PluginBase {
  public function onEnable(){
    $this->getLogger()->info("plugin started");
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
  }
  
  public function onDisable(){
    $this->getLogger()->info("plugin killed");
  }

  $onJoin = new newPlayerJoin();
  $onJoin;
}