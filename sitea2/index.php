<?php
include 'inc/headers.inc.php';
define('PATH_LOG', 'path.log');
include 'inc/log.inc.php';
?>
<!DOCTYPE html>
<html>

<head>
  <title>
    <?= $title ?>
  </title>
  <meta charset="utf-8" />
  <link rel="stylesheet" type="text/css" href="inc/style.css" />
</head>

<body>
  <div id="header">
    <!-- Верхняя часть страницы -->
    <?php
    if ($visitCounter == 1) {
      echo "<p>Спасибо, что зашли на огонек</p>";
    } else {
      echo "<p>Вы зашли к нам {$visitCounter} раз</p>";
      echo "<p>Последнее посещение: {$lastVisit}</p>";
    }
    ?>
    <img src="logo.gif" width="187" height="29" alt="Наш логотип" class="logo" />
    <span class="slogan">обо всём сразу</span>
    <!-- Верхняя часть страницы -->
  </div>

  <div id="content">
    <!-- Заголовок -->
    <h1>
      <?= $header ?>
    </h1>
    <!-- Заголовок -->
    <!-- Область основного контента -->
    <?php
    include 'inc/routing.inc.php';
    ?>
    <!-- Область основного контента -->
  </div>
  <div id="nav">
    <!-- Навигация -->
    <h2>Навигация по сайту</h2>
    <ul>
      <li><a href='index.php'>Домой</a>
      </li>
      <li><a href='index.php?id=contact'>Контакты</a>
      </li>
      <li><a href='index.php?id=about'>О нас</a>
      </li>
      <li><a href='index.php?id=info'>Информация</a>
      </li>
      <li><a href='index.php?id=gbook'>Гостевая книга</a>
      </li>
      <li><a href='index.php?id=log'>Журнал посещений</a></li>
    </ul>
    <!-- Навигация -->
  </div>
  <div id="footer">
    <!-- Нижняя часть страницы -->
    &copy; Супер-мега сайт, 2000 &ndash;
    <?= date('Y') ?>
    <!-- Нижняя часть страницы -->
  </div>
</body>

</html>