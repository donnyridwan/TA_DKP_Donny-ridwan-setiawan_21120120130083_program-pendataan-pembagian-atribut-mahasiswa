<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>delivery</title>
    </head>
        <body>
        <div class="container mt-5">
        <div class="card" >
                <div class="card header text-center">
                <h1>Form Pengiriman</h1>
                </div>
            <div class="card-body">
                <!-- mulai form -->
                <form method="POST" action="hasil.php" >
                <input type="hidden" value="delivery" name="delivery">
                        <div class="form-group" method="POST">
                            <!-- nama -->
                            <div class="col-sm-8 ml-auto mr-auto">
                                <label for="inputEmail3">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama">
                            </div>
                            <!-- nim -->
                            <div class="col-sm-8 ml-auto mr-auto">
                                <label for="inputEmail3">NIM</label>
                                <input type="text" class="form-control" id="nim" name="nim">
                            </div>
                            <!-- nomor handphone -->
                            <div class="col-sm-8 ml-auto mr-auto">
                                <label for="inputEmail3">nomor handphone</label>
                                <input type="text" class="form-control" id="nohp" name="nohp">
                            </div>
                        </div>
                    <div class="form-group">
                    <div class="col-sm-8 ml-auto mr-auto">
                        <label for="exampleInputPassword1">UKURAN JAS</label>
                        <select class="custom-select" name="ukuran" id="ukuran">
                            <option selected>===UKURAN===</option>
                            <option >S</option>
                            <option >M</option>
                            <option >L</option>
                            <option >XL</option>
                        </select>
                        </div>

                    </div>
                    <div class="form-group">
                    <div class="col-sm-8 ml-auto mr-auto">
                        <label for="exampleInputPassword1">Pulau</label>
                        <select class="custom-select" name="pulau" id="pulau">
                            <option selected>===Pilih Pulau===</option>
                            <option >Jawa</option>
                            <option >Kalimantan</option>
                            <option >Sulawesi</option>
                            <option >Sumatra</option>
                            <option >Papua</option>
                        </select>
                        </div>
                    </div>

                    <!-- alamat -->
                    <div class="col-sm-8 ml-auto mr-auto">
                        <label for="inputEmail3">alamat rumah</label>
                        <input type="text" class="form-control" id="alamat" name="alamat">
                    </div>
                    
                    <div class="form-group">
                    <div class="col-sm-8 ml-auto mr-auto">
                        <label for="exampleInputPassword1">Pengiriman</label>
                        <select class="custom-select" name="pengiriman" id="pengiriman">
                            <option selected>===Pilih Pengiriman===</option>
                            <option >JNT</option>
                            <option >Sicepat</option>
                        </select>
                        </div>
                    </div>

                    <div class="form-group">
                    <div class="col-sm-8 ml-auto mr-auto">
                        <label for="exampleInputPassword1">Pembayaran</label>
                        <select class="custom-select" name="pembayaran" id="pembayaran">
                            <option selected>===Pilih Pembayaran===</option>
                            <option >Bank</option>
                            <option >E-Money</option>
                            <option >Alfamart</option>
                            <option >Indomaret</option>
                        </select>
                        </div>
                    </div>

                    <div class="form-group">
                    <div class="col-sm-8 ml-auto mr-auto">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
        </div>


    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
</body>
</html>
