<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li>
            <?php
                echo "<h2> " . $data['title']. "</h2>";
                echo "<p> " . $data['content']. "</p>";
            ?>
        </li>
    </ul>
</body>
</html>