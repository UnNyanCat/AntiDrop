<?php

namespace antidrop;

use pocketmine\event\Listener;

use pocketmine\event\player\PlayerDropItemEvent;

use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener {
	public function onEnable()
	{
		$this->getLogger()->notice("[ Anti Drop ] activé ! - Par UnNyanCat");
	}

	public function onDisable()
	{
		$this->getLogger()->notice("[ Anti Drop ] désactivé - Par UnNyanCat");
	}

	public function onDrop(PlayerDropItemEvent $event){
		$player = $event->getPlayer();
		$item = $event->getItem();

		$item1 = $event->getItem();

		if($item->getId() == 1){
			$event->setCancelled(true);
			$player->sendMessage("Vous ne pouvez pas lancer l'objet : item1");
			$player->sendMessage("You can't drop item : $item1");
		}
	}
}