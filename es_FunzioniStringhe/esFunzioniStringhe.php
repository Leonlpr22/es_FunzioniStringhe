<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        $str = "Nunc blandit est at lacus varius, a posuere nunc malesuada. Aliquam erat volutpat. Sed id diam nunc. Nullam sapien nulla, cursus eu varius faucibus, molestie in arcu. Cras dapibus velit elit, aliquam eleifend massa porta eu. Sed velit leo, faucibus ac massa in, vulputate iaculis erat. Sed eget nibh ex. Sed tempus congue neque, at sodales metus scelerisque non. Nulla vitae tellus eget nunc sagittis congue. Curabitur tincidunt orci euismod, ultrices orci non, auctor nulla. Curabitur nec commodo elit.";

        echo "<p style = 'color: green;'>$str</p>";
        
        echo "<p style = 'color: blue; '>" . strtoupper($str) . "</p>";

        echo "<p> il numero dei caratteri è: <span style = 'color: red;'>" . strlen($str) . "</span></p>";

        echo "<p> il numero di parole é: <span style = 'color: yellow'>" . str_word_count($str) . "</span></p>";

    ?>

</body>
</html>