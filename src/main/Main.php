<?php

namespace main;

use pocketmine\plugin\Plugin;

class Main extends Plugin {
  public function onEnable(){
    $this->getLogger()->info("plugin started");
  }
  
  public function onDisable(){
    $this->getLogger()->info("plugin killed");
  }
}