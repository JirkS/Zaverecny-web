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

    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="logged.css">
    <link rel="stylesheet" href="scrollDown.css" />
    <link rel="stylesheet" href="scrollBar.css" />
    <link rel="stylesheet" href="footer.css" />
    <script src="mainFooter.js" defer></script>
    <link rel="stylesheet" href="styleConcorde.css" />
    <link rel="icon" href="img/airplaneIcon.png" />
    <script src="localstorage.js" defer></script>
    <?php 
        if(!isset($_SESSION['first_name'])){ ?>
          <script src="scrollDown.js" defer></script>
    <?php } ?>
    <title>Concorde</title>
  </head>
  <body>
    <header class="top-nav">
      <div class="left">
        <a class="logo" href="index.php"
          ><img src="img/logoTransparent.png" alt=""
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
    <main>
      <section class="ts">
        <h1 class="title">Concorde</h1>
        <h4 class="slogan">"Arrive before you leave."</h4>
      </section>
      <section class="section">
        <p class="text">
            Concorde was a supersonic passenger jet that was designed and operated jointly by British Airways and Air France from 1976 to 2003. 
            It was one of the most advanced aircraft of its time, capable of flying at twice the speed of sound and cutting travel times dramatically. 
            Although Concorde is no longer in service, it remains one of the most iconic and beloved aircraft in aviation history.
            Concorde was first conceived in the early 1960s as a joint venture between the British and French governments. 
            The goal was to create a supersonic transport that could carry passengers across the Atlantic in half the time it took traditional aircraft. 
            After several years of design and testing, the first Concorde took flight in 1969. 
            It was an immediate sensation, with people all over the world marveling at its sleek design and incredible speed.
            Over the next three decades, Concorde became a symbol of luxury travel and technological advancement. 
            It was the preferred mode of transportation for many celebrities, politicians, and businesspeople, who valued the time saved by its incredible speed. 
            Despite its high cost, Concorde remained popular with passengers and was seen as a status symbol for those who could afford to fly on it.
            However, Concorde's time in service was not without controversy. 
            In 2000, a Concorde operated by Air France crashed shortly after takeoff from Paris, killing all 109 passengers and crew on board, as well as four people on the ground. 
            The crash was caused by a ruptured tire, which caused debris to puncture a fuel tank and start a fire. 
            Although the incident was a tragic reminder of the risks of supersonic flight, it did not lead to the immediate retirement of Concorde.
            In the years that followed, Concorde faced mounting pressure from environmental groups and changing economic conditions. 
            Rising fuel costs and increased competition from other airlines made it increasingly difficult to operate the expensive aircraft profitably. 
            Finally, in 2003, British Airways and Air France announced that they would be retiring their Concorde fleets for good.
            Despite its relatively short time in service, Concorde remains an enduring symbol of human ingenuity and technological advancement. 
            Its sleek design and incredible speed continue to captivate aviation enthusiasts around the world. 
            Although there may never be another aircraft like Concorde, its legacy lives on as a testament to the human drive for progress and innovation.
        </p>
      </section>
      
      <div class="containerImages">
        <input type="radio" name="slider" id="item-1" checked>
        <input type="radio" name="slider" id="item-2">
        <input type="radio" name="slider" id="item-3">
        <input type="radio" name="slider" id="item-4">
        <div class="cards">
            <label class="card" for="item-1" id="song-1">
            <img class="cimg" src="img/concorde/concorde3.jpg" alt="song">
            </label>
            <label class="card" for="item-2" id="song-2">
            <img class="cimg" src="img/concorde/concorde2.jpg" alt="song">
            </label>
            <label class="card" for="item-3" id="song-3">
            <img class="cimg" src="img/concorde/concorde1.jpg" alt="song">
            </label>
            <label class="card" for="item-4" id="song-4">
                <img class="cimg" src="img/concorde/concorde4.jpg" alt="song">
            </label>
        </div>
      </div>

      <h3 class="thanksToConcorde">Thank you, Concorde, for pushing the boundaries of what was possible and inspiring generations of aviation enthusiasts!</h3>

        <section class="picturebg">
            <article class="titlePC">
                <ul class="pointedUl">
                    <li>Concorde was capable of flying at twice the speed of sound, or around 1,350 miles per hour. This meant that it could cross the Atlantic in just 3.5 hours, compared to the 8 hours or more it took traditional aircraft.</li>
                    <li>Concorde's distinctive nose could be lowered during takeoff and landing to improve visibility for the pilots. It was also raised during supersonic flight to reduce drag and improve efficiency.</li>
                    <li>Concorde's engines were some of the most powerful ever built for a commercial aircraft. Each engine produced around 38,000 pounds of thrust, allowing Concorde to accelerate rapidly and maintain supersonic speeds.</li>
                    <li>Despite its high speed, Concorde was relatively fuel-efficient for its time. It burned around 12 tons of fuel per hour of flight, compared to around 25 tons for a Boeing 747 flying at similar speeds.</li>
                    <li>Concorde's cabin was relatively small, with room for just 100 passengers. However, it was designed to be incredibly comfortable and luxurious, with features like spacious seats, fine dining, and personalized service.</li>
                    <li>Concorde was incredibly loud, particularly during takeoff and landing. In fact, it was one of the loudest aircraft ever built, with a noise level of around 100 decibels.</li>
                    <li>Despite its reputation for luxury, Concorde was also used for some important scientific research. For example, it was used to study the effects of supersonic flight on the ozone layer, and to conduct experiments on the human body at high speeds.</li>
                </ul>
            </article>
            <img class="imgbg" src="img/concorde/concorde5.jpg" alt="Nike Jordan1 Travis Scott, OFF White">
        </section>
        <article class="titleMobile">
            <ul class="pointedUl">
                <li>Concorde was capable of flying at twice the speed of sound, or around 1,350 miles per hour. This meant that it could cross the Atlantic in just 3.5 hours, compared to the 8 hours or more it took traditional aircraft.</li>
                <li>Concorde's distinctive nose could be lowered during takeoff and landing to improve visibility for the pilots. It was also raised during supersonic flight to reduce drag and improve efficiency.</li>
                <li>Concorde's engines were some of the most powerful ever built for a commercial aircraft. Each engine produced around 38,000 pounds of thrust, allowing Concorde to accelerate rapidly and maintain supersonic speeds.</li>
                <li>Despite its high speed, Concorde was relatively fuel-efficient for its time. It burned around 12 tons of fuel per hour of flight, compared to around 25 tons for a Boeing 747 flying at similar speeds.</li>
                <li>Concorde's cabin was relatively small, with room for just 100 passengers. However, it was designed to be incredibly comfortable and luxurious, with features like spacious seats, fine dining, and personalized service.</li>
                <li>Concorde was incredibly loud, particularly during takeoff and landing. In fact, it was one of the loudest aircraft ever built, with a noise level of around 100 decibels.</li>
                <li>Despite its reputation for luxury, Concorde was also used for some important scientific research. For example, it was used to study the effects of supersonic flight on the ozone layer, and to conduct experiments on the human body at high speeds.</li>
            </ul>
        </article>
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
  <script src="anime.min.js"></script>
    <script>
        /*
      const text = document.querySelector(".text");
      text.innerHTML = text.textContent.replace(/\S/g, "<span>$&</span>");

      const section = document.querySelector(".section");

      const animation = anime.timeline({
        targets: ".text span",
        easeing: "linear",
        loop: false,
        autoplay: true,
      });
      animation.add({
        rotate: function () {
          return anime.random(-360, 360);
        },
        translateX: function () {
          return anime.random(-300, 300);
        },
        translateY: function () {
          return anime.random(-300, 300);
        },
        duration: 0000,
      });
      animation.play();
      animation.direction = "reverse";
      animation.duration = 2000;
      animation.finished.then(() => {
        animation.reverse();
      });*/
    </script>
</html>
