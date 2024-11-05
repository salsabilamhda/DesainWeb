<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Aman</title>
</head>
<body>
    <h2>Form Input Aman</h2>

    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <label for="input">Masukkan teks:</label>
        <input type="text" id="input" name="input" required><br><br>

        <label for="email">Masukkan email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <input type="submit" value="Kirim">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Proses input teks
        $input = $_POST['input'];
        $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
        echo "<p>Input yang aman: " . $input . "</p>";

        // Memeriksa apakah input adalah email yang valid
        $email = $_POST['email'];
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<p>Email yang valid: " . htmlspecialchars($email, ENT_QUOTES, 'UTF-8') . "</p>";
        } else {
            echo "<p>Email tidak valid. Silakan masukkan email yang benar.</p>";
        }
    }
    ?>
</body>
</html>
