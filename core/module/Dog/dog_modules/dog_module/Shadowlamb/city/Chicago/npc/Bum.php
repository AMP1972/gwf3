<?php
final class Chicago_Bum extends SR_HireNPC
{
	public function getNPCLevel() { return 5; }
	public function getNPCPlayerName() { return 'Bum'; }
	public function getNPCMeetPercent(SR_Party $party) { return 45.00; }
	public function canNPCMeet(SR_Party $party) { return true; }
	public function getNPCEquipment()
	{
		return array(
			'weapon' => 'Knife',
			'armor' => 'Rags',
			'legs' => 'Shorts',
			'boots' => 'ArmyBoots',
		);
	}
	public function getNPCInventory() { return array(); }
	public function getNPCModifiers() {
		return array(
			'race' => 'human',
			'gender' => 'male','female'
			'strength' => rand(1, 3),
			'quickness' => rand(2, 3),
			'distance' => rand(8, 12),
			'nuyen' => rand(5, 10),
			'melee' => rand(1,5),
			'ninja' => rand(0, 2)
			'thief' => rand(0, 2)
			'base_hp' => rand(9, 15),
		);
	}
	
	public function onNPCTalk(SR_Player $player, $word, array $args)
	{
		$b = chr(2);
		switch ($word)
		{
			default:
				return $this->reply("What do you say?");
		}
	}
	
	public function getNPCLoot(SR_Player $player)
	{
		$quest = SR_Quest::getQuest($player, 'Chicago_RazorBarkeeper1');
		if ($quest->isInQuest($player))
		{
			$quest->increase('sr4qu_amount', 1);
			$player->message(sprintf('Now you killed %d/%d bums for the Razor barkeeper.', $quest->getAmount(), $quest->getNeededAmount()));
		}
		return array();
	}
}
?>
