<?php
require "views/header.php";

$page = isset($_GET['page']) ? $_GET['page'] : 'home';

$path = $page . ".php";

if ($page == 'home') {
    require "views/home.php";
} else {
    if (file_exists("modules/" . $path)) {
        require "modules/" . $path;
    } else {
        echo "<h2>404 - Halaman tidak ditemukan</h2>";
    }
}

require "views/footer.php";
?>
