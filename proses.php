<?php
include 'config/koneksi.php';

$username = mysql_real_escape_string($_POST['username']);
						$password = mysql_real_escape_string($_POST['password']);
            $name = mysql_real_escape_string($_POST['name']);
            $tmpt_lahir = mysql_real_escape_string($_POST['tmpt_lahir']);
            $tgl_lahir = mysql_real_escape_string($_POST['tgl_lahir']);
            $no_hp = mysql_real_escape_string($_POST['telepon']);
            $email = mysql_real_escape_string($_POST['email']);
            $alamat = mysql_real_escape_string($_POST['alamat']);
            $level = 'cd002';
            $status = 'off';

			$query = "INSERT INTO user (user_id, username, password, name, tmpt_lahir, tgl_lahir, alamat, email, no_hp, level, status) VALUES ('', '$username', '$password', '$name', '$tmpt_lahir', '$tgl_lahir', '$alamat', '$email', $no_hp', '$level', '$status')";
            $result = mysqli_query($koneksi, $query);
?>