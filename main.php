<?php
$hal = isset($_REQUEST['hal']) ? $_REQUEST['hal'] : ''; //tangkap request di url
if (!empty($hal)) {
    include_once $hal . '.php';
} else {
    include_once 'home.php';
}
?>