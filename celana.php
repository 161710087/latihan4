<?php
class celana
{
	public $trening;
	public $levis;
	public $boxer;
	public $cd;
	function __construct ($trening, $levis, $boxer, $cd)
	{
		$this->trening = $trening;
		$this->levis= $levis ;
		$this->boxer = $boxer;
		$this->cd =trening;
		
	}
	public function get_trening()
	{
	return $this->trening;
	}
	public function get_levis()
	{
	return $this->levis;
	}
	public function get_boxer()
	{
	return $this->boxer;
	}
	public function get_cd()
	{
	return $this->cd;
	}

}
?>
