<?php
require_once 'models/Pegawai.php';
$id = $_REQUEST['id'];
$obj = new Pegawai();
$rs = $obj->getPegawai($id);
?>

<div class="card mb-4">
    <div class="row no-gutters">
        <div class="col-sm-4">
            <img src="assets/images/upload/<?= (!empty($rs['foto'])) ? $rs['foto'] : "no-photo.png" ?>" class="img-fluid img-cover-100">
        </div>
        <div class="col-sm-8">
            <div class="card-body">
                <dl class="row mb-0">
                    <dt class="col-4">NIP</dt>
                    <dd class="col-8"><?= $rs['nip'] ?></dd>
                    <dt class="col-4">Nama</dt>
                    <dd class="col-8"><?= $rs['nama'] ?></dd>
                    <dt class="col-4">Email</dt>
                    <dd class="col-8"><?= $rs['email'] ?></dd>
                    <dt class="col-4">Agama</dt>
                    <dd class="col-8"><?= $rs['agama'] ?></dd>
                    <dt class="col-4">Divisi</dt>
                    <dd class="col-8"><?= $rs['divisi'] ?></dd>
                </dl>
                <a href="index.php?hal=dataPegawai" class="btn btn-secondary mt-3">Go back</a>
            </div>
        </div>
    </div>
</div>