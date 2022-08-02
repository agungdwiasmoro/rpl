
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pages / Login - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.3.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo1.png" alt="">
                  <span class="d-lg-block">R.P.L</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Daftar Akun</h5>
                  </div>

                  <form action="" class="row g-3" method="post" enctype="multipart/form-data" target="_self">

                    <div class="col-12">
                      <label for="username" class="form-label">Username</label>
                      <input type="text" name="username" class="form-control" id="username" required>
                      <div id="uname_response"></div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                        <label for="yourName" class="form-label">Nama Lengkap</label>
                        <input type="text" name="name" id="yourName" class="form-control">
                    </div>

                    <div class="col-12">
                        <label for="cityofBirth" class="form-label">Tempat Lahir</label>
                        <input type="text" name="tmpt_lahir" class="form-control">
                    </div>

                    <div class="col-12">
                        <label for="dateofBirth" class="form-label">Tanggal Lahir</label>
                        <input type="date" name="tgl_lahir" class="form-control">
                    </div>

                    <div class="col-12">
                        <label for="phone" class="form-label">No Telepon</label>
                        <input type="text" name="telepon" class="form-control">
                    </div>

                    <div class="col-12">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" name="email" class="form-control">
                    </div>

                    <div class="col-12">
                        <label for="address" class="form-label">Alamat</label>
                        <textarea name="alamat" id="alamat" class="form-control"></textarea>
                    </div>

                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Daftar</button>
                    </div>
                  </form>
                  <?php
                    if($_SERVER['REQUEST_METHOD'] == "POST"){
                      include 'config/koneksi.php';
                      $username = $_POST['username'];
                      $password = $_POST['password'];
                      $name = $_POST['name'];
                      $tmpt_lahir = $_POST['tmpt_lahir'];
                      $tgl_lahir = $_POST['tgl_lahir'];
                      $no_hp = $_POST['telepon'];
                      $email = $_POST['email'];
                      $alamat = $_POST['alamat'];
                      $level = 'cd002';
                      $status = 'off';

                      $result = mysqli_query($koneksi, "INSERT INTO user (username, password, name, tmpt_lahir, tgl_lahir, alamat, email, no_hp, level, status) values ('$username', '$password', '$name', '$tmpt_lahir', '$tgl_lahir', '$alamat', '$email', '$no_hp', '$level', '$status')");

                      if($result === true){
                        
                      }

                    }


                  ?>

                </div>
              </div>

              <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  
  <script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>
<script type="text/javascript">
$(document).ready(function(){

   $("#username").keyup(function(){

      var username = $(this).val().trim();

      if(username != ''){

         $.ajax({
            url: 'cek.php',
            type: 'post',
            data: {username: username},
            success: function(response){

                $('#uname_response').html(response);

             }
         });
      }else{
         $("#uname_response").html("");
      }

    });

 });
</script>

</body>

</html>