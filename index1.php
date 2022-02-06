<?php @session_start();
 
if (ISSET($_SESSION['NAMA_ADMIN']))
 {
 echo "Login Berhasil.."."<br />";
 echo "Anda Login Sebagai"." : ".$_SESSION['NAMA_ADMIN']."<br />";
 echo "<a href='login.php'>Logout</a>"."<br />";
 }
else
 {
 unset($_SESSION['NAMA_ADMIN']);
 echo "<script type='text/javascript'>alert('Silahkan Login dahulu!');document.location='login.php'</script>";
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/logo.jpg" />
    <link rel="icon" type="image/jpg" href="assets/img/favicon1.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Login Sistem</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="assets/css/main.css">

</head>
<body>
  <div class="container">
      <div class="row">
          <div class="col-sm-6 col-md-4 col-md-offset-4">
              <h1 class="text-center login-title">Minimarket Mitra Jaya</h1>
              <div class="account-wall">
                  <img class="profile-img" src="assets/img/logo.jpg"
                      alt="">
            <div class="text-center">          
            
            
            </div>
                  <form class="form-signin" method="post" action="proses_log.php">
                    <input type="text" class="form-control" name="NAMA_ADMIN" placeholder="Username" required autofocus>
                    <input type="PASSWORD" class="form-control" name="password" placeholder="Password" required>
                    <button class="btn btn-lg btn-success btn-block" type="submit" name="submit">
                        Masuk</button>
                    
                  </form>
              </div>
          </div>
      </div>
  </div>
</body>
</html>
</table>
</form>
</center>
</body>
</html>