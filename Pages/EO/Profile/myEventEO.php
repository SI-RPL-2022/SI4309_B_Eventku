<?php
    session_start();
    if(isset($_SESSION['email'])){
      include("../../../Config/connect.php");
      $email = $_SESSION['email'];

      $query = "SELECT * FROM eo WHERE email='$email'";
      $select = mysqli_query($conn,$query);
      $display = mysqli_fetch_assoc($select);
      $nama = $display['name'];

      $queryEvent = "SELECT * FROM event WHERE eo='$email'";
      $selectEvent = mysqli_query($conn, $queryEvent);
      $cekEvent = mysqli_num_rows($selectEvent);
      
      // $displayEvent = mysqli_fetch_assocc($select);
      // $imageEvent = $displayEvent['image'];
      // $titleEvent = $displayEvent['title'];
      // $dateEvent = $displayEvent['date'];

      
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
              <a style="color: white;" class="brand navbar-brand" href="#">Event-Ku</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  
                </ul>
                <div class="d-flex ">
                  <a style="color: white;" href="accountEO.php" class="navbar-brand">
                  <?php echo $nama;?>
                  <!-- <?php echo $cekEvent; ?> -->
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
                        <a class="unchecked my-2" href="accountEO.php">Account</a>
                    </div>
                    <div class="row">
                        <a class="checked my-2" href="#">My Event</a>
                    </div>
                    <div class="row">
                        <a class="unchecked my-2" href="passwordEO.php">Password</a>
                    </div>
                    <div class="row">
                        <a class="unchecked my-2" href="../../../Config/Logout/logout.php">Log out</a>
                    </div>
                </div>

                <div class="col-9" style="background: #FFFFFF;
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.15);
                border-radius: 10px; ">
                    <div style="margin: 40px;">
                        <h2 class="page">My Event</h2>
                        <div>
                            <a class="btn btn-primary" style="width: 25%" href="../addEvent.php" role="button">+New Event</a>
                          </div>
                        <div class="row">
                            <!-- <div class="col my-2 mx-1" style="max-width: 266px;">
                            <div class="card" style="
                            width: 256px;
                            max-width: 256px;
                            height: 444px;
                            max-height: 444px;
                            background: #FFFFFF;
                            box-shadow: 0px 0px 20px rgba(100, 100, 100, 0.15);
                            border-radius: 10px;
                            ">
                              <img src="https://www.vibesofindia.com/wp-content/uploads/2021/09/covid-19-vaccination-1500-991-2.jpg" class="card-img-top" alt="..." style="
                              height: 256px;
                              width: 256px;
                              max-width: 256px;
                              ">
                              <div class="card-body" style="padding-bottom: 0%">
                                <h5 class="card-title">Suntik Masal</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Monday 7 am</h6>
                              </div>
                              <div class="card-body">
                                <a class="btn btn-primary" style="width: 100%" href="detailEventEO.html" role="button">Details</a>
                              </div>
                            </div>
                        </div> -->
                              <?php 
                              if ($cekEvent>0) { ?>
                              <?php 
                                while($view = mysqli_fetch_assoc($selectEvent)) {  ?>
                                  <div class="col my-2 mx-1" style="max-width: 266px;">
                                  <div class="card" style="
                                  width: 256px;
                                  max-width: 256px;
                                  height: 444px;
                                  max-height: 444px;
                                  background: #FFFFFF;
                                  box-shadow: 0px 0px 20px rgba(100, 100, 100, 0.15);
                                  border-radius: 10px;
                                  ">
                                  <?php $imageEvent = isset($view['image']) ? $view['image'] : null; ?>
                                  <?php 
                                  if ($imageEvent == $view['image']){
                                    echo '<img src="';$view['image'];'" class="card-img-top" alt="..." style="
                                    height: 266px;
                                    width: 266px;
                                    max-width: 266px;
                                    ">';
                                  } else{
                                    echo '<img src="https://raw.githubusercontent.com/mahli262/tugas-wad/main/Images/Tubes/Group%2071.png" class="card-img-top" alt="..." style="
                                    height: 266px;
                                    width: 266px;
                                    max-width: 266px;
                                    ">';
                                  }
                                  ?>
                                    <!-- <img src="https://www.vibesofindia.com/wp-content/uploads/2021/09/covid-19-vaccination-1500-991-2.jpg" class="card-img-top" alt="..." style="
                                    height: 266px;
                                    width: 266px;
                                    max-width: 266px;
                                    "> -->
                                    <div class="card-body" style="padding-bottom: 0%">
                                      <h5 class="card-title"><?php echo $view['title'] ?></h5>
                                      <h6 class="card-subtitle mb-2 text-muted"><?php echo $view['date'] ?></h6>
                                    </div>
                                    <div class="card-body">
                                      <a class="btn btn-primary" style="width: 100%" href="Profile/detailEventUser.html" role="button">Details</a>
                                    </div>
                                  </div>
                              </div>

                                <?php //close while
                                }; ?> 
                                
                                <?php //close if
                              } else {?>
                                <p></p>
                              <?php }?>
                        </div>
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