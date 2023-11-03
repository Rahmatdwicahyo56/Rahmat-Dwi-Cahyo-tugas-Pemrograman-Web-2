<!DOCTYPE html>
<html>
<head>
    <title>Daftar Negara ASEAN</title>
</head>
<body>
    <?php
    // Buat array negara ASEAN awal
    $negaraASEANAwal = ["Indonesia", "Singapura", "Malaysia", "Brunei", "Thailand"];

    // Buat array negara ASEAN baru
    $negaraASEANBaru = ["Indonesia", "Singapura", "Malaysia", "Brunei", "Thailand", "Laos", "Filipina", "Myanmar"];

    // Tampilkan daftar negara ASEAN awal dalam format HTML
    echo "<h2>Daftar Negara ASEAN awal :</h2>";
    echo "<ul>";
    foreach ($negaraASEANAwal as $negara) {
        echo "<li>$negara</li>";
    }
    echo "</ul>";

    // Tampilkan daftar negara ASEAN baru dalam format HTML
    echo "<h2>Daftar Negara ASEAN baru:</h2>";
    echo "<ul>";
    foreach ($negaraASEANBaru as $negara) {
        echo "<li>$negara</li>";
    }
    echo "</ul>";
    ?>
</body>
</html>
