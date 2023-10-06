<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>SPECTRUM &nbsp;|&nbsp;&nbsp; Contact </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/png" href="logo.png" />
  <meta name="theme-color" content="#3a9fff">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
  <link rel="stylesheet" href="./style.css">

</head>


<body>

  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="https://image.ibb.co/fOur3b/favicon.png" />
    <meta name="theme-color" content="#1885ed">
    <title>SPECTRUM - Contact us </title>
  </head>

  <body>
    <header class="header">
      <div class="container header__container">
        <div class="header__logo"><img class="header__img" src="Images/logo.png" style="height: 55px;width: 40px;">
          <h1 class="header__title"><a href="index.html" style="text-decoration: none;"> SPECTRUM<span class="header__light"> - 2K22</span></a></h1>
        </div>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
          aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <div class="header__menu">
          <nav id="navbar" class="header__nav collapse">
            <ul class="header__elenco">
              <li class="header__el"><a href="index.html" class="header__link">Home</a></li>
              <li class="header__el"><a href="event.html" class="header__link">Event</a></li>
              <li class="header__el"><a href="gallery.html" class="header__link">Gallary </a></li>
              <!-- <li class="header__el"><a href="About.html" class="header__link">About Us</a></li> -->
              <li class="header__el"><a href="Contact.php" class="header__link">Contact us</a></li>
              <li class="header__el header__el--blue"><a href="registration.html" class="btn btn--white">Register →</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </header>




    <div class="sect sect--padding-bottom">
      <div class="container">
        <div class="row">
          <h1 class="row__title">
            Contact Us </h1>
          <h2 class="row__sub">Feel free to ask any questions</h2>
        </div>
        <div class="row row--margin">
          <div class="col-md-1"></div>
          <div class="col-md-4">
            <div class="contacts">
              <a href="#" class="contacts__link"><img src="Images/logo.png" style="height: 50px;">
                <h1 class="contacts_title-ag">Spectrum <span class="contacts--light"> Team</span></h1>
              </a>
              <p class="contacts__address">
                SKN Sinhgad College of Engineering<br>
                Korti, Tal: Pandharpur<br>
                Solapur, Maharashtra <br>
                India
              </p>
              <p class="contacts__info">
                Ph <a href="#" class="contacts__info-link">+91 1234567890</a>
              </p>
              <p class="contacts__info">
                <a href="#" class="contacts__info-link">contact@spectrum2k22.com</a>
              </p>
            </div>
          </div>
          <div class="col-md-6">
            <form id="contact" class="form" action="contactResponse.php" method="POST">
              <div class="form-group">
                <select class="form__field form__select" name="subject">
                  <option selected value>Subject*</option>
                  <option value=1>Pricing</option>
                  <option value=2>Success Stories</option>
                </select>
              </div>
              <div class="form-group">
                <div class="form__field--half">
                  <input type="text" placeholder="Name*" class="form__field form__text" name="fname"></input>
                </div>
                <div class="form__field--half">
                  <input type="text" placeholder="Surname" class="form__field form__text" name="lname"></input>
                </div>
              </div>

              <div class="form-group">
                <div class="form__field--half">
                  <input type="text" placeholder="Email address*" class="form__field form__text" name="email"></input>
                </div>
                <div class="form__field--half">
                  <input type="text" placeholder="Phone number" class="form__field form__text" name="mob"></input>
                </div>
              </div>

              <div class="form-group">
                <textarea type="text" placeholder="Your messsage*" class="form__field form__textarea" name="msg"></textarea>
                <button class="btn btn--up btn--width" type="submit">Submit</button>
              </div>
            </form>
          </div>
          <div class="col-md-1"></div>
        </div>
      </div>
    </div>






    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>
    <script src="./script.js"></script>

  </body>

</html>