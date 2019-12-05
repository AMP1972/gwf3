<?php
final class Redmond_Cyberpunk extends SR_NPC
{
	public function getNPCLevel() { return 4; }
	public function getNPCPlayerName() { return 'Punk'; }
	public function getNPCMeetPercent(SR_Party $party) { return 50.00; }
	public function getNPCEquipment()
	{
		return array(
			'weapon' => array('BaseballBat', 'IronPipe', 'Club', 'Stiletto', 'WoodNunchaku'),
			'armor' => 'LeatherVest',
			'legs' => 'Shorts',
			'boots' => array('Sneakers', 'Boots'),
		);
	}
	public function getNPCModifiers() {
		return array(
			'nuyen' => rand(20, 30),
			'base_hp' => rand(0, 3),
			'melee' => rand(0, 4),
			'strength' => rand(2, 3),
			'quickness' => rand(2, 6),
			'distance' => rand(0, 2),
		);
	}
	
	public function getNPCLoot(SR_Player $player)
	{
		$quest = SR_Quest::getQuest($player, 'Redmond_Punks');
		if ($quest->isInQuest($player))
		{
			$quest->onKilledPunk($player);
		}
		
		$quest = SR_Quest::getQuest($player, 'Redmond_AresDwarf_II');
		if ($quest->isInQuest($player))
		{
			return array('PunkScalp');
		}
		
		return array();
	}
	
}
?>
