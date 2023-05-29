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
    <link rel="stylesheet" href="styleFacts.css" />
    <link rel="stylesheet" href="scrollDown.css" />
    <link rel="stylesheet" href="scrollBar.css" />
    <link rel="stylesheet" href="footer.css" />
    <script src="mainFooter.js" defer></script>
    <link rel="icon" href="img/airplaneIcon.png" />
    <script src="" defer></script>
    <script src="localstorage.js" defer></script>
    <?php 
        if(!isset($_SESSION['first_name'])){ ?>
          <script src="scrollDown.js" defer></script>
    <?php } ?>
    <title>Facts</title>
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

        <p class="welcomeArticle">
            World of airplanes is full of interesting and fascinating facts, so let's flight into it!
            Prepare to be amazed as we take you on a journey through the captivating world of flight. 
            From the awe-inspiring engineering behind modern aircraft to the incredible milestones in aviation history, we'll uncover intriguing stories, mind-boggling statistics, and the latest innovations shaping the future of flight. 
            Whether you're a seasoned aviation enthusiast or simply curious about the wonders of airplanes, this page is your gateway to uncovering the extraordinary. 
            So fasten your seatbelt and get ready for a thrilling exploration of the skies!
        </p>

        <section class="facts">
            <ol>
                <!--History-->
                <h3 class="subtitle">History section</h3>
                <li class="olFact">The first sustained and controlled powered flight by the Wright brothers on December 17, 1903, lasted only 12 seconds and covered a distance of 36.5 meters (120 feet). It was a monumental achievement that laid the foundation for modern aviation.</li>
                <li class="olFact">The Zeppelin LZ 129 Hindenburg, a massive airship, was one of the most iconic aircraft of the 1930s. Tragically, it caught fire during a landing attempt in 1937, leading to the end of the era of passenger airships.</li>
                <li class="olFact">Amelia Earhart, an American aviator, became the first woman to fly solo across the Atlantic Ocean in 1932. She set numerous aviation records and inspired generations of female pilots.</li>
                <li class="olFact">The de Havilland Comet, introduced in 1952, was the world's first commercial jet airliner. It revolutionized air travel with its jet engines, high speed, and pressurized cabin, ushering in the Jet Age.</li>
                <li class="olFact">The Boeing 747, introduced in 1969, is one of the most iconic aircraft in history. With its distinctive hump and large capacity, it transformed long-haul air travel and became a symbol of global connectivity.</li>
                <li class="olFact">The Space Shuttle, developed by NASA, made its first flight in 1981. It was a reusable spacecraft capable of carrying astronauts and cargo to low Earth orbit. The Space Shuttle program ended in 2011.</li>
                <li class="olFact">The Wright brothers' first powered aircraft, the Wright Flyer, is on display at the Smithsonian National Air and Space Museum in Washington, D.C., where visitors can see this pivotal piece of aviation history up close.</li>
                <li class="olFact">The development of aviation was greatly accelerated during World War I and World War II as airplanes played crucial roles in reconnaissance, aerial combat, and strategic bombing.</li>
                <li class="olFact">The invention of the jet engine by Sir Frank Whittle in the 1930s revolutionized aviation by providing more power, speed, and efficiency compared to piston engines.</li>
                <!--AirPlanes-->
                <h3 class="subtitle">General AirPlanes section</h3>
                <li class="olFact">The wingspan of the Airbus A380, the largest passenger airplane in the world, is approximately 79.8 meters (262 feet). It is almost the length of a soccer field.</li>
                <li class="olFact">The Boeing 747, often referred to as the "Queen of the Skies," has approximately six million parts. It takes a massive amount of engineering and precision to assemble such a complex aircraft.</li>
                <li class="olFact">The world's fastest recorded speed for a manned, level flight by an airplane is held by the Lockheed SR-71 Blackbird. It reached a top speed of approximately 3,540 kilometers per hour (2,193 miles per hour), which is over three times the speed of sound.</li>
                <li class="olFact">The first commercial flight attendants were introduced by United Airlines in 1930. Initially called "stewardesses," their role was to ensure passenger comfort and safety during flights.</li>
                <!--Technologies-->
                <h3 class="subtitle">Technology section</h3>
                <li class="olFact">The wings of an airplane flex during flight to withstand the forces and stresses encountered. They are designed to bend upward or downward to ensure stability and safety during different flight conditions.</li>
                <li class="olFact">The engines on a modern commercial airplane generate an incredible amount of thrust. For example, the General Electric GE90, one of the largest jet engines, produces around 115,000 pounds of thrust, equivalent to the power of approximately 28 Formula 1 race cars.</li>
                <li class="olFact">The wings of an airplane are often equipped with multiple devices, including flaps and spoilers, to enhance performance during takeoff, landing, and various phases of flight. These devices help control lift, drag, and stability.</li>
                <li class="olFact">Fly-by-Wire: Many modern airplanes utilize fly-by-wire technology, where electronic systems replace traditional manual flight controls. This technology enhances flight stability, reduces pilot workload, and allows for more precise control of the aircraft.</li>
                <li class="olFact">GPS Navigation: Global Positioning System (GPS) technology plays a crucial role in modern aircraft navigation. It enables pilots to accurately determine their position, follow flight paths, and navigate through various weather conditions.</li>
                <li class="olFact">Jet Engines: Jet engines power most commercial airplanes today. They work on the principle of sucking in air, compressing it, adding fuel, igniting it, and expelling the resulting gases at high speed to create forward thrust. Jet engines have significantly increased the speed and efficiency of air travel.</li>
                <li class="olFact">Composite Materials: Modern airplanes extensively use composite materials such as carbon fiber-reinforced polymers. These materials are lightweight, strong, and resistant to corrosion, making aircraft more fuel-efficient and durable.</li>
                <li class="olFact">Winglets: Winglets are small, upturned extensions at the tips of airplane wings. They improve aerodynamic efficiency by reducing drag and improving fuel efficiency. Winglets have become a common sight on many commercial aircraft.</li>
                <li class="olFact">Cockpit Avionics: Cockpit avionics, including advanced navigation systems, digital displays, and computerized flight management systems, have greatly improved pilot situational awareness, flight control, and safety. These technologies provide pilots with real-time information and precise control over the aircraft.</li>
                <li class="olFact">In-Flight Entertainment Systems: Many airplanes now offer advanced in-flight entertainment systems to keep passengers entertained during their journey. These systems include personal screens, on-demand movies, music, games, and even Wi-Fi connectivity.</li>
                <li class="olFact">Wing Anti-Ice Systems: To prevent ice buildup on wings during flight in cold weather, airplanes use wing anti-ice systems. These systems circulate warm air or de-icing fluids through the wings' leading edges, ensuring safe and efficient operation.</li>
                <li class="olFact">Thrust Reversers: Thrust reversers are devices installed on jet engines that redirect thrust forward during landing, helping to slow down the aircraft quickly after touchdown. They improve braking efficiency and reduce landing distances.</li>
                <li class="olFact">Weather Radar: Weather radar systems on aircraft allow pilots to detect and avoid severe weather conditions such as thunderstorms, turbulence, and heavy precipitation. This technology helps improve flight safety and passenger comfort.</li>
                <!--Modern AirPlanes-->
                <h3 class="subtitle">Modern AirPlanes section</h3>
                <li class="olFact">The Airbus A380, one of the largest passenger planes, has a wingspan of approximately 79.8 meters (262 feet), which is wider than the length of a professional soccer field.</li>
                <li class="olFact">The Boeing 787 Dreamliner is made primarily of composite materials, such as carbon fiber-reinforced polymers, making it significantly lighter and more fuel-efficient compared to traditional aluminum-bodied planes.</li>
                <li class="olFact">The engines of a modern plane, like the General Electric GE9X, can generate up to 105,000 pounds of thrust, which is equivalent to the power of around 175 Formula 1 race cars.</li>
                <li class="olFact">The cabin pressure inside a modern plane is typically maintained at an altitude equivalent to 6,000 to 8,000 feet above sea level, even when flying at cruising altitudes. This helps passengers feel more comfortable during the flight.</li>
                <li class="olFact">The cockpit of modern planes is equipped with advanced avionics and digital flight control systems, allowing pilots to monitor flight parameters, communicate with air traffic control, and perform precise navigation and aircraft control functions.</li>
                <li class="olFact">Modern planes are equipped with sophisticated weather radar systems that can detect and display weather patterns, turbulence, and lightning strikes, enabling pilots to make informed decisions and navigate around hazardous weather conditions.</li>
                <li class="olFact">The Boeing 787 and Airbus A350 are designed with larger windows that offer passengers better views and allow more natural light into the cabin. Some planes even have electronically dimmable windows, eliminating the need for physical shades.</li>
                <li class="olFact">Modern planes feature advanced air purification systems that filter and circulate cabin air, removing contaminants and ensuring a healthier environment for passengers. These systems can filter the entire cabin air within a few minutes.</li>
                <li class="olFact">Many modern planes are equipped with in-flight Wi-Fi connectivity, allowing passengers to stay connected and access the internet during the flight. This enables them to work, browse the web, or stay in touch with friends and family.</li>
                <li class="olFact">The Boeing 777X, scheduled for introduction in the near future, will be the largest twin-engine plane in the world. It will feature folding wingtips, allowing it to fit into existing airport gates despite its massive wingspan.</li>
                <!--Future Of Flying-->
                <h3 class="subtitle">Future of Flying section</h3>
                <li class="olFact">Sustainable Aviation: With increasing concerns about climate change and environmental impact, there is a growing focus on developing sustainable aviation solutions. This includes the exploration of alternative fuels, such as biofuels and hydrogen, as well as the development of electric and hybrid-electric aircraft. Efforts are also being made to improve the overall efficiency of aircraft operations, reduce emissions, and implement more eco-friendly practices throughout the aviation industry.</li>
                <li class="olFact">Advanced Technology: Advancements in technology will continue to shape the future of flying. This includes the development of more autonomous systems, artificial intelligence (AI), and machine learning algorithms that can enhance safety, improve air traffic management, and optimize flight operations. Additionally, innovations in materials, propulsion systems, and aerodynamics will contribute to more efficient and high-performance aircraft.</li>
                <li class="olFact">Supersonic and Hypersonic Travel: There is renewed interest in supersonic and hypersonic travel, aiming to significantly reduce travel times for long-haul flights. Companies are exploring the development of supersonic passenger planes capable of traveling faster than the speed of sound, while hypersonic flight involves even higher speeds. These technologies have the potential to revolutionize air travel by dramatically reducing flight durations.</li>
                <li class="olFact">Urban Air Mobility: The concept of urban air mobility involves the use of electric vertical takeoff and landing (eVTOL) aircraft for short-distance transportation within urban areas. These vehicles could provide on-demand air transportation, potentially alleviating congestion on the ground and revolutionizing urban mobility.</li>
                <li class="olFact">Increased Connectivity: The aviation industry is focusing on improving connectivity options for passengers. This includes the expansion of in-flight Wi-Fi services, allowing travelers to stay connected and work or be entertained during flights. There are also ongoing efforts to develop satellite-based communication systems that enable seamless global coverage for voice and data services.</li>
                <li class="olFact">Space Tourism: The advent of space tourism is becoming a reality, with private companies developing spacecraft to offer commercial space travel experiences. This emerging industry aims to open up space exploration and provide opportunities for civilians to venture beyond Earth's atmosphere.</li>
                <li class="olFact">Improved Passenger Experience: Airlines are continuously striving to enhance the passenger experience. This includes advancements in cabin design, more comfortable seating, improved in-flight entertainment systems, and personalized services. Additionally, innovations in airport technology and processes, such as biometric identification and streamlined security checks, aim to make the entire travel experience smoother and more efficient.</li>

            </ol>
            <p class="closeFacts">
                While the future of flying holds immense potential, it is important to note that technological advancements and industry developments often take time to fully materialize. 
                Nonetheless, these exciting directions indicate a strong emphasis on sustainability, technology, efficiency, and enhancing the overall experience for passengers, promising a fascinating future for aviation.
            </p>
        </section>
        <!--Images On Left And Right Side-->
        <section class="images">
            <img class="imgLeft1" src="img/Boing 737 Max8.jpg" alt="">
            <img class="imgLeft2" src="img/Boing 737 Max8(2).jpg" alt="">
            <img class="imgLeft3" src="img/historicAirPlane.jpg" alt="">
            <img class="imgRight1" src="img/LuftHansa.jpg" alt="">
            <img class="imgRight2" src="img/A380.jpg" alt="">
            <img class="imgRight3" src="img/wingOfAirPlane.jpg" alt="">
        </section>


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
</html>
