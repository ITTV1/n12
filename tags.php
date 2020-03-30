<?php

# Удаление HTML-тегов из строки при помощи определенной функции в программировании
  $st =<<<HTML
    <b>Жирный текст IT TV</b>
    <tt>Определенный текст</tt>
    <a href='https://www.youtube.com/channel/UCpzeKoDC1-50cuanrY_TXOQ'>Ссылка НА КАНАЛ</a>
    a<b && x>s
HTML;
  echo "Исходный текст: $st";
  echo "<hr>После удаления тэгов: ".strip_tags($st, "<tt><b>");
?>
