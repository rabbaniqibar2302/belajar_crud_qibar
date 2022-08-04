<?php

class mobil
{
    //property dari mobil
    var $warna;
    var $merek;
    var $ukuran;

    //membuat operasi mobil
    function maju($move_forward){
        $move_forward = "Gaskannn";
    }

    function mundur(){
        $move_backward = "Remkannn";
    }
}

//inisiasi ( panggil objek melalui class )
$kendaraan = new mobil();

//panggil fungsi yang ada di class
echo $kendaraan->maju($move_forward);
