<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Form Nilai (3)</title>
</head>
<body>
    <div class="container w-75">
        <h1 class="text-center mt-3">Form Nilai Siswa</h1>
        <hr>
        <form method="POST" action="nilai_siswa.php">
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
                    <option value="">Pilih Mata Kuliah</option>
                    <option value="DDP">Dasar-Dasar Pemrograman</option>
                    <option value="BD1">Basis Data I</option>
                    <option value="WEB2">Pemrograman Web II</option>
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
                <input type="submit" value="Simpan" name="proses" class="btn btn-primary">
                </div>
            </div>
        </form>
        <hr>

        <div class="row">
            <div class="col-auto">
                <table class="table table-borderless">
                    <tbody>
                        <?php
                        require_once("libfungsi.php");
                            $proses = $_POST['proses'];
                            $nama_siswa = $_POST['nama'];
                            $mata_kuliah = $_POST['matkul'];
                            $nilai_uts = $_POST['nilai_uts'];
                            $nilai_uas = $_POST['nilai_uas'];
                            $nilai_tugas = $_POST['nilai_tugas'];
                            $nilai_akhir = (((int)$nilai_uts)*30/100)+(((int)$nilai_uas)*35/100)+(((int)$nilai_tugas)*35/100);
                            $grade = grade($nilai_akhir);
                            
                            if(!empty($proses)) {
                                // echo 'Proses : '.$proses;
                                echo "<h5>Hasil nilai</h5>";
                                echo "<tr><td>Nama</td><td>: " . $nama_siswa.'</td></tr>';
                                echo "<tr><td>Mata Kuliah</td><td>: " . $mata_kuliah.'</td></tr>';
                                echo "<tr><td>Nilai UTS</td><td>: " . $nilai_uts .'</td></tr>';
                                echo "<tr><td>Nilai UAS</td><td>: " . $nilai_uas.'</td></tr>';
                                echo "<tr><td>Nilai Tugas/Praktikum</td><td>: " . $nilai_tugas.'</td></tr>';
                                echo "<tr><td>Total Nilai</td><td>: " . $nilai_akhir.'</td></tr>';
                                echo "<tr><td>Predikat</td><td>: " . $grade. ' ('.predikat($grade).')</td></tr>';
                                echo "<p class=\"text-primary\">Dinyatakan ". isPass($nilai_akhir) ." dengan nilai akhir $nilai_akhir dan predikat ".predikat($grade) .' ('.$grade.')'."</p>";

                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
   
</body>
</html>