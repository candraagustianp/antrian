<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antrian</title>
</head>
<body>
    <form action="<?= site_url('Antrian/save') ?>" method="post">
            <div class="mb-3">
                <label for="tanggal" class="form-label">Pilih Tanggal</label>
                <input type="date" class="form-control" name="tanggal" id="tanggal" placeholder="Tanggal">
            </div>
            <div class="mb-3">
                <label for="layanan" class="form-label">Pilih Layanan</label>
                <select name="layanan" class="form-control" id="layanan">
                    <?php foreach($layanan as $l) {?>
                        <option value="<?=  $l['id'] ?>"><?= $l['nama'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="nik" class="form-label">Masukan NIK</label>
                <input type="text" name="nik" class="form-control" id="nik" placeholder="NIK">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Masukan Nama</label>
                <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Lengkap">
            </div>
            <div class="mb-3">
                <label for="no_telp" class="form-label">Masukan Nomor Telepon</label>
                <input type="text" name="no_telp" class="form-control" id="no_telp" placeholder="Nomor Telepon">
            </div>
            <div class="mb-1">
                <label for="pukul" class="form-label">Jam Kedatangan</label>
                <input type="hidden" name="pukul" class="form-control" id="pukul" >
            </div>
            
            <div class="d-grid gap-2">
                <button id="btnJam" class="btn btn-outline-primary btn-block" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePukul" aria-expanded="false" aria-controls="collapsePukul">
                    Pilih Jam Antri
                </button>
                <div class="collapse" id="collapsePukul">
                    <hr>
                    <div class="row no-gutters">
                    <?php 
                            $jam = strtotime($jam_buka);
                            while ($jam <= strtotime("-$waktu_layanan minutes", strtotime($jam_tutup))) {
                                ?>
                                <div class="col-sm-6 col-md-3">
                                    <div data-value="<?= date('h:i:s', $jam); ?>" class="jamklik card my-1 mx-2" data-bs-toggle="collapse" data-bs-target="#collapsePukul" aria-expanded="false" aria-controls="collapsePukul">
                                        <div class="card-body p-2 position-relative">
                                            <h4 class="m-0 text-center"><?= date('h:i:s', $jam) ?></h4>
                                            <span class="badge text-bg-danger position-absolute top-0 start-100 translate-middle">1</span>
                                        </div>
                                    </div>
                                </div>
                        <?php
                                $jam += strtotime("+$waktu_layanan minutes", strtotime($jam));
                            }
                        ?>
                    </div>
                </div>
            </div>
            <hr>

            <button type="submit" class="btn btn-primary btn-block">Submit</button>
    </form>
</body>
</html>