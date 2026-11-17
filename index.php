<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generator 4 Segitiga Bintang Sekaligus</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Program 4 Segitiga Bintang</h2>
    <form method="POST" action="">
        <div class="form-group">
            <label for="tinggi">Masukkan Tinggi Segitiga (1 - 20):</label>
            <input type="number" id="tinggi" name="tinggi" min="1" max="20" value="<?= isset($_POST['tinggi']) ? htmlspecialchars($_POST['tinggi']) : '' ?>" required>
        </div>

        <button type="submit" name="submit">Tampilkan Semua Segitiga</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $tinggi = $_POST['tinggi'];

        // Validasi input: 1 sampai 20
        if (!filter_var($tinggi, FILTER_VALIDATE_INT) || $tinggi < 1 || $tinggi > 20) {
            echo '<div class="error">⚠️ Masukan tidak valid! Harap masukkan bilangan bulat antara 1 sampai 20.</div>';
        } else {
            echo '<div class="result-container">';

            // 1. Segitiga Menghadap Ke Atas
            echo '<div class="result-box">';
            echo '<h4>Menghadap Ke Atas</h4>';
            echo '<div class="result">';
            for ($i = 1; $i <= $tinggi; $i++) {
                for ($j = 1; $j <= ($tinggi - $i); $j++) { echo "  "; }
                for ($k = 1; $k <= (2 * $i - 1); $k++) { echo "* "; }
                echo "\n";
            }
            echo '</div></div>';

            // 2. Segitiga Menghadap Ke Bawah
            echo '<div class="result-box">';
            echo '<h4>Menghadap Ke Bawah</h4>';
            echo '<div class="result">';
            for ($i = $tinggi; $i >= 1; $i--) {
                for ($j = 1; $j <= ($tinggi - $i); $j++) { echo "  "; }
                for ($k = 1; $k <= (2 * $i - 1); $k++) { echo "* "; }
                echo "\n";
            }
            echo '</div></div>';

            // 3. Segitiga Menghadap Ke Kanan
            echo '<div class="result-box">';
            echo '<h4>Menghadap Ke Kanan</h4>';
            echo '<div class="result">';
            for ($i = 1; $i <= $tinggi; $i++) {
                for ($j = 1; $j <= $i; $j++) { echo "* "; }
                echo "\n";
            }
            for ($i = $tinggi - 1; $i >= 1; $i--) {
                for ($j = 1; $j <= $i; $j++) { echo "* "; }
                echo "\n";
            }
            echo '</div></div>';

            // 4. Segitiga Menghadap Ke Kiri
            echo '<div class="result-box">';
            echo '<h4>Menghadap Ke Kiri</h4>';
            echo '<div class="result">';
            for ($i = 1; $i <= $tinggi; $i++) {
                for ($j = 1; $j <= ($tinggi - $i); $j++) { echo "  "; }
                for ($k = 1; $k <= $i; $k++) { echo "* "; }
                echo "\n";
            }
            for ($i = $tinggi - 1; $i >= 1; $i--) {
                for ($j = 1; $j <= ($tinggi - $i); $j++) { echo "  "; }
                for ($k = 1; $k <= $i; $k++) { echo "* "; }
                echo "\n";
            }
            echo '</div></div>';

            echo '</div>';
        }
    }
    ?>
</div>

</body>
</html>