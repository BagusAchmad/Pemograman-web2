<?php
require_once "layouts/header.php";
require_once "layouts/menu.php";
?>

<?php 

$mhs1 = ['id' =>1, 'NIM' => '0110222002', 'UTS' =>90, 'UAS' =>95, 'TUGAS' =>90,'nilai_akhir' => 0];
$mhs2 = ['id' =>2, 'NIM' => '0110222004', 'UTS' =>80, 'UAS' =>85, 'TUGAS' =>80,'nilai_akhir' => 0];
$mhs3 = ['id' =>3, 'NIM' => '0110222006', 'UTS' =>70, 'UAS' =>75, 'TUGAS' =>70,'nilai_akhir' => 0];

$ar_nilai = [$mhs1, $mhs2, $mhs3];

?>

<div class="container">
    <h2>Data Mahasiswa STT NF</h2>
    <table class="table table-striped">
        <tr>
            <th>Nomor</th>
            <th>NIM</th>
            <th>UTS</th>
            <th>UAS</th>
            <th>TUGAS</th>
            <th>Nilai Akhir</th>
        </tr>
    <?php foreach($ar_nilai as $nilai){
        $nilai_akhir = ($nilai['UTS'] + $nilai['UAS'] + $nilai['TUGAS'])/3;
         ?>
        <tr>
            <td><?= $nilai['id']; ?></td>
            <td><?= $nilai['NIM']; ?></td>
            <td><?= $nilai['UTS']; ?></td>
            <td><?= $nilai['UAS']; ?></td>
            <td><?= $nilai['TUGAS']; ?></td>
            <td><?= number_format($nilai_akhir,1,'.','.');?></td>
        </tr>
        <?php } ?>
    </table>
    </div>

<?php
require_once "layouts/footer.php";
?>