<?php

namespace main;

$PlayerJoin = require("event\PlayerJoin.php");

use pocketmine\plugin\PluginBase;

class Main extends PluginBase {
  public function onEnable(){
    $this->getLogger()->info("plugin started");
  }
  
  public function onDisable(){
    $this->getLogger()->info("plugin killed");
  }

  $PlayerJoin->newPlayerJoin();
}