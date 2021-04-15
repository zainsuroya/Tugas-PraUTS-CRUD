<?php
require_once 'models/Pegawai.php';
$ar_agama = ['Islam', 'Protestan', 'Katolik', 'Hindu', 'Buddha', 'Konghucu'];
$obj = new Pegawai();
$rs = $obj->dataDivisi();
?>
<div class="card mb-4">
    <div class="card-header">
        Form Pegawai
    </div>
    <div class="card-body">
        <form method="POST" action="controllers/pegawaiController.php" enctype="multipart/form-data">
            <div class="form-group row">
                <label for="nip" class="col-4 col-form-label">NIP</label>
                <div class="col-8">
                    <input id="nip" name="nip" type="text" class="form-control" maxlength="5" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama Lengkap</label>
                <div class="col-8">
                    <input id="nama" name="nama" type="text" class="form-control" maxlength="50" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-4 col-form-label">Email</label>
                <div class="col-8">
                    <input id="email" name="email" type="email" class="form-control" maxlength="50" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="agama" class="col-4 col-form-label">Agama</label>
                <div class="col-8">
                    <select id="agama" name="agama" class="custom-select" required="required">
                        <option value="">Pilih Agama</option>
                        <?php foreach ($ar_agama as $agama) { ?>
                            <option value="<?= $agama ?>"><?= $agama ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="divisi" class="col-4 col-form-label">Divisi</label>
                <div class="col-8">
                    <select id="divisi" name="divisi" class="custom-select" required="required">
                        <option value="">Pilih Divisi</option>
                        <?php
                        foreach ($rs as $j) {
                        ?>
                            <option value="<?= $j['id'] ?>"> <?= $j['nama'] ?> </option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="foto" class="col-4 col-form-label">Foto</label>
                <div class="col-8">
                    <input id="foto" name="foto" type="file" class="form-control" accept="image/x-png,image/gif,image/jpeg">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="proses" type="submit" value="simpan" class="btn btn-secondary">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>