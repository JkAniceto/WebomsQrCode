<?php
  $page = 'notLogin';
  $isFromLogin = true;
  include('../method/checkIfAccountLoggedIn.php');
  include('../method/query.php');
  include_once('connection.php');
  $query = "select * from weboms_company_tb";
  $resultSet = getQuery2($query);
  if($resultSet!=null){
      foreach($resultSet as $row){
          $name = $row['name'];
          $address = $row['address'];
          $tel = $row['tel'];
          $description = $row['description'];
      }
  }
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code Page</title>

    <link rel="stylesheet" href="../css/bootstrap 5/bootstrap.min.css">
    <link rel="stylesheet" href="../css/admin.css">
    <script type="text/javascript" src="../js/bootstrap 5/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/jquery-3.6.1.min.js"></script>
    <!-- online css bootsrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
<style>

    body{
      margin: 0px;
      padding: 0px;
      background-color: #3C4048;
    }
      .mobileapk{
        border: 10px solid black;
        margin-left: 270px;
        width: 25%;
        float: left;
        margin-top: 20px;
      }
      @media (max-width: 768px) {
        .mobileapk {
        margin-left: 0;
        width: 100%;
        float: none;
  }
}
      .register{
        border: 10px solid black;
        margin-right: 270px;
        width: 25%;
        float: right;
        margin-top: 20px;
      }
      @media (max-width: 768px) {
        .register {
        margin-left: 0;
        width: 100%;
        float: none;
  }
}
      .text1 {
        position: absolute;
        bottom: 200px;
        left: 12%;
}
      .text2 {
       position: absolute;
       bottom: 200px;
       right: 14%;
}
@media (max-width: 768px) {
  .text1, .text2 {
    position: static;
    text-align: center;
    margin-top: 20px;
  }
}
    </style>
  </head>

    <body class="bg-dark">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
              <div class="container py-3">
                  <a class="navbar-brand fs-4" href="#"><?php echo $name;?></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                      <li class="nav-item me-2"><a class="nav-link" href="../index.php#home"><i class="bi bi-house-door"></i> HOME</a></li>
                      <li class="nav-item me-2"><a class="nav-link" href="../index.php#menu"><i class="bi bi-book"></i> MENU</a></li>
                      <li class="nav-item me-2"><a class="nav-link" href="../index.php#about"><i class="bi bi-info-circle"></i> ABOUT</a></li>
                      <li class="nav-item me-2"><a class="nav-link" href="ordersQueue.php" ><i class="bi bi-hourglass-split"></i> Orders Queue</a></li>
                      <li class="nav-item me-2"><a class="nav-link" href="ordersQueueOnline.php"><i class="bi bi-hourglass-split"></i> Orders Queue Online</a></li>
                      <li class="nav-item me-2"><a class="nav-link" ><i class="bi bi-qr-code-scan"></i> Qr Code Page</a></li>
                  </ul>
                  <a class="btn btn-outline-light" type="button" href="login.php"><i class="bi bi-person-circle"></i> LOGIN</a>
              </div>
          </div>
      </nav>

      <h1 align = "center" style="color: white;"> QR CODE PAGE</h1>
     <div class="">
       <!-- MOBILE QR CODE -->
       <img class="mobileapk"src="mobileapk.jpg">
       <h2 class="text1" style="color:white;"> Scan this QR code for a mobile application. </h2>
     </div>
     <div class="">
          <!-- REGISTER QR CODE -->
          <img class="register"src="registerqr.jpg">
           <h2 class="text2" style="color:white;"> Scan this QR code for registration.</h2>
     </div>
  </body>
</html>
