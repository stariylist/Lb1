<?php
$db = new PDO("mysql:host=127.0.0.1;dbname=films", "root", "");
require_once __DIR__ . "/film.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lb1</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="genre" placeholder="Жанр">
    <input type="submit"><br>
</form>
<?php
if(isset($_POST["genre"])) {
    genre($db, $_POST["genre"]);
}
?>
<br>
<form action="" method="post">
    <input type="text" name="actor" placeholder="Актер">
    <input type="submit"><br>
</form>
<?php
if(isset($_POST["actor"])) {
    actor($db, $_POST["actor"]);
}
?>
<br>
<form action="" method="post">
    <input type="date" name="start">
    <input type="date" name="end">
    <input type="submit"><br>
</form>
<?php
if(isset($_POST["start"])) {
    datePeriod($db, $_POST["start"], $_POST["end"]);
}
?>
</body>
</html>
