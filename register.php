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
        <div>
            <a class="board__btn" href="index.php">回留言板</a>
            <a class="board__btn" href="login.php">登入</a>
        </div>
        <h1 class="board__title">註冊</h1>
        <?php
        if (!empty($_GET['errCode'])) {
            $code = $_GET['errCode'];
            $msg = 'Error';
            if ($code === '1') {
                $msg = '資料不齊全';
            } elseif ($code === '2') {
                $msg = 'username重複';
            }
            echo '<h2>' . $msg . '</h2>';
        }
        ?>
        <form class="board__new-comment-form" method="POST" action="handle_register.php">
            <div class="board__nickname">
                <span>暱稱:</span>
                <input type="text" name="nickname" />
            </div>
            <div class="board__nickname">
                <span>帳號:</span>
                <input type="text" name="username" />
            </div>
            <div class="board__nickname">
                <span>密碼:</span>
                <input type="password" name="password" />
            </div>

            <input class="board__submit-btn" type="submit" />
        </form>



    </main>
</body>

</html>