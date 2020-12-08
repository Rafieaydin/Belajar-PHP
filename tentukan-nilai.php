<?php
function tentukan_nilai($number)
{
    switch ($number) {
        case $number >= 85:
            echo 'Sangat Baik <br>  ';
            break;
        case $number >= 75:
            echo 'Baik <br>';
            break;
        case $number >= 60:
            echo 'Cukup <br>';
            break;
        case $number <= 50:
            echo 'Kurang <br>';
            break;
    }
}

//TEST CASES
echo tentukan_nilai(98); //Sangat Baik
echo tentukan_nilai(76); //Baik
echo tentukan_nilai(67); //Cukup
echo tentukan_nilai(43); //Kurang


?>