<?php
    if (isset($_POST['Pilih'])) {
       $film = $_POST['kartun'];
       echo "Film Kartun Favorit Anda adalah :
      <font color=purple><b>$film</b></font>";
    }
?>