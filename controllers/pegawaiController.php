<?php
require_once '../koneksi.php';
require_once '../models/Pegawai.php';
require_once '../imageUpload.php';

// tangkap request element form
$tombol = $_POST['proses'];
if ($tombol !== 'hapus') {
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $agama = $_POST['agama'];
    $divisi = $_POST['divisi'];
    $foto = $_FILES["foto"]["name"] ? $_FILES["foto"]["name"] : NULL;

    // proses simpan foto
    if ($_FILES["foto"]["name"]) {
        $target_dir = "../assets/images/upload/";
        $target_file = $target_dir . basename($_FILES["foto"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["foto"]["tmp_name"]);
        if ($check !== false) {
            echo "<script>alert('File is an image - " . $check["mime"] . ".')</script>";
            $uploadOk = 1;
        } else {
            echo "<script>alert('File is not an image.')</script>";
            $uploadOk = 0;
        }

        // Check if file already exists
        if (file_exists($target_file)) {
            echo "<script>alert('Sorry, file already exists.')</script>";
            $uploadOk = 0;
        }

        // Check file size
        if ($_FILES["foto"]["size"] > 500000) {
            echo "<script>alert('Sorry, your file is too large.')</script>";
            $uploadOk = 0;
        }

        // Allow certain file formats
        if (
            $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif"
        ) {
            echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.')</script>";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            $foto = NULL;
            echo "<script>alert('Sorry, your file was not uploaded.')</script>";
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
                $foto = $_FILES["foto"]["name"];
                echo "<script>alert('The file " . htmlspecialchars(basename($_FILES["foto"]["name"])) . " has been uploaded.')</script>";
            } else {
                $foto = NULL;
                echo "<script>alert('Sorry, there was an error uploading your file.')</script>";
            }
        }
    }

    //menyimpan data2 di atas sebuah array
    $data = [
        $nip, $nama, $email, $agama, $divisi, $foto,
    ];
}

//proses
$obj = new Pegawai();

switch ($tombol) {
    case 'simpan':
        $obj->simpan($data);
        break;
    case 'ubah':
        $data[] = $_POST['idx'];
        $obj->ubah($data);
        break;
    case 'hapus':
        $id[] = $_POST['idx'];
        $obj->hapus($id);
        break;
    default: //tombol batal
        header('Location:' . BASE_URL . '?hal=dataPegawai');
        break;
}

//landing page
header('Location:' . BASE_URL . '?hal=dataPegawai');
