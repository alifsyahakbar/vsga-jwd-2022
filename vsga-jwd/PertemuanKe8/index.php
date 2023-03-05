    <?php

    // membuat fungsi
    function hitungUmur($thn_lahir, $thn_sekarang)
    {
        $umur = $thn_sekarang - $thn_lahir;

        return $umur;
    }


    function perkenalan($nama, $salam = "Selamat Datang ")
    {
        echo $salam . ",";
        echo "Perkenalkan, nama saya " . $nama . "<br/>";
        // memanggil fungsi Lain
        echo "Saya berusia " . hitungUmur(2002, 2022) . " tahun <br/>";
        echo "Senang berkenalan dengan anda . <br/>";
    }

    // memanggil fungsi perkenalan
    perkenalan("Alif");
