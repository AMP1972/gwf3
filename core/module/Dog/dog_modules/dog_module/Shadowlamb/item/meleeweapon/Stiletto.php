<?php
final class Item_Stiletto extends SR_MeleeWeapon
{
	public function getAttackTime() { return 29; }
	public function getItemLevel() { return 2; }
	public function getItemWeight() { return 280; }
	public function getItemPrice() { return 125; }
	public function getItemRange() { return 0.9; }
	public function getItemDescription() { return 'A slim, cheap blade preferred by punks & criminals. Actually not made for combat.'; }
	public function getItemModifiersA(SR_Player $player)
	{
		return array(
			'attack' => 2.0, 
			'min_dmg' => 2.0,
			'max_dmg' => 6.5,
		);
	}
}
