<?php

    require_once  "class_persegiPanjang.php";
    $persegiPanjang1 = new PersegiPanjang(3, 7);
    $persegiPanjang2 = new PersegiPanjang(6, 20);
    echo "Luas Persegi Panjang 1 : " . $persegiPanjang1->getLuas();
    echo "</br>Luas Persegi Panjang 2 : " . $persegiPanjang2->getLuas();

    echo "</br>Keliling Persegi Panjang 1 : " . $persegiPanjang1->getKeliling();
    echo "</br>Keliling Persegi Panjang 2 : " . $persegiPanjang2->getKeliling();

?>