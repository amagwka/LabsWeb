<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="style.css" />
  <script src="https://unpkg.com/vue@next"></script>
  <script defer src="main.js"></script>
  <title>Apple</title>
</head>

<body>
<div id="preloader"></div>
<header>
      <ul>
        <li><img src="./svg/apple.svg" alt="apple" /></li>
        <li>Mac</li>
        <li>iPad</li>
        <li>iPhone</li>
        <li>Watch</li>
        <li>TV</li>
        <li>Music</li>
        <li><a href="support.php">Support</a></li>
        <li><a href="send_file.php">File upload</a></li>
        <li><img src="./svg/search.svg" alt="search" /></li>
        <li><img src="./svg/shopping-bag.svg" alt="shopping bag" /></li>
      </ul>
    </header>
    <div class="information">
      <a href=""
        >Get $200–$600 in credit toward iPhone 14 or iPhone 14 Pro when you trade in iPhone 11 or higher
        <img src="./svg/right-arrow.svg" alt="" />
      </a>
    </div>
    <div class="information information-2">
      <a href="">Shop online </a> and fet free, no-contact delivery, Specialist
      help, and more.
    </div>
    <section class="section1" v-html="displayProduct(products[0])"></section>
    <section class="section2" v-html="displayProduct(products[1])"></section>
    

    <section class="section3">
  <?php
  $servername = "localhost";
  $username = "Mk";
  $password = "secret :)";
  $dbname = "products_db";

  $conn = mysqli_connect($servername, $username, $password, $dbname);

  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  $sql = "SELECT name, image_url, description, price FROM products WHERE category='Watch'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    echo '<div class="background" style="background-image: url(./img/s-3.jpg)"></div>';
    while($row = mysqli_fetch_assoc($result)) {
      echo '<div class="top__title">';
      echo '<h1><img src="./svg/apple.svg" alt="apple" />' . $row["name"] . '</h1>';
      echo '<h4>' . $row["description"] . '</h4>';
      echo '<h3>The price is ' . $row["price"] . '</h3>';
      echo '<div class="top__title--links">';
      echo '<a href="" >Learn more <img src="./svg/right-arrow-blue.svg" alt="" /></a>';
      echo '<a href="">Buy <img src="./svg/right-arrow-blue.svg" alt="" /></a>';
      echo '</div>';
      echo '</div>';
    }
  } else {
    echo "0 results";
  }

  mysqli_close($conn);
  ?>
