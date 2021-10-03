<?
namespace Survilia\event;

use pocketmine\event\PlayerJoinEvent;
use pocketmine\evnt\Listener;

class PlayerJoin implements Listener{
  $this->getServer()->getPluginManager()->registerEvents($this, $this);

  public function newPlayerJoin $event){
    $player = $event->getPlayer();
    $player->setJoinMessage(" ");

    if(!$players->hasPlayedBefore()){
      $player->sendMessage("Bienvenue à toi ".$player->getName());
    }
  }
}
