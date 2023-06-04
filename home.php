<?php 
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap"
      rel="stylesheet"
    />

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js" integrity="sha512-z4OUqw38qNLpn1libAN9BsoDx6nbNFio5lA6CuTp9NlK83b89hgyCVq+N5FdBJptINztxn1Z3SaKSKUS5UP60Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="logged.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="scrollDown.css">
    <link rel="stylesheet" href="scrollBar.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="mainFooter.js" defer></script>
    <script src="main.js" defer></script>
    <script src="localstorage.js" defer></script>
    <link rel="icon" href="img/airplaneIcon.png">
    <?php 
        if(!isset($_SESSION['first_name'])){ ?>
          <script src="scrollDownScript.js" defer></script>
    <?php } ?>
    <title>Home</title>
  </head>
  <body>
    <header class="top-nav">
      <div class="left">
        <a class="logo" href="home.php"
          ><img src="img/logoTransparent.png" alt="CompanyLogo"
        /></a>
      </div>
      <input id="menu-toggle" type="checkbox" />
      <label class="menu-button-container" for="menu-toggle">
        <div class="menu-button"></div>
      </label>
      <ul class="menu">
        <li class="nav-itemM">
          <a id="active" href="home.php">Home</a>
        </li>
        <li class="nav-itemM">
          <a class="anim" href="concorde.php">Concorde</a>
        </li>
        <li class="nav-itemM"><a class="anim" href="facts.php">Facts</a></li>
        <li class="nav-itemM">
          <a class="anim" href="apiFlights.php">ApiFlights</a>
        </li>
      </ul>
      <?php 
        if(isset($_SESSION['first_name'])){ ?>
          <div class="right">
            <a href="">
              <button class="user"><?php echo $_SESSION['first_name'] ?></button>
            </a>
            <a href="logoff.php">
              <button class="logOut">Log out</button>
            </a>
          </div>
        <?php } else { ?>
          <div class="right">
            <a href="login.html">
              <button class="signIn">Sing in</button>
            </a>
            <a href="register.html">
              <button class="signUp">Sing up</button>
            </a>
          </div>
        <?php } ?>
    </header>
    <main>
      <div class="line-container">
        <svg viewBox="0 0 817 1289" fill="none" preserveAspectRatio="xMidYMax meet">
          <path d="M554.662 3H739C780.421 3 814 36.5786 814 78V241.706C814 283.127 780.421 316.706 739 316.706H78C36.5786 316.706 3 350.284 3 391.706V566.682C3 608.104 36.5787 641.682 78 641.682H739C780.421 641.682 814 675.261 814 716.682V897.294C814 938.716 780.421 972.294 739 972.294H78C36.5786 972.294 3 1005.87 3 1047.29V1211C3 1252.42 36.5786 1286 78 1286H212.29" stroke="white" stroke-width="5"/>
        </svg>
      </div>
      <p class="welcomeArticle">
        Welcome to our website dedicated to flights and planes! If you're a
        frequent flyer, an aviation enthusiast, or just someone who's interested
        in learning more about the world of aviation, you've come to the right
        place. Our website is your go-to source for everything related to
        flights and planes.
      </p>
      <div class="board">
        <h6 class="tittleB">Abous Us</h6>
        <p>
          Our mission is to help you get the most out of your air travel experience. 
          Whether you're looking for advice on how to make your flights more comfortable, information about specific airlines and destinations, or tips for navigating airports, we've got you covered.
          Our team of expert writers are passionate about aviation and dedicated to providing you with accurate, up-to-date information. 
          We strive to make our content informative, engaging, and easy to understand, so whether you're an aviation expert or a beginner, you'll find something of value on our website.
          So why not explore our website today and discover all the amazing things the world of aviation has to offer? 
          We're confident you'll find our content helpful and informative, and we're always here to answer any questions. 
          Thank you for visiting!
        </p>
      </div>
      <div class="board boardR">
        <h6 class="tittleB">Concorde</h6>
        <p>
          Our page about legendary Concorde offers a wealth of information, resources and insights as well. 
          We cover a wide range of topics, from the aircraft's groundbreaking design and development to its record-breaking flights and eventual retirement.
          We strive to make our content informative, engaging, and accessible to all, whether you're a Concorde enthusiast or new to the world of aviation.
          We hope our website inspires you to learn more about this extraordinary aircraft and its place in the world of flight.
          Our team of expert writers are passionate about the Concorde and dedicated to providing you with accurate, up-to-date information.
          So why not explore our website today and discover all the amazing things the Concorde has to offer?
        </p>
      </div>
      <div class="board">
          <h6 class="tittleB">Facts</h6>
          <p>
            Our webpage Facts is dedicated to fun and fascinating facts about planes!
            If you're an aviation enthusiast or just curious about the world of flight, you're in the right place.
            Our website offers a wealth of interesting and surprising information about planes, covering everything from the earliest aircraft designs to the latest high-tech models. 
            However you're interested in the history of aviation, the science of flight, or just want to learn some cool new facts, we've got you covered.
            We also cover topics such as airplane disasters, airport security, and the future of air travel.
            Our page is to spark your curiosity, deepen your understanding of the world of planes, and inspire you to explore new horizons in aviation. 
            Whether you're a seasoned pilot or a curious newcomer, our website is the perfect destination for anyone who wants to explore the wonders of flight.
          </p>
      </div>
      <div class="board boardR">
        <h6 class="tittleB">API Flights</h6>
        <p>
          On this page, we are getting flight data by requesting API from company named <a class="opensky" href="https://opensky-network.org" target="_blank">OpenSky Network</a>.
          The OpenSky Network is a non-profit organization dedicated to providing open-source data and tools to the aviation community. 
          One of their most popular offerings is their flights API, which provides real-time information about commercial and private flights around the world.
          By using the OpenSky Network flights API on your website, you can provide your users with an engaging and informative experience that keeps them up-to-date on the latest flight information. 
          Although you're building a flight tracking app, a travel booking site, or a website that covers the aviation industry, the OpenSky Network flights API can help you deliver real-time data to your users in a fast and reliable way.
          In addition to the flights API, the OpenSky Network offers a variety of other aviation-related data and tools, including weather data, aircraft models and histories, and air traffic information. 
          Their open-source philosophy and commitment to transparency make them an excellent partner for anyone looking to build innovative applications in the aviation space.
        </p>
      </div>
    </main>
    <aside>
      <h3 id="scrollDown">ScrollDown</h3>
    </aside>
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="footer-col">
            <h4>Thank You</h4>
            <p class="thanks">
              Thank you for visiting our website! 
              We hope you found the information you were looking for!
              We appreciate you taking the time to visit our website. 
              Thank you for stopping by!
            </p>
          </div>
          <div class="footer-col">
            <h4>Support</h4>
            <ul>
              <li><a href="">FAQ</a></li>
              <li><a href="">Privacy Policy</a></li>
              <li><a href="">Help</a></li>
              <li><a href="">Contact</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>Links</h4>
            <ul>
              <li><a href="https://github.com/JirkS" target="_blank">Github</a></li>
              <li><a href="https://www.spsejecna.cz" target="_blank">School</a></li>
              <li><a href="https://opensky-network.org" target="_blank">API</a></li>
              <li class="mail" ><a>Mail</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>follow us</h4>
            <div class="social-links">
              <a href="https://www.instagram.com" target="_blank"><img id="icon" src="img/social-medias/InstagramIcon.png"></img></a>
              <a href="https://www.facebook.com/jirka.syrovatko/" target="_blank"><img id="icon" src="img/social-medias/FacebookIcon.png"></img></a>
              <a href="https://github.com/JirkS" target="_blank"><img id="icon" src="img/social-medias/GitHubIcon.png"></img></a>
              <a href="https://brand.linkedin.com" target="_blank"><img id="in" id="icon" src="img/social-medias/LinkedInIcon.png"></img></a>
            </div>
          </div>
        </div>
      </div>
      <hr>
      <p class="copyright">Copyright &copy2023 OreaRia Inc. Jiri Syrovatko - All Rights Reserved.</p>
    </footer>
  </body> 
</html>
