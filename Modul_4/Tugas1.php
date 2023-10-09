<?php
    $jumlah_fotocopy = 158;
    $harga_per_lembar = 0;

    if ($jumlah_fotocopy < 100) {
        $harga_per_lembar = 150;
    } elseif ($jumlah_fotocopy >= 100 && $jumlah_fotocopy <= 200) {
        $harga_per_lembar = 100;
    } else {
        $harga_per_lembar = 80;
    }

    $biaya_total = $jumlah_fotocopy * $harga_per_lembar;

    echo "Jumlah fotocopy: " . $jumlah_fotocopy . " lembar\n";
    echo "Harga per lembar: Rp. " . $harga_per_lembar . ",-\n";
    echo "Biaya total fotocopy: Rp. " . $biaya_total. ",-";
?>