<?php
include('pass.php');
include('connection_database.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>

    <form action="add_nickname_database.php" method="post">
        <p>
            <label for="Class">Class :</label>
            <input type="text" name="Class" id="Class">
        </p>

        <input type="submit" value="Submit">
    </form>

</body>
</html>