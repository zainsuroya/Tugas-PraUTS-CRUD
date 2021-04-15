<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>MyApp - Data Pegawai</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="assets/dist/css/custom.css" rel="stylesheet">

</head>

<body>

    <div class="container">
        <?php
        session_start();
        // define('BASE_URL', 'http://localhost/pwl/prauts/');
        global $member;
        global $role;
        require_once 'koneksi.php';
        include_once 'header.php';
        include_once 'menu.php';
        ?>
    </div>

    <main role="main" class="container">

        <div class="row">
            <div class="col-md-9 blog-main">
                <?php include_once 'main.php'; ?>
            </div>
            <aside class="col-md-3 blog-sidebar">
                <?php include_once 'sidebar.php'; ?>
            </aside>
        </div>

        <?php include_once 'footer.php'; ?>

    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>

</html>