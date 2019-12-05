<?php
final class Redmond_ToughGuy extends SR_NPC
{
	public function getNPCLevel() { return 4; }
	public function getNPCPlayerName() { return 'Tough Guy'; }
	public function getNPCMeetPercent(SR_Party $party) { return 50.00; }
	public function canNPCMeet(SR_Party $party) { return true; }
	public function getNPCLoot(SR_Player $player) { return array(); }
	public function getNPCEquipment()
	{
		return array(
			'weapon' => array('BaseballBat', 'IronPipe'),
			'armor' => 'LeatherVest',
			'legs' => 'Trousers',
			'boots' => array('Sneakers', 'ElvenBoots'),
		);
	}
	public function getNPCInventory() { return array(); }
	public function getNPCModifiers() {
		return array(
			'nuyen' => rand(30, 40),
			'base_hp' => rand(-1, 1),
			'distance' => rand(0, 2),
			'melee' => rand(0, 5),
		);
	}
	
}
?>
