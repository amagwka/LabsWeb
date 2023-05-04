<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="style.css" />
  <script src="https://unpkg.com/vue@next"></script>
  <script defer src="main.js"></script>
  <title>Яблоко)</title>
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
      <li><a href="support.php">Поддержка</a></li>
      <li><a href="send_file.php">Загрузка файлов</a></li>
      <li><img src="./svg/search.svg" alt="search" /></li>
      <li><img src="./svg/shopping-bag.svg" alt="shopping bag" /></li>
    </ul>
  </header>
  <div class="information">
    <a href="">Получите 200–600 долларов кредита на iPhone 14 или iPhone 14 Pro при обмене iPhone 11 или более новой
      модели
      <img src="./svg/right-arrow.svg" alt="" />
    </a>
  </div>
  <div class="information information-2">
    <a href="">Покупайте онлайн </a> и получайте бесплатную доставку без контактов, помощь специалиста и многое другое.
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
      while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="top__title">';
        echo '<h1><img src="./svg/apple.svg" alt="apple" />' . $row["name"] . '</h1>';
        echo '<h4>' . $row["description"] . '</h4>';
        echo '<h3>The price is ' . $row["price"] . '</h3>';
        echo '<div class="top__title--links">';
        echo '<a href="" >Узнать больше <img src="./svg/right-arrow-blue.svg" alt="" /></a>';
        echo '<a href="">Купить <img src="./svg/right-arrow-blue.svg" alt="" /></a>';
        echo '</div>';
        echo '</div>';
      }
    } else {
      echo "0 результатов";
    }

    mysqli_close($conn);
    ?>
  </section>

  <section class="section4">
    <div class="row">
      <div class="section4__item">
        <div class="background" style="background-image: url(./img/s-4.1.jpg)"></div>

        <div class="top__title">
          <h1 class="black">iPad Air</h1>
          <h3 class="black">Мощный. Цветной. Замечательный.</h3>
          <div class="top__title--links">
            <a href="" class="dark-blue">Узнать больше <img src="./svg/right-arrow-darkBlue.svg" alt="" /></a>
            <a href="" class="dark-blue">Купить <img src="./svg/right-arrow-darkBlue.svg" alt="" /></a>
          </div>
        </div>
      </div>
      <div class="section4__item">
        <div class="background" style="background-image: url(./img/s-4.2.jpg)"></div>

        <div class="top__title">
          <div class="homePod">
            <h1 class="black">HomePod mini</h1>
            <div class="top__title--links">
              <a href="" class="dark-blue">Узнать больше <img src="./svg/right-arrow-darkBlue.svg" alt="" /></a>
              <a href="" class="dark-blue">Посмотреть цены
                <img src="./svg/right-arrow-darkBlue.svg" alt="" /></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="section4__item">
        <div class="background one" style="background-image: url(./img/s-4.3.jpg)"></div>

        <div class="top__title">
          <h1 class="black">
            <img src="./svg/apple _black.svg" alt="apple" />One
          </h1>
          <h3 class="black">
            Объедините до шести услуг Apple. Получайте больше удовольствия за меньшие деньги.
          </h3>
          <div class="top__title--links">
            <a href="" class="dark-blue">Узнать больше <img src="./svg/right-arrow-darkBlue.svg" alt="" /></a>
            <a href="" class="dark-blue">Попробуйте бесплатно <img src="./svg/diagonal-arrow.svg" alt="" /></a>
          </div>
        </div>
      </div>
      <div class="section4__item">
        <div class="background" style="background-image: url(./img/s-4.4.jpg)"></div>
        <div class="top__title">
          <h4>Появится в конце 2020 года</h4>
          <h1 class="black">
            <img src="./svg/apple _black.svg" alt="apple" />Fitness+
          </h1>
          <h3 class="black">
            Новый опыт фитнеса на базе Apple Watch
          </h3>
          <div class="top__title--links">
            <a href="" class="dark-blue">Узнать больше <img src="./svg/right-arrow-darkBlue.svg" alt="" /></a>
            <a href="" class="dark-blue">Уведомить меня <img src="./svg/right-arrow-darkBlue.svg" alt="" /></a>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="section4__item">
        <div class="background" style="background-image: url(./img/s-4.5.jpg)"></div>
        <div class="top__title">
          <h1 class="black">
            <img src="./svg/apple _black.svg" alt="apple" />Карта
          </h1>
          <h3 class="black">
            Получайте 3% Daily Cash back на покупки в Apple при использовании Apple Card.
          </h3>
          <div class="top__title--links">
            <a href="" class="dark-blue">Learn more <img src="./svg/right-arrow-darkBlue.svg" alt="" /></a>
          </div>
        </div>
      </div>
      <div class="section4__item">
        <div class="background" style="background-image: url(./img/s-4.6.jpg)"></div>
        <div class="top__title">
          <h1 class="black">tv+</h1>
          <div class="subTitle">
            <h3 class="black">
              Поток бесплатно эксклюзивно до 1 ноября.
            </h3>
            <a href="">Смотреть сейчас <img src="./svg/play.svg" alt="" /></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer class="footer">
    <div class="footer__wrapper">
      <ul>
        <li>1. Apple Fitness+ появится в конце 2020 года.</li>
        <li>
          2. Бесплатная пробная версия Apple One включает только те услуги, которые вы в настоящее время не используете
          в рамках бесплатной пробной версии или подписки. План автоматически продлевается после пробной версии, пока не
          будет отменён. Действуют ограничения и другие условия.
        </li>
        <li>
          iPhone 12 mini и iPhone 12 Pro Max не были авторизованы в соответствии с требованиями правил Федеральной
          комиссии по связи США. iPhone 12 mini и iPhone 12 Pro Max не предлагаются и не могут предлагаться для продажи
          или аренды, а также продаваться или сдаваться в аренду до получения разрешения.
        </li>
        <li>
          Чтобы получить доступ и использовать все возможности Apple Card, необходимо добавить Apple Card в Wallet на
          iPhone или iPad с iOS 12.4 или более поздней версией или iPadOS. Для управления ежемесячными платежами по
          карте Apple необходим iPhone с iOS 13.2 или более поздней версии или iPad с iPadOS 13.2 или более поздней
          версии. Обновитесь до последней версии iOS или iPadOS, перейдя в Настройки > Общие > Обновление ПО. Нажмите
          Загрузить и установить.
        </li>
        <li>Доступно для претендентов, имеющих право на участие в программе в США.</li>
        <li>
          Карта Apple Card выпущена банком Goldman Sachs Bank USA, филиал в Солт-Лейк-Сити.
        </li>
        <li>
          Apple TV+ стоит $4,99 в месяц после бесплатной пробной версии. Одна подписка для одной группы Family Sharing.
          Предложение действительно в течение 3 месяцев после активации соответствующего устройства. План автоматически
          продлевается до тех пор, пока не будет отменен. Действуют ограничения и другие условия.
        </li>
      </ul>
      <div class="footer__links">
        <div class="footer__links--column">
          <div class="footer__links--column-title">Магазин и обучение</div>
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
          <div class="footer__links--column-title">Услуги</div>
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
          <div class="footer__links--column-title">Счет</div>
          <a href="">Manage Your Apple ID</a>
          <a href="">Apple Store Account</a>
          <a href="">iCloud.com</a>
        </div>
        <div class="footer__links--column">
          <div class="footer__links--column-title">Apple Store</div>
          <a href="">Найти магазин</a>
          <a href="">Покупать онлайн</a>
          <a href="">Genius Bar</a>
          <a href="">Сегодня в
            Apple</a> <a href="">Apple Camp</a>
          <a href="">Apple store App</a>
          <a href="">Обновленные и распродажи</a>
          <a href="">Apple Trade In</a>
          <a href="">Статус заказа</a>
          <a href="">Помощь при покупке</a>.
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