<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
<form action="proses.php" method="post">

    <h3 class="text-center mt-2">UAS PRAKTEK RPL</h3>
    <center>
        <img src="images-removebg-preview.png" alt="" style="width: 10%;">
        <h5>PENGGAJIHAN <br> GURU/KARYAWAN YAYASAN ASSALAAM</h5>
    </center>

    <div class="card mx-auto" style="width: 65%;">
        <div class="card-header">
            Data Penggajihan
        </div>
        <div class="card-body">
           
                <label for="">No</label>
                <input type="text" class="form-control mt-1" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="No" name="no" required>
            </form>
            <label for="" class="mt-2">Nama</label>
            <input type="text" class="form-control mt-1" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Nama" name="nama" required>
            <label for="" class="mt-2">Unit Pendidikan</label>

            <select class="form-select mt-2" id="inputGroupSelect01" name="unit" required>
                <option disabled selected>Pilih Unit Pendidikan</option>
                <option value="TK">TK</option>
                <option value="SD">SD</option>
                <option value="SMP">SMP</option>
                <option value="SMA">SMA</option>
                <option value="SMK">SMK</option>
            </select>

            <label for="" class="mt-2">Tanggal Gaji</label>
            <input type="date" class="form-control mt-1" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="" name="tanggal" required>


            <center>
                <table>
                    <tr>
                        <td>
                            <h3 class="text-center mt-2">Gaji</h3>
                        </td>
                        <td></td>
                        <td>
                            <h3 class="text-center mt-2">Potongan</h3>
                        </td>
                    </tr>
                    <tr>
                        <td>Jabatan</td>
                        <td></td>
                        <td>BPJS</td>
                    </tr>
                    <tr>
                        <td>
                            <select name="jabatan" id="" class="form-control mb-1" style="width: 380px;" required>
                                <option value="" disabled selected>Pilih Jabatan</option>
                                <option value="Kepala Sekolah">Kepala Sekolah</option>
                                <option value="Wakasek">Wakasek</option>
                                <option value="Guru">Guru</option>
                                <option value="Karyawan">Karyawan</option>
                            </select>
                        </td>
                        <td></td>
                        <td><input type="number" name="bpjs" required class="form-control mb-1" style="width: 380px;" placeholder="BPJS"></td>
                    </tr>
                    <tr>
                        <td>Lama Kerja</td>
                        <td></td>
                        <td>Pinjaman</td>
                    </tr>
                    <tr>
                        <td><input type="number" name="lama" required placeholder="Lama Kerja" class="form-control mb-1"></td>
                        <td></td>
                        <td><input type="number" name="pinjaman" required placeholder="Pinjaman" class="form-control mb-1"></td>
                    </tr>
                    <tr>
                        <td>Status Kerja</td>
                        <td></td>
                        <td>Cicilan</td>
                    </tr>
                    <tr>
                        <td>
                            <select name="status" id="" class="form-control mb-1" required>
                                <option value="" disabled selected>Pilih Status Kerja</option>
                                <option value="Tetap">Tetap</option>
                                <option value="Kontrak">Kontrak</option>
                            </select>
                        </td>
                        <td></td>
                        <td><input type="number" name="cicilan" required placeholder="Cicilan" class="form-control mb-1" id=""></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Infaq</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><input type="number" name="infaq" required placeholder="Infaq" class="form-control mb-1" id="rupiah"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="proses" value="Proses" class="form-control mt-1 bg-primary"></td>
                        <td></td>
                    </tr>
                </table>
            </center>

           
        </div>
    </div>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>