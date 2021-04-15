<?php
session_start();
//session_destroy();
unset($_SESSION['MEMBER']);
//landing page
header('Location:' . $url . 'index.php?hal=home');
