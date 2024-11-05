<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regex untuk Angka</title>
</head>
<body>
    <h2>Regex untuk Angka</h2>

    <?php

    $pattern = '/[a-z]/'; // Cocokkan huruf kecil
    $text = 'This is a Sample Text.';
    if (preg_match($pattern, $text)) {
        echo "Huruf kecil ditemukan!";
    } else {
        echo "Tidak ada huruf kecil!";
    }

    $pattern = '/[0-9]+/'; // Cocokkan satu atau lebih digit
    $text = 'There are 123 apples.';
    echo "<p>Teks: $text</p>";

    if (preg_match($pattern, $text, $matches)) {
        echo "<p>Cocokkan: " . $matches[0] . "</p>";
    } else {
        echo "<p>Tidak ada yang cocok!</p>";
    }

    $pattern = '/apple/';
    $replacement = 'banana';
    $text = 'I like apple pie.';
    $new_text = preg_replace($pattern, $replacement, $text);
    echo $new_text; // Output: "I like banana pie."

    $pattern = '/go{1,3}d/'; // Cocokkan "god", "good", "goood", tapi tidak "gd" atau "goooood"
    $text = 'god is good.';
    if (preg_match($pattern, $text, $matches)) {
        echo "Cocokkan: " . $matches[0];
    } else {
        echo "Tidak ada yang cocok!";
    }






    ?>
</body>
</html>



