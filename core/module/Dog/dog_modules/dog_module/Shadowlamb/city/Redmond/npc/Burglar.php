<?php
final class Redmond_Burglar extends SR_NPC
{
	public function getNPCLevel() { return 3; }
	public function getNPCPlayerName() { return 'Burglar'; }
	public function getNPCMeetPercent(SR_Party $party) { return 50.00; }
	public function canNPCMeet(SR_Party $party) { return true; }
	public function getNPCLoot(SR_Player $player) { return array(); }
	public function getNPCEquipment()
	{
		return array(
			'weapon' => array('HanBo'),
		);
	}
	public function getNPCInventory() { return array(); }
	public function getNPCModifiers() {
		return array(
			'nuyen' => rand(50, 80),
			'base_hp' => rand(-4, -2),
			'ninja' => rand(0, 2),
			'strength' => 2,
		);
	}
	public function getNPCModifiersB()
	{
		return array(
			'min_dmg' => 0,
			'max_dmg' => 1.5,
		);
	}
	
}
?>
