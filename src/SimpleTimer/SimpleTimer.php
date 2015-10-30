<?php

namespace SimpleTimer;

use pocketmine\Server;
use pocketmine\Player;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;

class SimpleTimer extends PluginBase implements Listener{

public function onEnable(){
$this->getServer()->getPluginManager()->registerEvents($this, $this);
}

public function onJoin(PlayerJoinEvent $event){
$player = $event->getPlayer();
$this->getServer()->getScheduler()->scheduleRepeatingTask(new Timer($this, $player), 1 * 20);
}

}
