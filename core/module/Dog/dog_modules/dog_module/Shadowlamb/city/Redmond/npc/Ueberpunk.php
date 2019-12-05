<?php
final class Redmond_Ueberpunk extends SR_NPC
{
	public function getNPCPlayerName() { return 'Ueberpunk'; }
	public function getNPCLevel() { return 9; }
	public function getNPCMeetPercent(SR_Party $party) { return 10.00; }
	public function canNPCMeet(SR_Party $party) { return true; }

	public function getNPCEquipment()
	{
		return array(
			'weapon' => 'AresPredator',
			'armor' => 'StuddedVest',
			'legs' => 'Shorts',
			'boots' => 'Sneakers',
		);
	}
	public function getNPCInventory() { return array('FirstAid', 'Ammo_9mm'); }
	public function getNPCModifiers() {
		return array(
			'nuyen' => rand(40, 80),
			'base_hp' => rand(8, 12),
			'strength' => rand(2, 4),
			'quickness' => rand(2, 5),
			'distance' => rand(8, 10),
			'firearms' => rand(1, 5),
			'pistols' => rand(2, 5),
		);
	}
	
	public function getNPCLoot(SR_Player $player)
	{
		$back = array();
		
		# Free scroll
		$key = 'RED_FIR_UBER';
		if ('0' === SR_PlayerVar::getVal($player, $key, '0'))
		{
			SR_PlayerVar::setVal($player, $key, '1');
			$back[] = 'ScrollOfWisdom';
		}
		
		# Free head
		$quest = SR_Quest::getQuest($player, 'Redmond_Ueberpunk');
		if ( ($quest->isInQuest($player)) && (false === $player->getInvItemByName('UeberpunkHead')) )
		{
			$back[] = 'UeberpunkHead';
		}
		
		return $back;
	}
	
}
?>
