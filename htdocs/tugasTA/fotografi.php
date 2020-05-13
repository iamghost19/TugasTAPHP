<?php
class fotografi
{
	public $focal;
	public $aperture;
	public $shutter;
	
	public function fstopperhitungan($focal, $aperture)
	{
		$hasilfstop = $focal/$aperture;
		return $hasilfstop;
	}
	
	public function focalperhitungan($focal, $crop)
	{
		$hasilfocal = $focal * $crop;
		return $hasilfocal;
	}
	
	public function shutterperhitungan($focal)
	{
		$hasilshutter = 1/$focal;
		return $hasilshutter;
	}
	
}
