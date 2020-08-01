ini adalah views - tampil_siswa</br>

<!-- <h1>Data Siswa</h1>
Nama : <?php echo $nama; ?></br>
Kelas : <?php echo $kelas; ?></br> -->

<?php 

echo "<h1>Data Siswa</h1>";
foreach($siswa as $row)
{
    echo "Nama : ".$row['nama']."</br>";
    echo "Kelas : ".$row['kelas']."</br>";
    echo "<hr>";
}
?>