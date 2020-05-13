<?php
include("fungsi.php");
$pilihan=$_POST['pilihan'];
echo $pilihan;

switch ($pilihan) {
  case "1":
    bukagui_fstopperhitungan();
    break;
  case "2":
    bukagui_focalperhitungan();
    break;
  case "3":
    bukagui_shutterperhitungan();
    break;
}
?>