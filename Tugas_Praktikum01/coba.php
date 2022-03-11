<?php
$ar_buah = ["Pepaya", "Mangga","Pisang","Jambu" ];
// cetak buah ke index ke 2
echo $ar_buah[2];
// cetak jumlah buah
echo '<br/>Jumlah Buah ' . count($ar_buah);
// cetak seluruh buah
echo '<ol>';
foreach($ar_buah as $buah){
echo '<li>'. $buah .'</li>';
}
echo '</ol>';
// tambahkan buah
$ar_buah[]="Durian";

?>