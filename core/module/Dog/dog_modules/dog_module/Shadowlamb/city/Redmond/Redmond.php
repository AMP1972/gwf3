<?php
final class Redmond extends SR_City
{
	const TIME_TO_SEATTLE = 120;
	const TIME_TO_VEGAS = 1200;
	public function getArriveText(SR_Player $player) { return 'You arrive at Redmond. Home sweet home.'; }
	public function getSquareKM() { return 6; }
//	public function getExploreTime() { return 180; }
	public function getMinLevel() { return 0; }

	public function getImportNPCS() { return array('Seattle_BlackOp'); }
	
	public function onEvents(SR_Party $party)
	{
		$this->onEventWallet($party);
		return false;
	}
	
	public function onEventWallet(SR_Party $party)
	{
		foreach ($party->getMembers() as $member)
		{
			$member instanceof SR_Player;
			if ($member->isHuman())
			{
				$percent = 0.05;
				$luck = $member->get('luck');
				$percent += $luck / 200;
				if (Shadowfunc::dicePercent($percent))
				{
					$nuyen = rand(15, 60);
					$member->message(sprintf('You found a wallet with %s in it.', Shadowfunc::displayNuyen($nuyen)));
					$member->giveNuyen($nuyen);
				}
			}
		}
	}
}
?>
