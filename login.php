<html>
<head><title>Login Page</title></head>
<body>

   <FORM ACTION="" METHOD="POST" > 
   <h2>LOGIN YU BARENG YULIA</h2>
    Email: <input type="text" name="username"><br>
    Password : <input type="password" name="password"><br>
    <input type="submit" name="input" Value="Simpan">
    </FORM>
</body>
</html>

<?php
if (isset($_POST['input'])) {
    $email = $_POST['username'];
    $pass  = $_POST['password'];
    if($email =="yulia" && $pass =="123456"){
      echo "<H2> LOGIN  BERHASIL</H2>";
    } else {
      echo "<H2> LOGIN GAGAL </H2>";
    }
}
?>
