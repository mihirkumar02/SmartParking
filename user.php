<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width" content="initial-scale=1.0">
    <meta name="description" content="User login and sign up form">
    <meta name="keywords" content="parking, crowd, malls, smart system">
    <meta name="author" content="Rachet">
    <script src="https://maps.googleapis.com/maps/api/js?libraries=places&sensor=false"></script>
    <link rel="stylesheet" href="css/style.css"/>

    <title>Park It Landing Page | Website</title>
  </head>

  <body>
    <header>
      <div class="container">
          <div id="branding">
             <img src="images/parkItLogo.jpg" width="100" height="80"/>
          </div>
          <nav>
            <ul>
                <li class="current"><a href="site.html">Home</a></li>
                <li class="current"><a href="about.html">About</a></li>
            </ul>
          </nav>
      </div>
    </header>

  <section id="showcase">
    <div class="container">
      <p><b>Welcome, please choose a parking slot</b></p><?php echo $_GET["uname"];?>
      <img src="images/lot.jpg">
    </div>
  </section>

  <footer>
    <p>Park It Smart Parking Solutions, Copyright &copy; 2018</p>
  </footer>
</body>
</html>
