<?php
if (isset($_POST['Proses'])) {
    $nama = $_POST['nama'];
    $NIS = $_POST['NIS'];
    $alamat = $_POST['alamat'];
    $jeniskelamin = $_POST['jeniskelamin'];
    $agama = $_POST['agama'];
    $asal_sekolah= $_POST['asalsekolah'];
    $nama_orangtua_atau_wali= $_POST['nama orangtua atau wali'];
    $Mata_Pelajaran_Yang_Disukai= $_POST['Mata Pelajaran Yang Disukai'];
    $email= $_POST['email'];
    $Masukan_Nilai_Ijazah_SD_Anda = $_POST['Nilai Ijazah'];

    echo "nama : <b>$nama</b><br>";
    echo "NIS : <b>$NIS</b><br>";
    echo "alamat : <b>$alamat</b><br>";
    echo "jeniskelamin : <b>$jeniskelamin</b><br>";
    echo "agama : <b>$agama</b><br>";
    echo "asalsekolah : <b>$asal_sekolah</b><br>";
    echo "nama orangtua atau wali : <b>$nama_orangtua_atau_wali</b><br>";
    echo "email : <b>$email</b><br>";
    echo "Masukan Nilai Ijazah SD Anda : <b>$Masukan_Nilai_Ijazah_SD_Anda</b><br>";

    echo "Pelajaran yang Anda Sukai :";
    if (isset($_POST['mapel1'])) {
        echo"#" .$_POST['mapel1'] . "<br>";
      }
    if (isset($_POST['mapel2'])) {
        echo"#" .$_POST['mapel2'] . "<br>";
      }
    if (isset($_POST['mapel3'])) {
        echo"#" .$_POST['mapel3'] . "<br>";
    }
    if (isset($_POST['mapel4'])) {
        echo"#" .$_POST['mapel4'] . "<br>";
      }
    if (isset($_POST['mapel5'])) {
        echo"#" .$_POST['mapel5'] . "<br>";
      }

    if ($Masukan_Nilai_Ijazah_SD_Anda>=25) {
        echo "Nilai Anda : <b>$Masukan_Nilai_Ijazah_SD_Anda</b> (Anda berhasil) <br> ";
    } 
    if($Masukan_Nilai_Ijazah_SD_Anda<25){
        echo "Nilai Anda : <b>$Masukan_Nilai_Ijazah_SD_Anda<b> (Anda Gagal) <br>";
    }
}
