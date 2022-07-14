<?php
$link = mysqli_connect('localhost', 'логин', 'пароль', 'rum44_jstopdf') or die("Нет соединения с БД");
mysqli_set_charset($link, "utf8") or die("Не установлена кодировка соединения");
?>