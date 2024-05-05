<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
</head>
<body>
    <h1>Admin Panel</h1>
    <form action="add_game.php" method="post" enctype="multipart/form-data">
        <label for="game_name">Game Name:</label>
        <input type="text" name="game_name" id="game_name"><br>
        <label for="game_description">Game Description:</label><br>
        <textarea name="game_description" id="game_description" cols="30" rows="10"></textarea><br>
        <label for="game_image">Game Image:</label>
        <input type="file" name="game_image" id="game_image"><br>
        <input type="submit" value="Add Game">
    </form>
</body>
</html>
