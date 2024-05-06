<?php
require_once("./conn.php");

$nickname = $_POST['nickname'];
$content = $_POST['content'];


if (empty($nickname) || empty($content)) {
    header('Location:index.php?errCode=1');
    die('資料不齊全');
}


$sql = "INSERT INTO comments(nickname,content) VALUES('$nickname',
'$content')";
$result = $conn->query($sql);

if ($result) {
    header("Location:./index.php");
} else {
    die("failed." . $conn->error);
}
