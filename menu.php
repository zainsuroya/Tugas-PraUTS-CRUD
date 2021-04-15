<nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded-bottom mb-4">
    <a class="navbar-brand text-monospace" href="index.php">MyApp</a>&emsp;
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <?php
        function active($param)
        {
            return isset($_GET['hal']) ? $_GET['hal'] == $param ? 'active' : '' : '';
        }
        ?>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item <?= active('home') . empty($_SERVER['QUERY_STRING']) ? 'active' : '' ?> ">
                <a class="nav-link" href="index.php?hal=home">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item <?= active('aboutUs') ?>">
                <a class="nav-link" href="index.php?hal=aboutUs">About Us</a>
            </li>
            <li class="nav-item dropdown <?= active('dataPegawai') ?>">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Data
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="index.php?hal=dataPegawai">Data Pegawai</a>
                </div>
            </li>
        </ul>
        <ul class="navbar-nav my-lg-0">
            <?php
            if (isset($_SESSION['MEMBER'])) $member = $_SESSION['MEMBER'];
            if (!isset($member)) {
            ?>
                <li class="nav-item <?= active('formLogin') ?>">
                    <a class="nav-link" href="index.php?hal=formLogin">Login</a>
                </li>
            <?php } else { ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?= $member['fullname']; ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="index.php?hal=profile">Profile</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
                </li>
            <?php } ?>
        </ul>
    </div>
</nav>