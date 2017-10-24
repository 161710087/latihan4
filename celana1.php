<?php
require_once 'celana.php';

$siswa = new siswa('trening', 'levis', 'boxer', 'cd');

echo "celana olahraga........ ".$organisasi->get_trening(). "<br>";
echo "celana bermain..... ".$organisasi->get_levis(). "<br>";
echo "celana petinju.. ".$organisasi->get_boxer()."<br>";
echo "celana dalam. ".$organisasi->get_cd();
?>