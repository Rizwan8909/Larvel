<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Form for new Post</h3>
    <form action="<?php echo route('post.store');?>" method="POST">
    <!-- To access form it is must -->
    @csrf
    <input type="text" name="title"><br>
    <textarea name="content" id="" cols="30" rows="10"></textarea><br>
    <input type="submit" value="Add a new Post"><br>
    </form>
</body>
</html>