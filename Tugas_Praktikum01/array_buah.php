
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
//Tambahkan buah
$ar_nuah[]="Durian";
//hapus index 1
unset($ar_buah[1]);
//ubah imdek kedua buah mnjadi manggis
$ar_buah[2]="manggis";
//cetak seluruh buah dnegan indeknya
echo '<ul>';
foreach($ar_buah as $k =>$v){
    echo '<li> buah indek '. $k .' adalah '.$v .'<li/>';
}
echo'</ul>';
?>