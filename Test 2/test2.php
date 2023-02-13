<?php
 $nilaiPesertas = array();
 $nilaiGits = array();
// For input
// Hello World
$pesertas = (int) readline('Masukkan jumlah peserta: ');
 
for($i = 1; $i<=$pesertas; $i++){
    $nilai = (int) readline('Nilai Peserta ke-'.$i.': ' );
    array_push($nilaiPesertas, $nilai);
}

$gits = (int) readline('Jumlah permainan Gits : ' );

for($i = 1; $i<=$gits; $i++){
    $nilai = (int) readline('Nilai Gits ke-'.$i.': ' );
    array_push($nilaiGits, $nilai);
}

for($a = 0; $a<count($nilaiGits)-1; $a++){
    for($j =0; $j<count($nilaiPesertas)-1; $j++){
        if($nilaiGits[$a] > $nilaiPesertas[$j]){
            if($j-1 == 0){
                echo $j+1;
            }
        }
        if($nilaiGits[$a] < $nilaiPesertas[$j]){
             echo " ".$j+1;
        }
        if($nilaiGits[$a] < $nilaiPesertas[$j]){
             echo " ".$j;
        }
    }
}

?>