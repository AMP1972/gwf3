<?php
final class Seattle_Shaolin extends SR_NPC
{
	public function getNPCLevel() { return 12; }
	public function getNPCPlayerName() { return 'Shaolin'; }
	public function getNPCMeetPercent(SR_Party $party) { return 40.00; }
	public function getNPCEquipment()
	{
		return array(
			'weapon' => 'HanBo',
			'armor' => 'StuddedVest',
			'legs' => 'FineLegs',
			'boots' => 'LeatherBoots',
		);
	}
	public function getNPCInventory() { return array('SmallFirstAid'); }
	public function getNPCSpells() { return array('heal'=>0); }
	public function getNPCModifiers() {
		return array(
			'race' => 'halfelve',
			'gender' => 'male',
			'strength' => rand(1, 2),
			'quickness' => rand(3, 6),
			'distance' => rand(2, 8),
			'melee' => rand(1, 5),
			'ninja' => rand(2, 5),
			'sharpshooter' => rand(1, 2),
			'nuyen' => rand(30, 70),
			'base_hp' => rand(3, 8),
			'magic' => rand(1, 2),
			'intelligence' => 4,
			'wisdom' => 2,
			'base_mp' => rand(8, 16),
		);
		
	}
}
?>
