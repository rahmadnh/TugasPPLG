<?php
$username_T = "smkn1ktb@gmail.com";
$password_T = "smkn1ktb";
while (true){
echo "Username: ";
$username = trim(fgets(STDIN));
echo "Password: ";
$password = trim(fgets(STDIN));
if ($username == $username_T &
$password== $password_T) {
  echo "Login Berhasil!!!";
  break;
} else {
  echo "Username Atau Password Salah. Silahkan Coba lagi\n";
}
}
?>