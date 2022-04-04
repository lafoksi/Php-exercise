<?php 
//Number short format

function number_format_short($n, $precision = 1) {
  if ($n < 900) {
      // 0 - 900
      $n_format = number_format($n);
      $suffix = '';
  } else if ($n < 900000) {
      // 0.9k-850k
      $n_format = number_format($n / 1000, $precision);
      $suffix = 'K';
  } else if ($n < 900000000) {
      // 0.9m-850m
      $n_format = number_format($n / 1000000, $precision);
      $suffix = 'M';
  } else if ($n < 900000000000) {
      // 0.9b-850b
      $n_format = number_format($n / 1000000000, $precision);
      $suffix = 'B';
  } else {
      // 0.9t+
      $n_format = number_format($n / 1000000000000, $precision);
      $suffix = 'T';
  }
  return $n_format."".$suffix;

}
echo number_format_short(20000,0); //20K
echo PHP_EOL;
echo number_format_short(20000,1); //20.0K