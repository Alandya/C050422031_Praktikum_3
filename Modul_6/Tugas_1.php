<?php

$data = array(
    'nama' => 'Lintang',
    'usia' => 19,
    'kota' => 'Banjarbaru',
    'pekerjaan' => 'SI',
);

echo "Array Sebelum Pengurutan:";
echo "<pre>";
print_r($data);
echo "</pre>";

sort($data);
echo "Array Setelah Pengurutan (sort):";
echo "<pre>";
print_r($data);
echo "</pre>";

ksort($data);
echo "Array Setelah Pengurutan (ksort):";
echo "<pre>";
print_r($data);
echo "</pre>";

asort($data);
echo "Array Setelah Pengurutan (asort):";
echo "<pre>";
print_r($data);
echo "</pre>";

rsort($data);
echo "Array Setelah Pengurutan (rsort):";
echo "<pre>";
print_r($data);
echo "</pre>";

krsort($data);
echo "Array Setelah Pengurutan (krsort):";
echo "<pre>";
print_r($data);
echo "</pre>";

arsort($data);
echo "Array Setelah Pengurutan (arsort):";
echo "<pre>";
print_r($data);
echo "</pre>";

?>