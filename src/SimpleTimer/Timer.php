<?php

namespace SimpleTimer;

use pocketmine\scheduler\PluginTask;
use pocketmine\Server;
use pocketmine\utils\TextFormat;
use SimpleTimer\SimpleTimer;

class MessageTask extends PluginTask{
const TIMER = 1000;

    public function __construct(SimpleTimer $plugin, $player){
        parent::__construct($plugin);
        $this->plugin = $plugin;
        $this->player = $player;
        $this->timer = Timer::TIMER;
    }

    public function onRun($currentTick, $this->player){
      $timea = substr($this->timer, 1);
      $timeb = substr($this->timer, 2, 3);
      
        $this->getOwner();
        $this->player->sendMessage(TextFormat::GREEN."Time:" . $timea . ":" . $timeb . "");
        $this->timer--;
        if($this->timer == 0){
$this->player->sendMessage(TextFormat::RED."BYE");
$this->player-kick();
        }
    }

}
