<?php
$carolnome= "Carollayne";
$carolpeso= 63;
$carolaltura= 1.61;
$carolimc= number_format($carolpeso/($carolaltura* $carolaltura), 2, ',','.');

echo "$carolnome seu IMC é de: $carolimc"
?>
