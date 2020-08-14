<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul style="list-style: none;">
        <?php
            foreach($data as $row){
                echo $row['name']. '<br>';
                echo $row['Rank'];
                echo '<br><br>';
            }
        ?>
       
    </ul>
</body>
</html>