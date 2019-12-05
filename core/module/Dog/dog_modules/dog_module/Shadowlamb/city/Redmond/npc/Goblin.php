<?php
final class Redmond_Goblin extends SR_NPC
{
	public function getNPCLevel() { return 5; }
	public function getNPCPlayerName() { return 'Goblin'; }
	public function canNPCMeet(SR_Party $party) { return true; }
	public function getNPCMeetPercent(SR_Party $party) { return 60.00; }
	
	public function getNPCModifiers()
	{
		return array(
			'race' => 'gnome',
			'strength' => rand(0, 1),
			'quickness' => rand(2, 5),
			'base_hp' => rand(1, 4),
			'distance' => rand(1, 3),
			'melee' => rand(1, 4),
			'nuyen' => rand(10, 40),
		);
	}
	
	public function getNPCEquipment()
	{
		return array(
			'weapon' => array('IronPipe','Stiletto'),
			'armor' => 'LeatherVest',
			'boots' => 'Boots',
			'helmet' => 'Cap',
			'legs' => 'Shorts',
		);
	}

	public function getNPCLoot(SR_Player $player)
	{
		$quest = SR_Quest::getQuest($player, 'Redmond_Blacksmith');
		if ($quest->isInQuest($player))
		{
			if (rand(0,2) === 0)
			{
				return array('SmithHammer');
			}
		}
		return array();
	}
}
?>
