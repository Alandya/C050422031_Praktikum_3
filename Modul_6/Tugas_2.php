<?php
// Membuat array asosiatif
$data = array(
    'nama' => 'Lintang',
    'usia' => 19,
    'kota' => 'Banjarbaru',
    'pekerjaan' => 'SI',
);

// Menampilkan array awal
echo "Array Awal: ";
echo "<pre>";
print_r($data);
echo "</pre>";

// 1. Menggunakan array_push() untuk menambahkan elemen ke array
array_push($data, 'status', 'Menikah');
echo "Array Setelah array_push():";
echo "<pre>";
print_r($data);
echo "</pre>";

// 2. Menggunakan array_pop() untuk menghapus elemen terakhir dari array
$terakhir = array_pop($data);
echo "Elemen Terakhir yang Dihapus:  $terakhir<br/>";
echo "Array Setelah array_pop(): ";
echo "<pre>";
print_r($data);
echo "</pre>";

// 3. Menggunakan array_merge() untuk menggabungkan dua array
$newData = array('alamat' => 'Jalan Bahagia', 'telepon' => '1234567890');
$mergedData = array_merge($data, $newData);
echo "Array Setelah array_merge(): ";
echo "<pre>";
print_r($mergedData);
echo "</pre>";

// 4. Menggunakan array_keys() untuk mendapatkan kunci-kunci array
$keys = array_keys($data);
echo "Kunci-kunci Array:";
echo "<pre>";
print_r($keys);
echo "</pre>";

// 5. Menggunakan array_values() untuk mendapatkan nilai-nilai array
$values = array_values($data);
echo "Nilai-nilai Array: ";
echo "<pre>";
print_r($values);
echo "</pre>";

?>