<?php
  function containLetters($firstWord,$secondWord)
  {
    $kataPertama = str_split($firstWord);
    $str = strtolower($secondWord);
    $kataKedua = str_split($str);
    $count = count($kataPertama);
    return count(array_intersect($kataPertama, $kataKedua)) == $count ? 'True' : 'False';
  }
  echo ('Kata pertama brs. '.'Kata kedua berkatsoft'.' => '.containLetters('brs','berkatsoft').'<br>');
  echo ('Kata pertama brs. '.'Kata kedua berkatco'.' => '.containLetters('brs','berkatco').'<br>');
  echo ('Kata pertama brs. '.'Kata kedua BERKATsoft'.' => '.containLetters('brs','BERKATsoft').'<br>');
?>