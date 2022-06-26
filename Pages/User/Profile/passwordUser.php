<?php
    session_start();
    if(isset($_SESSION['email'])){
      include("../../../Config/connect.php");
      $email = $_SESSION['email'];

      $query = "SELECT * FROM user WHERE email='$email'";
      $select = mysqli_query($conn,$query);
      $display = mysqli_fetch_assoc($select);
      $name = $display['name'];
      $job = $display['job'];
      $address = $display['address'];

      $queryEvent = "SELECT * FROM event";
      $selectEvent = mysqli_query($conn, $queryEvent);
      $cekEvent = mysqli_num_rows($selectEvent);
    };
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../../Styles/profileAccount.css">
    <link rel="icon" href="https://raw.githubusercontent.com/mahli262/tugas-wad/main/Images/Tubes/logo.png" type="image/icon type">
    <title>Event-Ku</title>
</head>
<body>
    <!-- navbar -->
    <section class="navigation">
        <nav class="header navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
              <a style="color: white;" class="brand navbar-brand" href="../../index.html">Event-Ku</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  
                </ul>
                <div class="d-flex ">
                  <a style="color: white;" href="" class="navbar-brand">
                      <?php echo $name ?>
                      <img src="https://raw.githubusercontent.com/mahli262/tugas-wad/main/Images/Tubes/Ellipse%2016.png" alt="" srcset="" width="50px">
                  </a>
                </div>
              </div>
            </div>
          </nav>
    </section>

    <!-- Content -->
    <section>
        <div class="box">
            <div class="row">
                <h1  style="font-weight: bold; font-size: 26px; color: #407BFF;">Profile</h1>
            </div>
            <div class="row" style="height: auto">
                <div class="col-3">
                    <div class="row bg-new">
                        <a class="unchecked my-2" href="accountUser.php">Account</a>
                    </div>
                    <div class="row">
                        <a class="unchecked my-2" href="myEvent.php">My Event</a>
                    </div>
                    <div class="row">
                        <a class="checked my-2" href="#">Password</a>
                    </div>
                    <div class="row">
                        <a class="unchecked my-2" href="../../../Config/Logout/logout.php">Log out</a>
                    </div>
                </div>

                <div class="col-9" style="background: #FFFFFF;
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.15);
                border-radius: 10px; ">
                    <div style="margin: 40px;">
                        <h2 class="page">Password</h2>
                        <form autocomplete="off" action="../../../Config/Edit Account/editPassUser.php" method="POST">
                            <div >
                              <label for="password" class="form-label">Password</label>
                              <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                            </div>
                            <?php  $error = isset($_GET['error']) ? $_GET['error'] : null; ?>
                            <?php  if (isset($error)) : ?>
                                <p style='text-align: center; color:red'>password salah</p>
                            <?php endif; ?>
                            <div >
                              <label for="newpass" class="form-label">New Password</label>
                              <input type="password" name="newpass" class="form-control" id="newpass" placeholder="New Password">
                            </div>
                            <div >
                              <label for="renewpass" class="form-label">Retype-New Password</label>
                              <input type="password" name="renewpass" class="form-control" id="renewpass" placeholder="Retype-New Password">
                            </div>
                            <?php  $errorNew = isset($_GET['errorNew']) ? $_GET['errorNew'] : null; ?>
                            <?php  if (isset($errorNew)) : ?>
                                <p style='text-align: left; color:red; margin-top: 15px;'>konfirmasi password tidak sesuai</p>
                            <?php endif; ?>
                            <?php  $change = isset($_GET['change']) ? $_GET['change'] : null; ?>
                            <?php  if (isset($change)) : ?>
                                <p style='text-align: left; color:green; margin-top: 15px;'>Password berhasil di rubah</p>
                            <?php endif; ?>
                            <div style="margin-bottom: 20px; margin-top: 35px;" class=" d-flex justify-content-center">
                                <button type="submit" name="submit" id="submit" class="btn btn-primary">Edit Password</button>
                            </div>
                            <div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </section>

    <section style="bottom: 0;width: 100%; margin-top: 100px;">
        <footer style="background-color: #407BFF;" class="navbar">
            <div class="mx-auto">
              <p style="margin: 10px;">
                Copyright ©2021 Event-Ku
              </p>
            </div>
        </footer>
    </section>
</body>
</html>