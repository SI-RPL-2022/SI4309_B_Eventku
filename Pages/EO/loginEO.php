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
              <a class="navbar-brand" href="../index.html">Event-Ku</a>
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
                <div class="col-6  d-flex justify-content-center" >

                    <img src="https://github.com/mahli262/tugas-wad/blob/main/W6/login.png?raw=true" alt="" width="493px">
                </div>
                <!-- <div class="col-1">
                </div> -->
                <div class="col-6" style="padding-top: 51px; padding-left: 20px;">
                    <h1>Welcome to Event-Ku!</h1>
                    <p>sign in to use more features</p>
                    <form autocomplete="off" action="#" method="POST">
                        <div >
                          <label for="email" class="form-label">Email</label>
                          <input type="text" name="email" class="form-control" id="email" placeholder="email">
                        </div>
                        <div >
                          <label for="password" class="form-label">Password</label>
                          <input type="password" name="password" class="form-control" id="password" placeholder="password">
                        </div>
                        <div style="margin-bottom: 20px; margin-top: 35px;" class=" d-flex justify-content-center">
                            <a href="Profile/accountEO.html" type="submit" name="submit" id="submit" class="btn btn-primary">Login</a>
                        </div>
                        <div>
                        </div>
                    </form>
                    <div class="extra">
                        <p style="text-align: center; color: #808080; font-size: 16px;">don't have any account? <a style="font-weight: 600; text-decoration: none;" href="../registAs.html">Click here</a></p>
                    </div>
                      
                </div>
            </div>
        </div>
    </section>
</body>
</html>