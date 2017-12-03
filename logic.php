<?php


//$data = before('@','biohazard@online.ge');
$string = "biohazard123@online.ge";
$data = strtok($string, '@');
echo $data; exit();

$data = 11;

echo $data %2 == 0 ? 'sepuluh ' : 'bukan';



?>