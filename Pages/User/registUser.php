

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../../Styles/login.css">
    <link rel="icon" href="https://raw.githubusercontent.com/mahli262/tugas-wad/main/Images/Tubes/logo.png" type="image/icon type">

    <title>Login - Event-Ku</title>
</head>
<body>
    <section>
        <nav class="navbar navbar-expand-md navbar-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="../../index.php">Event-Ku</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            </div>
          </nav>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <!-- <div  class="col-1">
                </div> -->
                <div class="col-6  d-flex justify-content-center align-self-center" >

                    <img src="https://github.com/mahli262/tugas-wad/blob/main/W6/login.png?raw=true" alt="" width="493px" height="493px">
                </div>
                <!-- <div class="col-1">
                </div> -->
                <div class="col-6" style="padding-top: 0px; padding-left: 20px;">
                    <h1>Lets get started!</h1>
                    <div class="extra">
                        <p style="text-align: justify; color: #808080; font-size: 16px;">already have an account?<a style="font-weight: 600; text-decoration: none;" href="../loginAs.html">Login</a></p>
                    </div>
                    <!-- <p>sign in to use more features</p> -->
                    <form autocomplete="off" action="../../Config/Regist/registUser.php" method="POST" >
                        <div >
                          <label for="name" class="form-label" style="margin-top: 15px;">Name</label>
                          <input type="text" name="name" class="form-control" id="name" placeholder="Name">
                        </div>
                        <div >
                          <label for="email" class="form-label" style="margin-top: 15px;">Email</label>
                          <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                        </div>
                        <?php  $erroremail = (isset($_GET['erroremail']) ? $_GET['erroremail'] : null); ?>
                        <?php echo $erroremail ?>
                        <?php  if ($erroremail != null) { ?>
                            <p style='text-align: center; color:red'>email sudah terdaftar</p>
                            <?php $erroremail = null ?>
                        <?php }
                        else{
                          echo "lanjut";
                        }; ?>
                        <div>
                          <label for="address" class="form-label" style="margin-top: 15px;">Address</label>
                          <input type="text" name="address" class="form-control" id="address" placeholder="Address">
                        </div>
                        <div >
                          <label for="job" class="form-label" style="margin-top: 15px;">Job</label>
                          <input type="text" name="job" class="form-control" id="job" placeholder="Job">
                        </div>
                        <div >
                          <label for="password" class="form-label" style="margin-top: 15px;">Password</label>
                          <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                        </div>
                        <div >
                          <label for="Cpassword" class="form-label" style="margin-top: 15px;">Confirm Password</label>
                          <input type="password" name="Cpassword" class="form-control" id="Cpassword" placeholder="Confirm Password">
                        </div>
                        <?php  $error = isset($_GET['error']) ? $_GET['error'] : null; ?>
                        <?php  if (isset($error)) { ?>
                            <p style='text-align: left; color:red; margin-top: 15px;'>konfirmasi password tidak sesuai</p>
                        <?php }; ?>
                        <div style="margin-bottom: 20px; margin-top: 35px;" class=" d-flex justify-content-center">
                            <button type="submit" name="submit" id="submit" class="btn btn-primary">Sign Up</button>
                        </div>
                        <div>
                        </div>
                    </form>
                    <!-- <div class="extra">
                        <p style="text-align: center; color: #808080; font-size: 16px;">don't have any account? <a style="font-weight: 600; text-decoration: none;" href="../registAs.html">Click here</a></p>
                    </div> -->
                      
                </div>
            </div>
        </div>
    </section>
</body>
</html>