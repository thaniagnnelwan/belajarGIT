<?php
// form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // apakah perasaan telah dipilih
    if (isset($_POST['feelings'])) {
        // Tangkap data perasaan
        $feeling = $_POST['feelings'];

        // Simpan perasaan ke dalam session
        session_start();
        $_SESSION['feeling'] = $feeling;

        // Redirect kembali ke halaman utama
        header("Location: index.php");
        exit;
    }
}
