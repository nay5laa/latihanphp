<?php
    function volumekubus() {
        $sisi = 4;
        $volk = $sisi*$sisi*$sisi;

        echo "Volume Kubus: " . $volk;
    }

    function volumebalok() {
        $panjang = 10;
        $lebar = 6;
        $volb = $panjang*$lebar;

        echo "Volume Balok: " . $volb;
    }

    //volume kubus = pil. 1, volume balok = pil. 2
    $hitung = 1;
    if ($hitung = 1) {
        volumekubus();
    }

    else if ($hitung = 2) {
        volumebalok();
    }

    else {
        echo "Pilihan Tidak Ada";
    }
?>