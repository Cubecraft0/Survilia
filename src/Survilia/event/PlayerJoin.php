<?
namespace Survilia\event;

use pocketmine\event\PlayerJoinEvent;
use pocketmine\evnt\Listener;

class PlayerJoin implements Listener{

  public function newPlayerJoin(PlayerJoinEvent $event){
    $player = $event->getPlayer();
    $player->setJoinMessage(" ");

    if(!$players->hasPlayedBefore()){
      $player->sendMessage("Bienvenue à toi ".$player->getName());
    }
  }
}
