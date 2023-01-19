<?php
include ("koneksi.php");


$id = $_GET['id'];
$sql = "DELETE FROM tb_jurusan WHERE id='$id'";
$sql = "DELETE FROM tb_spp WHERE id='$id'";
$sql = "DELETE FROM tb_siswa WHERE id='$id'";

$query = mysqli_query($koneksi, $sql);

if($query){
    header('location:join.php?status=sukses');
} else {
    echo "sukses";
}
?>