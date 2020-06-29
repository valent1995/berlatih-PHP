<?php
    /* 
    PSEUDCODE:
    1. karena terdapat karakter string yang perlu diubah yaitu ":" menjadi "/", 
    maka perlu dilakukan pencarian dan pengubahan karakter ":" menjadi "/" terlebih dahulu
    2. melakukan pengubahan tipe string pada $string_data supaya dapat dilakukan perhitungan
    3. membuat variabel yang dapat menampung hasil dari $string_data 
    4. return variabel baru tersebut
    */

  function hitung($string_data)
  {
    // Kode kalian di sini
    $string_data = strtr($string_data, [':'=>'/']);
    eval( '$result = (' . $string_data . ');' );
    return $result;
  }
 
  // TEST CASES
  echo hitung("102*2"); //204
  echo "<br>".hitung("2+3"); //5
  echo "<br>".hitung("100:25"); //4
  echo "<br>".hitung("10%2"); //0
  echo "<br>".hitung("99-2"); //97


?>