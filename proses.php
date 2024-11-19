<?php


    if(isset($_POST['proses'])){
        $no = $_POST['no'];
        $nama = $_POST['nama']; 
        $unit = $_POST['unit'];
        $tanggal = $_POST['tanggal'];
        $jabatan = $_POST['jabatan'];
        $bpjs = $_POST['bpjs'];
        $lama = $_POST['lama'];
        $pinjaman = $_POST['pinjaman'];
        $status = $_POST['status'];
        $cicilan = $_POST['cicilan'];
        $infaq = $_POST['infaq'];

        if ($jabatan == "Kepala Sekolah") {
            $gaji = 10000000;
        } elseif($jabatan == "Wakasek"){
            $gaji = 7000000;
        } elseif ($jabatan == "Guru"){
            $gaji = 5000000;
        } elseif ($jabatan == "Karyawan") {
            $gaji = 2500000;
        } else {
            $gaji = 0;
        }

        if($status == "Tetap"){
            $bonus = 10000000;
        } else {
            $bonus = 0;
        }

        class gaji {
            public $gaji_bersih;

            public function uang($no,$nama,$unit,$tanggal,$jabatan,$bpjs,$lama,$pinjaman,$status,$cicilan,$infaq,$gaji,$bonus){
                $this->gaji_bersih = ($gaji + $bonus) - ($bpjs + $pinjaman + $cicilan + $infaq);
                ?>
                <!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <div class="card mx-auto mt-2" style="width: 60%;">
  <h3 class="text-center card-header"><?php echo $nama; ?></h3>
  <div class="card-body text-primary">
 
    <center>
    <h4 class="mt-2">Struk Gaji</h4>
    <table>
        <tr>
            <td>No</td>
            <td>:</td>
            <td><?php echo $no; ?></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?php echo $nama; ?></td>
        </tr>
        <tr>
            <td>Unit Pendidikan</td>
            <td>:</td>
            <td><?php echo $unit; ?></td>
        </tr>
        <tr>
            <td>Tanggal Gaji</td>
            <td>:</td>
            <td><?php echo $tanggal; ?></td>
        </tr>
        <tr>
            <td>Jabatan</td>
            <td>:</td>
            <td><?php echo $jabatan; ?></td>
        </tr>
        <tr>
            <td>Gaji</td>
            <td>:</td>
            <td><?php echo number_format($gaji) ; ?></td>
        </tr>
        <tr>
            <td>Lama Kerja</td>
            <td>:</td>
            <td><?php echo $lama ; ?></td>
        </tr>
        <tr>
            <td>Status Kerja</td>
            <td>:</td>
            <td><?php echo $status ; ?></td>
        </tr>
        <tr>
            <td>Bonus</td>
            <td>:</td>
            <td><?php echo number_format($bonus) ; ?></td>
        </tr>
        <tr>
            <td>BPJS</td>
            <td>:</td>
            <td><?php echo number_format($bpjs) ; ?></td>
        </tr>
        <tr>
            <td>Pinjaman</td>
            <td>:</td>
            <td><?php echo number_format($pinjaman) ; ?></td>
        </tr>
        <tr>
            <td>Cicilan</td>
            <td>:</td>
            <td><?php echo number_format($cicilan) ; ?></td>
        </tr>
        <tr>
            <td>Infaq</td>
            <td>:</td>
            <td><?php echo number_format($infaq) ; ?></td>
        </tr>
        <tr>
            <td>Gaji Bersih</td>
            <td>:</td>
            <td><?php echo number_format($this->gaji_bersih) ; ?></td>
        </tr>
    </table>
    </center>
    
  </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
                <?php
            }
        }
        $cetak = new gaji();

        echo $cetak->uang($no,$nama,$unit,$tanggal,$jabatan,$bpjs,$lama,$pinjaman,$status,$cicilan,$infaq,$gaji,$bonus);
    }

?>