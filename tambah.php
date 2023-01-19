<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>input Data Siswa</title>
</head>
<body>
    
    <table border = "0" >
    <form action="proses-tambah.php" method="POST">
        <tr><h2>Input Data Siswa</h2></tr>

        <tr>
        <td><label for="nama">Nama :</label></td>
        <td><input type="text" name="nama" /></td>
        </tr>

        <tr>
        <td><label for="kelas">kelas :</label></td>
        <td><input type="number" name = "kelas" ></td>
            </tr>

        <td><label for="nama_jurusan">Nama Jurusan :</label></td>
        <td><input type="text" name="nama_jurusan" ></td>
            </tr>

        <tr>
            <td><label for="tahun">Tahun Membayar SPP :</label></td>
            <td><input type="number" name="tahun" /></td>
        </tr>

        <tr>
            <td><label for="nominal">Jumlah Nominal :</label></td>
            <td><input type="number" name="nominal" /></td>
        </tr>

        
    <button type="submit" id="simpan" name="simpan">Simpan</button>

        
    </form>
    </table>

  
</body>
</html>