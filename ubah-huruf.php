<?php
function ubah_huruf($pram)
{
    //kode di sini
    $angka = "abcdefghijklmnopqrstuvwxyz";
    $kosong  = "";
    for ($i=0; $i < strlen($pram) ; $i++) { 
        for ($j=0; $j < strlen($angka) ; $j++) { 
            if ($pram[$i] == $angka[$j]) {
                $kosong .= $angka[$j + 1];
            }
        }
    }
    return $kosong . '<br>';
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo ubah_huruf('developer'); // efwfmpqfs
echo ubah_huruf('laravel'); // mbsbwfm
echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu
