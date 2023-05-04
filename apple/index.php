<?php
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

if ($lang == "ru") {
  include 'index-ru.php';
} else {
  include 'index-en.php';
}
?>