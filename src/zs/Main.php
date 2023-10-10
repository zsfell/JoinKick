<?php

namespace zs;

use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\Listener;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener {

    public function onEnable():void {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    // public function onPlayerJoin(PlayerJoinEvent $event) {
    //     $player = $event->getPlayer();
    //     $playerName = $player->getName();

    //     if ($playerName === "Soapers33") {
    //         $player->kick("Gaboleh");
    //     }
    // }
}