<?php
    function Luas_Lingkaran ($jari) {
    return 3.14*$jari*$jari;
  }
   //pemanggilan fungsi
    $r = 10;
    echo "Luas lingkaran dengan jari-jari $r = ";
    echo Luas_Lingkaran($r);
?>