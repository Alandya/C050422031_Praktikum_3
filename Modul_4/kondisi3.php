<?php
    $bln = date ("M");
    switch($bln)
    {
    Case "Jan" : $namaBln = "Januari";
    break;
    Case "Feb" : $namaBln = "Februari";
    break;
    Case "Mar" : $namaBln = "Maret";
    break;
    Case "Apr" : $namaBln = "April";
    break;
    Case "May" : $namaBln = "Mei";
    break;
    Case "Jun" : $namaBln = "Juni";
    break;
    Case "Jul" : $namaBln = "Juli";
    break;
    Case "Aug" : $namaBln = "Agustus";
    break;
    Case "Sep" : $namaBln = "September";
    break;
    Case "Oct" : $namaBln = "Oktober";
    break;
    Case "Nov" : $namaBln = "Nopember";
    break;
    Case "Dec" : $namaBln = "Desember";
    break;
    }
    echo "Nama bulan Sekarang adalah : ".$namaBln;
?>