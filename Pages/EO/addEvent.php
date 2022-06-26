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
    <link rel="stylesheet" href="../../Styles/addEvent.css">
    <link rel="icon" href="https://raw.githubusercontent.com/mahli262/tugas-wad/main/Images/Tubes/logo.png" type="image/icon type">
    <title>Event-Ku</title>
</head>
<body>
    <!-- navbar -->
    <section class="navigation">
        <nav class="header navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
              <a style="color: white;" class="brand navbar-brand" href="../index.html">Event-Ku</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  
                </ul>
                <div class="d-flex ">
                  <a style="color: white;" href="" class="navbar-brand">
                      Your Name
                      <img src="https://raw.githubusercontent.com/mahli262/tugas-wad/main/Images/Tubes/Ellipse%2016.png" alt="" srcset="" width="50px">
                  </a>
                </div>
              </div>
            </div>
          </nav>
    </section>

    <section>
        <div class="box">
            <div class="row">
                <div class="col-2">
                    <a href="../homePage.html" style="text-decoration: none;font-weight: 600;font-size: 18px;color: black;">Back</a>
                </div>
                <div class="col-8" style="background: #FFFFFF;box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.15);">
                    <div class="page" style="margin: 40px;">
                        <form autocomplete="off" action="#" method="POST">
                            <div class="text-center"><h2>New Event Registration</h2></div>
                            <div >
                              <label for="title" class="form-label">Title</label>
                              <input type="text" name="title" class="form-control" id="title" placeholder="Title">
                            </div>
                            <div >
                              <label for="date" class="form-label">Date</label>
                              <input type="date" name="date" class="form-control" id="date" placeholder="Date">
                            </div>
                            <div >
                              <label for="time" class="form-label">Time</label>
                              <input type="time" name="time" class="form-control" id="time" placeholder="Time">
                            </div>
                            <div class="form-group">
                                <label for="categories" class="form-label">Categories</label>
                                <select class="form-control" id="categories" name="categories">
                                  <option>select categories</option>
                                  <option value="Education">Education</option>
                                  <option value="Health">Health</option>
                                  <option value="Finance">Finance</option>
                                  <option value="Leadership">Leadership</option>
                                  <option value="Others">Others</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="location" class="form-label">Location</label>
                                <select class="form-control" id="location" name="location">
                                  <option>select location</option>
                                  <option value="Online">Online</option>
                                  <option value="Offline">Offline</option>
                                </select>
                            </div>
                            <div >
                                <label for="price" class="form-label">Price</label>
                                <input type="text" name="price" class="form-control" id="price" placeholder="$">
                              </div>
                            <div >
                                <label for="accessLink" class="form-label">Access Link</label>
                                <input type="text" name="accessLink" class="form-control" id="accessLink" placeholder="your event access link">
                              </div>
                            <div >
                                <label for="poster" class="form-label">Poster</label>
                                <input type="file" name="poster" class="form-control" id="poster" placeholder="">
                            </div>
                             <div class="row" style="margin-top: 35px;">
                                <div class="col"><button type="submit" name="submit" id="submit" class="btn btn-primary">Save</button></div>
                                <div class="col"><button type="submit" name="submit" id="submit" class="btn btn-outline-danger">Discard</button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
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