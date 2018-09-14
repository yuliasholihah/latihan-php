<html>
<head><title>Sistem Raport Sederhana</title></head>
<body>
      <FORM ACTION="prosestugasyul.php" METHOD="POST" NAME="input"> 
      <center> <h2>SISTEM RAPORT SEDERHANA</h2> </center>
      <center>
      <table>
      <tr>
      <td>Nama</td>
      <td>:</td>
      <td><input type="text" name="nama" size=30/></td>
      </tr>
       
      <tr>
      <td>NIS</td>
      <td>:</td>
      <td><input type="number" name="NIS" size=30/></td>
      </tr>

      <tr>
      <td>Alamat</td>
      <td>:</td>
      <td><textarea name="alamat" cols="40" rows="5"></textarea></td>
      </tr>
      
      <tr>
      <td>Jenis Kelamin</td>
      <td>:</td>
      <td><input type="radio" name="jeniskelamin" value="Laki Laki" checked>Laki Laki</td>
      <td><input type="radio" name="jeniskelamin" value="Perempuan" >Perempuan</td>
      </tr>
     
      <tr>
      <td>Agama</td>
      <td>:</td>
      <td>
      <select name="agama">
           <option value="Islam">Islam</option> 
           <option value="Kristen">Kristen</option> 
           <option value="Hindu">Hindu</option> 
           <option value="Budha">Budha</option> 
      </select>
      </td>
      </tr>
      
      <tr>
      <td>Asal Sekolah</td>
      <td>:</td>
      <td><input type="text" name="asalsekolah" size=30/></td>
      </tr>

      <tr>
      <td>Nama Orangtua atau Wali</td>
      <td>:</td>
      <td><input type="text" name="nama orangtua atau wali" size=30/></td>
      </tr>

      <tr>
      <td>Mata Pelajaran Yang Disukai</td>
      <td>:</td>
      <td>
           <input type="checkbox" name="mapel1" value="Bahasa Indonesia" checked>Bahasa Indonesia
           <input type="checkbox" name="mapel2" value="Bahasa Sunda">Bahasa Sunda
           <input type="checkbox" name="mapel3" value="Kewirausahaan" >Kewirausahaan <br>
           <input type="checkbox" name="mapel4" value="Matematika" >Matematika
           <input type="checkbox" name="mapel5" value="Pemrograman" >Pemrograman
      </td>
      </tr>

      <tr>
      <td>Email</td>
      <td>:</td>
      <td><input type="text" name="email" size=30/></td>
      </tr>

      <tr>
      <td>Masukan Nilai Ijazah SD Anda</td>
      <td>:</td>
      <td><input type="text" name="Nilai Ijazah" size=30/></td>
      </tr>
      
     
     <tr>
     <td>&nbsp</td>
     <td>&nbsp</td>
     <td><input type="submit" name="Proses" Value=" Silahkan Input"></td>
     </tr>

        </table>
      </center>
   </FORM>
 </body>
</html>