<?php 
include 'config/koneksi.php';
if(isset($_POST['username'])){
   $username = $_POST['username'];

   $query = "select count(*) as cntUser from user where username='".$username."'";

   $result = mysqli_query($koneksi, $query);
   $response = "<span style='color: green;'>Username Belum Digunakan.</span>";
   if(mysqli_num_rows($result)){
      $row = mysqli_fetch_array($result);

      $count = $row['cntUser'];
    
      if($count > 0){
          $response = "<span style='color: red;'>Username Sudah Digunakan.</span>";
      }
   
   }

   echo $response;
   die;
}
?>