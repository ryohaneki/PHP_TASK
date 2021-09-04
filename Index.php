<?php
if($_POST["submit"]){
    $filename=$_POST["Index.txt"];
    $title=$_POST["title"];
    $article=$_POST["article"];
    
    if(!empty($title) && !empty($article)){
        $fp = fopen($filename, "a");
        $fwrite=($fp);
        fclose($fp);
    }elseif(empty($title) && !empty($article)){
        echo 'タイトルは必須です';
    }elseif(31<mb_strlen($title)){
        echo '文字数が多い';
    }elseif(!empty($title) && empty(article)){
        echo '記事は必須です';
    }else{
        echo 'タイトルは必須です';
        echo '記事は必須です';
    }
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
        <a href="http://localhost/php_task/">Laravel News</a>
        </div>
    </nav>
      
    <section class="input-form">
        <h1 class="form-header">さぁ、最新のニュースをシェアしましょう</h1>
        <form action="" method="POST" onSubmit="return check()">
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
</body>
</html>