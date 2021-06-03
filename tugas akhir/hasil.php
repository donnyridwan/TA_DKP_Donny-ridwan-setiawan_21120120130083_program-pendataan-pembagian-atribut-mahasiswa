<?php 
      include("user.php");

      $nama = $_POST['nama'];
      $nim = $_POST['nim'];
      $user = new user($nama, $nim);
      if($getUsername = $user->login()): ?>
      

      <!doctype html>
      <html lang="en">
      <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
      <link rel="stylesheet" href="style.css">
      <title>Transaksi Berhasil!</title>
      </head>

      <!-- delivery -->
      <body style="overflow-x: hidden;">
      <section>
      <div class="container ">
      <?php if(isset($_POST['delivery'])): ?>
            <div class="card card-tengah2 card border-success mb-3 mt-4" style="max-width: 30rem;">
                  <div class="card-header">RESI PENGIRIMAN</div>
                  <div class="card-body">
                  <h5 class="card-title">Rincian Transaksi</h5>
                  <div class="row g-2">
                        <!-- bagian1 -->
                        <div class="col-md-3">
                        <p class="card-text">Nama </p>
                        </div>
                        <div class="col-md-1 text-end">
                        <p>: </p>
                        </div>
                        <div class="col-md-8">
                        <p><?= $_POST['nama'] ?> </p>
                        </div>
                  </div>
                  <!-- bagian 2 -->
                  <div class="row g-2">
                        <div class="col-md-3">
                              <p class="card-text">NIM </p>
                              <p class="card-text">Nomor </p>
                              <p class="card-text">Ukuran </p>
                              <p class="card-text">Pulau </p>
                              <p class="card-text">alamat </p>
                        </div>
                        <div class="col-md-1 text-end">
                              <p>: </p>
                              <p>: </p>
                              <p>: </p>
                              <p>: </p>
                              <p>: </p>
                        </div>
                        <div class="col-md-8">
                              <p><?= $_POST['nim'] ?> </p>
                              <p><?= $_POST['nohp'] ?> </p>
                              <p><?= $_POST['ukuran'] ?> </p>
                              <p><?= $_POST['pulau'] ?> </p>
                              <p><?= $_POST['alamat'] ?> </p>
                        </div>
                  </div>
                  <!-- bagian 3 -->
                  <div class="row g-2">
                        <div class="col-md-3">
                              <p class="card-text">pengiriman</p>
                              <p class="card-text">pembayaran </p>
                        </div>
                        <div class="col-md-1 text-end">
                              <p>: </p>
                              <p>: </p>
                        </div>
                        <div class="col-md-8">
                              <p><?= $_POST['pengiriman'] ?> </p>
                              <p><?= $_POST['pembayaran'] ?> </p>
                        </div>
                        <?php
                              class PemainBola {
                              private $nama;
                              public function __construct($nama){
                              $this->nama = $nama;
                              }                              
                              public function getNama(){
                              return $this->nama;
                              }
                              }
                              
                              $benzema = new PemainBola("atribut anda akan dikirim ke alamat yang anda masukan ");
                              echo $benzema->getNama() . "<br>";
                              ?>
                  </div>
                  </div>
            </div>

            <!-- pickup -->
            <?php else: ?>
            <div class="card card-tengah2 card border-success mb-3 mt-4" style="max-width: 30rem;">
                  <div class="card-header">ANTRIAN</div>
                  <div class="card-body">
                  <h5 class="card-title">Rincian Transaksi</h5>
                  <div class="row g-2">
                        <!-- bagian1 -->
                        <div class="col-md-3">
                        <p class="card-text">Nama </p>
                        </div>
                        <div class="col-md-1 text-end">
                        <p>: </p>
                        </div>
                        <div class="col-md-8">
                        <p><?= $_POST['nama'] ?> </p>
                        </div>
                  </div>
                  <!-- bagian 2 -->
                  <div class="row g-2">
                        <div class="col-md-3">
                              <p class="card-text">NIM</p>
                              <p class="card-text">Ukuran</p>
                              <p class="card-text">Hari</p>
                        </div>
                        <div class="col-md-1 text-end">
                              <p>: </p>
                              <p>: </p>
                              <p>: </p>
                        </div>
                        <div class="col-md-8">
                              <p><?= $_POST['nim'] ?> </p>
                              <p><?= $_POST['ukuran'] ?> </p>
                              <p><?= $_POST['hari'] ?> </p>
                        </div>
                        
                  </div>
                  <?php
                              class PemainBola {
                              private $nama;
                              public function __construct($nama){
                              $this->nama = $nama;
                              }                              
                              public function getNama(){
                              return $this->nama;
                              }
                              }
                              
                              $benzema = new PemainBola("jangan telat ya boss ");
                              echo $benzema->getNama() . "<br>";
                              ?>
                  <?php  if ($_POST['hari'] == "kamis"):?>
                        <a href="hasil.html" class="btn btn-primary">cek antrian</a>
                  <?php else: ?>
                        <a href="hasil2.html" class="btn btn-primary">cek antrian</a>
                  <?php endif; ?>
                  </div>
                  </div>
                  
            </div>
            <?php endif; ?>
      </div>
      
      </section>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

      </body>

      </html>
      <?php
      if (isset($_POST['ok'])) {
      if (empty($_POST['nama'])) {
            print "";
      } else {
            if ($_POST['hari'] == "kamis") {
                  $nama = $_POST['nama'];
                  $nim = $_POST['nim'];
                  $hari = $_POST['hari'];
                  $buka = fopen("hasil.html", 'a');
                  fwrite($buka, "hari : ${hari} <br>");
                  fwrite($buka, "nama : ${nama} <br> ");
                  fwrite($buka, "nim : ${nim} <br> ");
                  fwrite($buka, "<hr>");
                  fclose($buka);
                  print "";
            } else {
                  $nama = $_POST['nama'];
                  $nim = $_POST['nim'];
                  $hari = $_POST['hari'];
                  $buka = fopen("hasil2.html", 'a');
                  fwrite($buka, "hari : ${hari} <br>");
                  fwrite($buka, "nama : ${nama} <br> ");
                  fwrite($buka, "nim : ${nim} <br> ");
                  fwrite($buka, "<hr>");
                  fclose($buka);
                  print "";
            }
      }
      }
