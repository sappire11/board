<?php
require_once("conn.php");

$result = $conn->query("SELECT * FROM comments ORDER BY id DESC");
if (!$result) {
    die('error:' . $conn->error);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>留言板</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header class="warning">
        <strong>注意!此為練習用網站，故忽略資安的實作，註冊時請勿輸入任何個人資訊
        </strong>
    </header>
    <main class="board">
        <h1 class="board__title">Comments</h1>
        <form class="board__new-comment-form" method="POST" action="handle_add_comment.php">
            <div class="board__nickname">
                <span>暱稱:</span>
                <input type="text" name="nickname" />
            </div>
            <textarea name="content" rows="5"></textarea>
            <input class="board__submit-btn" type="submit" />
        </form>
        <div class="board__hr"></div>
        <section>
            <?php
            while ($row = $result->fetch_assoc()) {
            ?>
                <div class="card">
                    <div class="card__avatar">
                    </div>
                    <div class="card__content">
                        <div class="card__info">
                            <span class="card__author"><?php echo $row['nickname']; ?></span>
                            <span class="card__time"><?php echo $row['created_at']; ?></span>
                        </div>
                        <p class="card__content"><?php echo $row['content']; ?></p>
                    </div>
                </div>
            <?php
            }
            ?>
        </section>

    </main>
</body>

</html>