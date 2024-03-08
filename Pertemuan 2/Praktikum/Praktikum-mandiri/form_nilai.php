<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Form Nilai</h1>
    <form action="hasil_nilai.php" method="GET">
        Nama : <Input type="text" id="nama" name="nama" value="" size="30"/> <br>
        Mata Kuliah :
        <select name="matkul" id="">
            <optgroup>
                <option value="">Pilih Matkul</option>
                <option value="DDP">Dasar-Dasar Pemrograman</option>
                <option value="PW">Pemrograman Website</option>
                <option value="BD">Basis Data</option>
            </optgroup>
        </select> <br>
        Nilai UTS : <input type="text" name="nilai_uts" id="nilai_uts"/><br>
        Nilai UAS : <input type="text" name="nilai_uas" id="nilai_uas"/><br>
        Nilai Tugas / Praktikum :
        <input type="text" name="nilai_tugas" id="nilai_tugas"><br>
        <input type="submit" value="Simpan" name="proses"/>

    </form>
</body>
</html>