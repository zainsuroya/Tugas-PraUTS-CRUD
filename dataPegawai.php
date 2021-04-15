<?php
require_once 'models/Pegawai.php';
$obj = new Pegawai();
$rs = $obj->dataPegawai();
?>

<div class="card mb-4">
    <div class="card-header">

        <div class="d-flex justify-content-between">
            <h4 class="mt-1">Data Pegawai</h4>
            <?php if (isset($member)) { ?>
                <a href="index.php?hal=formPegawai" class="btn btn-secondary">Tambah</a>
            <?php } ?>
        </div>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">NIP</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Agama</th>
                        <th scope="col">Divisi</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($rs as $peg) { ?>
                        <tr>
                            <td><?= $no; ?></td>
                            <td><?= $peg['nip']; ?></td>
                            <td><?= $peg['nama']; ?></td>
                            <td><?= $peg['email']; ?></td>
                            <td><?= $peg['agama']; ?></td>
                            <td><?= $peg['divisi']; ?></td>
                            <td class="text-nowrap">
                                <form method="POST" action="controllers/pegawaiController.php">
                                    <a href="index.php?hal=detailPegawai&id=<?= $peg['id']; ?>" class="btn btn-sm btn-secondary">Detail</a>
                                    <?php
                                    $role = $member['role'];
                                    if (isset($member)) {
                                    ?>
                                        <a href="index.php?hal=formEditPegawai&id=<?= $peg['id']; ?>" class="btn btn-sm btn-secondary">Ubah</a>
                                        <?php if ($role != 'staff') { ?>
                                            <button name="proses" value="hapus" onclick="return confirm('Are u sure?')" class="btn btn-sm btn-secondary">Hapus</button>
                                        <?php } ?>
                                        <input type="hidden" name="idx" value="<?= $peg['id']; ?>" />
                                    <?php } ?>
                                </form>
                            </td>
                        </tr>
                    <?php $no++;
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>