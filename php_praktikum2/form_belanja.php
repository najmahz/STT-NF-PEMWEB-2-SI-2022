<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Form Belanja Online</title>
  </head>
  <body>
    <div class="container">
        <h1 class="text-center mt-3">Belanja Online</h1>
        <hr>

        <div class="row">
            <div class="col mt-2">
                <form  method="POST" action="form_belanja.php">
                    <div class="form-group row">
                        <label for="customer" class="col-4 col-form-label">Customer</label> 
                        <div class="col-8">
                        <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Pilih Produk</label> 
                        <div class="col-8">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV"> 
                            <label for="produk_0" class="custom-control-label">TV</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas"> 
                            <label for="produk_1" class="custom-control-label">Kulkas</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Mesin Cuci"> 
                            <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
                        </div>
                        </div>
                    </div>  
                    <div class="form-group row">
                        <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
                        <div class="col-8">
                        <input id="jumlah" name="jumlah" placeholder="0" type="text" class="form-control">
                        </div>
                    </div> 
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                        <input type="submit" value="Simpan" name="proses" class="btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-sm-4 ml-5">
                <table class="table table-bordered">
                    <thead><tr><td class="table-primary text-center font-weight-bold" colspan="2">Daftar Harga</td></tr></thead>
                    <tbody>
                        <tr><td>TV</td><td>Rp4.200.000</td></tr>
                        <tr><td>Kulkas</td><td>Rp3.100.000</td></tr>
                        <tr><td>Mesin Cuci</td><td>Rp3.800.000</td></tr>
                        <tr><td class="text-danger text-center font-weight-bold" colspan="2">*Harga Dapat Berubah Setiap Saat</td></tr>
                    </tbody>
                </table>
            </div>
        </div>
        <hr>
        <div class="row">
        <div class="col-auto">
                <table class="table table-borderless">
                    <tbody>
                        <?php
                            $proses = $_POST['proses'];
                            $_customer = $_POST['customer'];
                            $_produk = $_POST['produk'];
                            $_jumlah = $_POST['jumlah'];

                            if ($_produk == "TV") {
                                $harga = 4200000; 
                            } elseif ($_produk == "Kulkas") {
                                $harga = 3100000; 
                            } else {
                                $harga = 3800000; 
                            }

                            if(!empty($proses)) {
                                echo "<h5>Data disimpan</h5>";
                                echo "<tr><td>Nama Customer</td><td>: " . $_customer.'</td></tr>';
                                echo "<tr><td>Pilihan Produk</td><td>: " . $_produk.'</td></tr>';
                                echo "<tr><td>Jumlah Beli</td><td>: " . $_jumlah.'</td></tr>';
                                echo "<tr><td>Total Belanja</td><td>: Rp." . (int)$harga*(int)$_jumlah.'</td></tr>';
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