</section>

  <section class="section4">
    <div class="row">
      <div class="section4__item">
        <div
          class="background"
          style="background-image: url(./img/s-4.1.jpg)"
        ></div>

        <div class="top__title">
          <h1 class="black">iPad Air</h1>
          <h3 class="black">Powerful. Colorful. Wonderful.</h3>
          <div class="top__title--links">
            <a href="" class="dark-blue"
              >Learn more <img src="./svg/right-arrow-darkBlue.svg" alt=""
            /></a>
            <a href="" class="dark-blue"
              >Buy <img src="./svg/right-arrow-darkBlue.svg" alt=""
            /></a>
          </div>
        </div>
      </div>
      <div class="section4__item">
        <div
          class="background"
          style="background-image: url(./img/s-4.2.jpg)"
        ></div>

        <div class="top__title">
          <div class="homePod">
            <h1 class="black">HomePod mini</h1>
            <div class="top__title--links">
              <a href="" class="dark-blue"
                >Learn more <img src="./svg/right-arrow-darkBlue.svg" alt=""
              /></a>
              <a href="" class="dark-blue"
                >View pricing
                <img src="./svg/right-arrow-darkBlue.svg" alt=""
              /></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="section4__item">
        <div
          class="background one"
          style="background-image: url(./img/s-4.3.jpg)"
        ></div>

        <div class="top__title">
          <h1 class="black">
            <img src="./svg/apple _black.svg" alt="apple" />One
          </h1>
          <h3 class="black">
            Bundle up to six Apple services. And enjoy more for less.
          </h3>
          <div class="top__title--links">
            <a href="" class="dark-blue"
              >Learn more <img src="./svg/right-arrow-darkBlue.svg" alt=""
            /></a>
            <a href="" class="dark-blue"
              >Try it free <img src="./svg/diagonal-arrow.svg" alt=""
            /></a>
          </div>
        </div>
      </div>
      <div class="section4__item">
        <div
          class="background"
          style="background-image: url(./img/s-4.4.jpg)"
        ></div>
        <div class="top__title">
          <h4>Coming late 2020</h4>
          <h1 class="black">
            <img src="./svg/apple _black.svg" alt="apple" />Fitness+
          </h1>
          <h3 class="black">
            A new fitness experience powered by Apple Watch
          </h3>
          <div class="top__title--links">
            <a href="" class="dark-blue"
              >Learn more <img src="./svg/right-arrow-darkBlue.svg" alt=""
            /></a>
            <a href="" class="dark-blue"
              >Notify me <img src="./svg/right-arrow-darkBlue.svg" alt=""
            /></a>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="section4__item">
        <div
          class="background"
          style="background-image: url(./img/s-4.5.jpg)"
        ></div>
        <div class="top__title">
          <h1 class="black">
            <img src="./svg/apple _black.svg" alt="apple" />Card
          </h1>
          <h3 class="black">
            Get 3% Daily Cash back on purchases from Apple when you use Apple
            Card.
          </h3>
          <div class="top__title--links">
            <a href="" class="dark-blue"
              >Learn more <img src="./svg/right-arrow-darkBlue.svg" alt=""
            /></a>
          </div>
        </div>
      </div>
      <div class="section4__item">
        <div
          class="background"
          style="background-image: url(./img/s-4.6.jpg)"
        ></div>
        <div class="top__title">
          <h1 class="black">tv+</h1>
          <div class="subTitle">
            <h3 class="black">
              Streaming free exclusively through November 1.
            </h3>
            <a href="">Watch now <img src="./svg/play.svg" alt="" /></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer class="footer">
    <div class="footer__wrapper">
      <ul>
        <li>1. Apple Fitness+ is coming late 2020.</li>
        <li>
          2. The Apple One free trial includes only services that you are not
          currently using through a free trial or a subscription. Plan
          automatically renews after trial until cancelled. Restrictions and
          other terms apply.
        </li>
        <li>
          iPhone 12 mini and iPhone 12 Pro Max have not been authorized as
          required by the rules of the Federal Communications Commission.
          iPhone 12 mini and iPhone 12 Pro Max are not, and may not be,
          offered for sale or lease, or sold or leased, until authorization is
          obtained.
        </li>
        <li>
          To access and use all the features of Apple Card, you must add Apple
          Card to Wallet on an iPhone or iPad with iOS 12.4 or later or
          iPadOS. To manage Apple Card Monthly Installments, you need an
          iPhone with iOS 13.2 or later or an iPad with iPadOS 13.2 or later.
          Update to the latest version of iOS or iPadOS by going to Settings >
          General > Software Update. Tap Download and Install.
        </li>
        <li>Available for qualifying applicants in the United States.</li>
        <li>
          Apple Card is issued by Goldman Sachs Bank USA, Salt Lake City
          Branch.
        </li>
        <li>
          Apple TV+ is $4.99/month after free trial. One subscription per
          Family Sharing group. Offer good for 3 months after eligible device
          activation. Plan automatically renews until cancelled. Restrictions
          and other terms apply.
        </li>
      </ul>
      <div class="footer__links">
        <div class="footer__links--column">
          <div class="footer__links--column-title">Shop and Learn</div>
          <a href="">Mac</a>
          <a href="">iPad</a>
          <a href="">iPhone</a>
          <a href="">Watch</a>
          <a href="">TV</a>
          <a href="">Music</a>
          <a href="">AirPods</a>
          <a href="">HomePod</a>
          <a href="">iPod touch</a>
          <a href="">Accessories</a>
          <a href="">Gift Card</a>
        </div>
        <div class="footer__links--column">
          <div class="footer__links--column-title">Services</div>
          <a href="">Apple Music</a>
          <a href="">Apple TV+</a>
          <a href="">Apple Fitness+</a>
          <a href="">Apple News+</a>
          <a href="">Apple Arcade</a>
          <a href="">iCloud</a>
          <a href="">Apple One</a>
          <a href="">Apple Card</a>
          <a href="">Apple Books</a>
          <a href="">App Store</a>
          <div class="footer__links--column-title">Account</div>
          <a href="">Manage Your Apple ID</a>
          <a href="">Apple Store Account</a>
          <a href="">iCloud.com</a>
        </div>
        <div class="footer__links--column">
          <div class="footer__links--column-title">Apple Store</div>
          <a href="">Find a Store</a>
          <a href="">Shop Online</a>
          <a href="">Genius Bar</a>
          <a href="">Today at Apple</a>
          <a href="">Apple Camp</a>
          <a href="">Apple store App</a>
          <a href="">Refurbished and Clearance</a>
          <a href="">Apple Trade In</a>
          <a href="">Order Status</a>
          <a href="">Shopping Help</a>
        </div>
        <div class="footer__links--column">
          <div class="footer__links--column-title">For Business</div>
          <a href="">Apple and Business</a>
          <a href="">Shop and Business</a>
          <div class="footer__links--column-title">For Education</div>
          <a href="">Apple and Education</a>
          <a href="">Shop for K-12</a>
          <a href="">Shop College</a>
          <div class="footer__links--column-title">For Healthcare</div>
          <a href="">Apple in Healthcare</a>
          <a href="">Health on Apple Watch</a>
          <a href="">Health Records on iPhone</a>
          <div class="footer__links--column-title">For Government</div>
          <a href="">Shop for Government</a>
          <a href="">Shop for Veterans and Military</a>
        </div>
        <div class="footer__links--column">
          <div class="footer__links--column-title">Apple Values</div>
          <a href="">Accessibility</a>
          <a href="">Education</a>
          <a href="">Environment</a>
          <a href="">Inclusion and Diversity</a>
          <a href="">Privacy</a>
          <a href="">Supplier Responsibility</a>
          <div class="footer__links--column-title">About Apple</div>
          <a href="">Newsroom</a>
          <a href="">Apple Leadership</a>
          <a href="">Job Opportunities</a>
          <a href="">Investors</a>
          <a href="">Events</a>
          <a href="">Contact Apple</a>
        </div>
      </div>
      <div class="footer__more">
        More ways to shop: <a href="">Find an Apple Store</a> or
        <a href="">other retailer</a> near you. Or call 1-800-MY-APPLE.
      </div>
      <div class="footer__copyright">
        <p>Copyright © 2020 Apple Inc. All rights reserved.</p>
        <a href="">United States</a>
        <div class="links">
          <a href="">Privacy Policy</a>
          <a href="">Terms of Use</a>
          <a href="">Sales and Refunds</a>
          <a href="">Site Map</a>
        </div>
      </div>
    </div>
  </footer>
</body>

</html>