<?php @session_start();
unset($_SESSION['anggi_930']);
if (ISSET($_SESSION['anggi_930']))
 {
  header ("location:admin/index1.php");
 }
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link rel="icon" type="image/png" href="http://localhost/spp-master-master/assets/img/favicon.ico" />

    <link href="http://localhost/spp-master-master/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="http://localhost/spp-master-master/assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-lg-5">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">

                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 ">Aplikasi e-SPP</h1>
                                        <h1 class="h4 text-gray-900 mb-4">Login</h1>

      <h3>Aplikasi Pembayaran SPP</h3>
      
                                    </div>
                                    <form class="form-signin" method="post" action="proseslogin.php">
                                         <div class="form-group">
                                            <input type="text" class="form-control " name="NAMA_ADMIN" placeholder="Enter Username..." required autofocus>
                                                                                    </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control " name="NO_HP" placeholder="Enter Password..." required >                                           
                           </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block" name="submit">

                                            Login
                                        </button>
                                    </form>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="http://localhost/spp-master-master/assets/vendor/jquery/jquery.min.js"></script>
    <script src="http://localhost/spp-master-master/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="http://localhost/spp-master-master/assets/vendor/jquery-easing/jquery.easing.min.js"></script>


    <script src="http://localhost/spp-master-master/assets/js/sb-admin-2.min.js"></script>

</body>

</html>