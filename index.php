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
        </form>
    </main>
</body>

</html>