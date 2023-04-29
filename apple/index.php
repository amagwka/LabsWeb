<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="style.css" />
  <title>Apple</title>
</head>

<body>
  <header>
    <ul>
      <li><img src="./svg/apple.svg" alt="apple" /></li>
      <li>Mac</li>
      <li>iPad</li>
      <li>iPhone</li>
      <li>Watch</li>
      <li>TV</li>
      <li>Music</li>
      <li>Support</li>
      <li><img src="./svg/search.svg" alt="search" /></li>
      <li><img src="./svg/shopping-bag.svg" alt="shopping bag" /></li>
    </ul>
  </header>
  <div class="information">
    <a href="">Get $200–$600 in credit toward iPhone 14 or iPhone 14 Pro when you trade in iPhone 11 or higher
      <img src="./svg/right-arrow.svg" alt="" />
    </a>
  </div>
  <div class="information information-2">
    <a href="">Shop online </a> and fet free, no-contact delivery, Specialist
    help, and more.
  </div>
  <?php
  // Database connection details
  $host = "sql100.byethost7.com";
  $username = "Mk";
  $password = "6S4fd06g8W";
  $dbname = "products";

  // Create database connection
  $conn = mysqli_connect($host, $username, $password, $dbname);

  // Check database connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  // Query to fetch product details
  $sql = "SELECT * FROM products WHERE name LIKE '%iPhone 14%'";
  $result = mysqli_query($conn, $sql);

  // Check if any products are found
  if (mysqli_num_rows($result) > 0) {
    // Display product details
    while ($row = mysqli_fetch_assoc($result)) {
      echo '<section class="section1">';
      echo '<div class="background" style="background-image: url(./img/' . $row["image"] . ')"></div>';
      echo '<div class="top__title">';
      echo '<h1>' . $row["name"] . '</h1>';
      echo '<h3>' . $row["description"] . '</h3>';
      echo '<div class="top__title--links">';
      echo '<a href="">Learn more <img src="./svg/right-arrow-blue.svg" alt=""/></a>';
      echo '<a href="">Shop <img src="./svg/right-arrow-blue.svg" alt="" /></a>';
      echo '</div></div>';
      echo '<div class="bottom__title">';
      echo '<h2>' . $row["name"] . '</h2>';
      echo '<h2>Pre-order starting at</h2>';
      echo '<h2>5:00 a.m.PST on 11.6</h2>';
      echo '<h2>Available 11.13</h2></div></section>';
    }
  } else {
    echo "No products found.";
  }

  // Close database connection
  mysqli_close($conn);
  ?>

  <section class="section2">
    <div class="background" style="background-image: url(./img/s-2.jpg)"></div>

    <div class="top__title">
      <h1 class="black">iPhone 14</h1>
      <h3 class="black">Blast past fast</h3>
      <div class="top__title--links">
        <a href="" class="dark-blue">Learn more <img src="./svg/right-arrow-darkBlue.svg" alt="" /></a>
        <a href="" class="dark-blue">Shop <img src="./svg/right-arrow-darkBlue.svg" alt="" /></a>
      </div>
    </div>

    <div class="bottom__title">
      <h2 class="black">iPhone 14 mini</h2>
      <h2>Pre-order starting at</h2>
      <h2>5:00 a.m.PST on 11.6</h2>
      <h2>Available 11.13</h2>
    </div>
  </section>
</body>

</html>