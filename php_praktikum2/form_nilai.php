<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Form Nilai</title>
</head>
<body>
    <div class="container w-50">
        <h1 class="text-center mt-5">Form Nilai Siswa</h1>
        <hr>
        <form method="GET" action="form_nilai.php">
            <div class="form-group row">
                <label class="col-4 col-form-label" for="nama">Nama Lengkap</label> 
                <div class="col-8">
                <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
                <div class="col-8">
                <select id="matkul" name="matkul" class="custom-select">
                    <option value="DDP">Dasar-Dasar Pemrograman</option>
                    <option value="BD1">Basis Data I</option>
                    <option value="WEB1">Pemrograman Web I</option>
                </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
                <div class="col-8">
                <input id="nilai_uts" name="nilai_uts" placeholder="100" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
                <div class="col-8">
                <input id="nilai_uas" name="nilai_uas" placeholder="100" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas</label> 
                <div class="col-8">
                <input id="nilai_tugas" name="nilai_tugas" placeholder="100" type="text" class="form-control">
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="proses" type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>

        <?php
            $proses = $_GET['proses'];
            $nama_siswa = $_GET['nama'];
            $mata_kuliah = $_GET['matkul'];
            $nilai_uts = $_GET['nilai_uts'];
            $nilai_uas = $_GET['nilai_uas'];
            $nilai_tugas = $_GET['nilai_tugas'];

            echo 'Proses : '.$proses;
            echo '<br> Nama: '.$nama_siswa;
            echo '<br> Mata Kuliah: '.$mata_kuliah;
            echo '<br> Nilai UTS: '.$nilai_uts;
            echo '<br> Nilai UAS: '.$nilai_uas;
            echo '<br> Nilai Tugas: '.$nilai_tugas;
        ?>
    </div>
   
</body>
</html>