?>

<?php else: ?>
      <!doctype html>
            <html lang="en">
            <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <!-- Bootstrap CSS -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
            <?php if(isset($_POST['delivery'])): ?>
            <title>GAGAL</title>
            </head>
            <body>
            <div class=container></div>
            <div class="card text-center">
                  <div class="card-header">
                  KESALAHAN 
                  </div>
                  <div class="card-body">
                  <h5 class="card-title">Nama nim tidak ditemukan</h5>
                  <p class="card-text">Silahkan masukan ulang Nama lengkap dan Nomor NIM yang terdaftar pada SSO.</p>
                  <a href="delivery.php" class="btn btn-primary">Kembali</a>
                  </div>
            </div>
            </div> 
            <?php else: ?>  
                  <title>GAGAL</title>
            </head>
            <body>
            <div class=container></div>
            <div class="card text-center">
                  <div class="card-header">
                  KESALAHAN 
                  </div>
                  <div class="card-body">
                  <h5 class="card-title">Nama nim tidak ditemukan</h5>
                  <p class="card-text">Silahkan masukan ulang Nama lengkap dan Nomor NIM yang terdaftar pada SSO.</p>
                  <a href="pickup.php" class="btn btn-primary">Kembali</a>
                  </div>
            </div>
            </div>    
            <?php endif; ?>

            <!-- Optional JavaScript; choose one of the two! -->

            <!-- Option 1: Bootstrap Bundle with Popper -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

            <!-- Option 2: Separate Popper and Bootstrap JS -->
            <!--
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
            -->
            </body>
            </html>
<?php endif; ?>

