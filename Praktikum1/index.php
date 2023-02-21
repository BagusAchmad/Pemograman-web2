<?php 

// ini sebuah komentar
/*
ini sebuah komentar
Komentar adalah suatu respons atau tanggapan yang ditulis oleh seseorang terhadap suatu hal yang telah diposting atau dibagikan oleh orang lain, seperti pada media sosial, blog, artikel, atau video. Komentar bisa berupa pendapat, saran, kritik, atau pertanyaan yang diajukan oleh pengguna kepada pemilik konten atau kepada pengguna lainnya yang telah memposting sesuatu.
*/

echo "Hellor World <br>";
print_r("Nama saya Bagus <br>");
var_dump("Kuliah di STT Terpadu Nurul Fikri <br>");

// Membuat variabel user
$nama = "Bagus Achmad Hidayat";
$umur = 19;
$berat = 95;
$mahasiswa = true;

echo "Nama saya adalah $nama <br>";
echo "Umur saya sekarang $umur <br>";
echo "Berat saya $berat kg <br>";

// Membuat Variabel sistem
// echo "Dokumen root " . $_SERVER["DOCUMENT_ROOT"];
// echo "Nama File " . $_SERVER["PHP_SELF"];

// Membuat Variabel konstanta
define("PHI", 3.14);
$jari = 8;
$luas = PHI * $jari * $jari;
$keliling = 2 * PHI * $jari;

echo "Luas lingkaran dengan jari-jari $jari adalah $luas <br>";
echo "Keliling lingkaran adalah $keliling <br>";

// Membuat Array
$programs = ["php", "Javascript", "HTML", "CSS"];
echo $programs[0];
echo count($programs);
$programs[] = "Mysql";
echo count($programs);

unset($programs[0]);
echo "<br>" .$programs[0];

echo "<ol>";
foreach($programs as $program){
    echo "<li> $program </li>";
}
echo "<ol>";

?>