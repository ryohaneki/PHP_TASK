<?php
$t = date("H");

if ($t < "10") {
  echo "Have a good morning!";
} elseif ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="Index.js"></script>
    <title>ryo_php_task</title>
</head>
<body>
    <nav class="main-title">
        <div class="nav-ber">
        <a href="http://localhost/php_task.html/php_task.php">Laravel News</a>
        </div>
    </nav>
      
    <section class="input-form">
        <h1 class="form-header">さぁ、最新のニュースをシェアしましょう</h1>
        <form action="ryo_php_task/posts" method="POST" onSubmit="return check()">
            <div class="input-title">    
                <label for="title">タイトル:</label>
                <input type="text" name="title">
            </div>
            <div class="input-article">
                <label for="article">記事:</label>
                <input type="text" name="article">
            </div>
            <div class="submit">    
                <input type="submit" value="投稿"/>
            </div>
        </form>
    </section>

    <section class="post">
        <div class="post">
            <h2 class="post-title">タイトル文</h2>
            <p class="post-article">記事の文</p>
            <a href="php_task_posts.php">記事全文・コメントを見る</a>
        </div>
    </section>
    
</body>
</html>