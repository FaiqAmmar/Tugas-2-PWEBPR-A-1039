<?php $title = 'Selamat Datang'; ?>

<?php include_once 'resources/views/master-layout/master-auth.php'; ?>

<?php
if (isset($_GET['auth'])) {
    echo "<script>alert('Silahkan login terlebih dahulu');</script>";
}
if (isset($_GET['failed'])) {
    echo "<script>alert('" . ucfirst($url) . " gagal');</script>";
}
if (isset($url)) {
    include_once $url . '.php';
}
?>

<?php include_once 'resources/views/master-layout/master-auth.php'; ?>