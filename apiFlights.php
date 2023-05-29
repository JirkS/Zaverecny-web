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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="logged.css">
    <link rel="stylesheet" href="bootstrapTable.css"/>
    <link rel="stylesheet" href="styleApiFlights.css">
    <link rel="stylesheet" href="footer.css">
    <script src="mainFooter.js" defer></script>
    <link rel="icon" href="img/airplaneIcon.png" />
    <script src="mainApiFlights.js" defer></script>
    <script src="localstorage.js" defer></script>
    <title>API Flights</title>
  </head>
  <body>
    <header class="top-nav">
      <div class="left">
        <a class="logo" href="index.php"
          ><img src="img/logoTransparentBlack.png" alt=""
        /></a>
      </div>
      <input id="menu-toggle" type="checkbox" />
      <label class="menu-button-container" for="menu-toggle">
        <div class="menu-button"></div>
      </label>
      <ul class="menu">
        <li class="nav-itemM">
          <a class="anim" id="active" href="index.php">Home</a>
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
    <section class="explanations" /*id="particles-js"*/>
        <p>
            <span class="subtitle">Call Sign</span> - refers to a unique identifier used to identify a specific aircraft during communication with air traffic control (ATC) and other aircraft. 
            Callsigns are typically alphanumeric combinations assigned to each aircraft by the airline or the pilot.
        <br>
            <span class="subtitle">departure Airport Candidates Count</span> - refers to the number of potential candidate airports from which a flight can depart. 
            It represents the count of airports that meet the criteria or requirements for the departure of a particular flight.
            Basically, this number provides an indication of how many airports are suitable options for the departure of a specific flight based on these factors.
        <br>
            <span class="subtitle">est Arrival Airport</span> - refers to the estimated arrival airport for a particular flight. 
            It represents the airport where the flight is projected or scheduled to land at the conclusion of its journey.
            It is typically based on flight plans, real-time data, and information provided by air traffic control.
        <br>
            <span class="subtitle">est Departure Airport</span> - refers to the estimated departure airport for a particular flight. 
            It represents the airport from which the flight is projected or scheduled to take off at the beginning of its journey.
            Again it is typically based on flight plans, real-time data, and information provided by air traffic control.
        <br>
            <span class="subtitle">ICAO24</span> - is a unique identifier assigned to individual aircraft. 
            It is a 24-bit hexadecimal code that is used in aviation for various purposes, including aircraft identification, surveillance, and communication.
            The code is derived from the aircraft's registration number or serial number and serves as a permanent and globally unique identifier for the specific aircraft.
            ICAO24 codes are crucial for air traffic control and surveillance systems to accurately track and identify aircraft in real-time. 
            They are used in air traffic management, collision avoidance systems, aircraft tracking, and other aviation-related applications. 
            Additionally, the ICAO24 code allows authorities to maintain a comprehensive record of individual aircraft for regulatory and safety purposes.
        </p>
      </section>
    <div class="infinity-loader">
      <div class="bg">
        <!--background circles-->
        <div class="left-bg"></div>
        <div class="right-bg"></div>
      </div>
      <div class="fg">
        <!--foreground circles-->
        <div class="top-left-rect">
          <div></div>
        </div>
        <div class="bottom-right-rect">
          <div></div>
        </div>
        <div class="top-right-rect">
          <div></div>
        </div>
        <div class="bottom-left-rect">
          <div></div>
        </div>
      </div>
    </div>
    <main class="content">
      <table
        id="content"
        data-mode="lines"
        class="table table-striped table-hover text-light"
      >
        <tr>
          <th>number</th>
          <th>callsign</th>
          <th>departureAirportCandidatesCount</th>
          <th>estArrivalAirport</th>
          <th>estDepartureAirport</th>
          <th>icao24</th>
        </tr>
        <tbody id="tbody"></tbody>
      </table>
    </main>
    <aside>
      <h3 id="toolTipR">ToopTip: press "R" for refresh request</h3>
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
                <li><a href="https://github.com" target="_blank">Github</a></li>
                <li><a href="https://www.spsejecna.cz" target="_blank">School</a></li>
                <li><a href="https://opensky-network.org" target="_blank">API</a></li>
                <li class="mail" ><a>Mail</a></li>
              </ul>
            </div>
            <div class="footer-col">
              <h4>follow us</h4>
              <div class="social-links">
                <a href="https://www.instagram.com" target="_blank"><img id="icon" src="img/social-medias/InstagramIcon.png"></img></a>
                <a href="https://www.facebook.com" target="_blank"><img id="icon" src="img/social-medias/FacebookIcon.png"></img></a>
                <a href="https://github.com" target="_blank"><img id="icon" src="img/social-medias/GitHubIcon.png"></img></a>
                <a href="https://brand.linkedin.com" target="_blank"><img id="in" id="icon" src="img/social-medias/LinkedInIcon.png"></img></a>
              </div>
            </div>
          </div>
        </div>
        <hr>
        <p class="copyright">Copyright &copy2023 OreaRia Inc. Jiri Syrovatko - All Rights Reserved.</p>
      </footer>
  </body>
  <script type="text/javascript" src="particleJS/particles.js"></script>
  <script type="text/javascript" src="particleJS/app.js"></script>
</html>
