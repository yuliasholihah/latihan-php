<?php
    function Tambah_string ($str) {
       $str = $str . ", Jakarta";
       return $str;
    }
    //
       $str = "Universitas Budi Luhur";
       echo "\$str = $str<br>";
       echo Tambah_string ($str). "<br>";
       echo "\$str = $str<br>";
?>