<?php
include './koneksi.php';
echo "<a href='formulir.php'>Tambah Data</a><br>";

$sql = "SELECT * FROM siswa"; //siswa = nama table yang akan di tampilkan
$result = $conn->query($sql);
$a = 1;

while($baris = mysqli_fetch_array($result)){
    echo"<br>";
    echo"$a";
    echo "<br>";
    echo "NIS :" . $baris[1]."<br>";
    echo "Nama :" . $baris[2]."<br>";
    echo "Alamat :" . $baris[3]."<br>";
    echo "<a href ='ubah-data.php>id_siswa=$baris[0]'>Hapus>/a>"
    $a++;
}
$conn->close(); //menghentikan koneksi
?>