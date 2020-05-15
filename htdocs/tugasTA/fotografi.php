<?php
class fotografi
{
	public $focal;
	public $aperture;
	public $shutter;
	
	public function perhitunganfstop($focal, $aperture)
	{	
		$hasilfstop = $focal/$aperture;
		return $hasilfstop;
	}
	
	public function perhitunganfocal($focal, $crop)
	{
		$hasilfocal = $focal * $crop;
		return $hasilfocal;
	}
	
	public function perhitunganshutter($focal)
	{
		$hasilshutter = 1/$focal;
		return $hasilshutter;
	}
	
}
