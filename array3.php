<?php
// Menampilkan seluruh isi array dengan FOR dan FOREACH
    $arrWarna=array("Red","Orange","Yellow","Green","Blue","Purple");

    echo "Menampilkan isi array dengan FOR : <br>";
    for ($i=0; $i <count($arrWarna); $i++) { 
    	echo "Warna pelangi <font color=$arrWarna[$i]>" .$arrWarna[$i]. "</font><br>";
    }

    echo "<br>Menampilkan isi array dengan FOREACH : <br>";
    foreach ($arrWarna as $Warna) {
    	echo "Warna pelangi <font color=$Warna>".$Warna ."</font><br>";
    }
?>