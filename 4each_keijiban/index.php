<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>掲示板</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <?php
      mb_internal_encoding("utf8");
      $pdo=new PDO("mysql:dbname=lesson01;host=localhost","root","");
      $stmt=$pdo->query("select* from 4each_keijiban");
      ?>
    <img src="4eachblog_logo.jpg">
    <header>
      <ul>
        <li>トップ</li>
        <li>プロフィール</li>
        <li>4eachについて</li>
        <li>書籍フォーム</li>
        <li>問い合わせ</li>
        <li>その他</li>
      </ul>
    </header>
    <main>
      <div class="left">
        <h1>プログラミングに役立つ掲示板</h1>

        <form method="POST" action="insert.php">
          <h3>入力フォーム</h3>
          <p>ハンドルネーム</p>
          <input type="text" size="40" name="handlename">
          <p>タイトル</p>
          <input type="text" size="40" name="title">
          <p>コメント</p>
          <textarea rows="10" cols="60" name="comments"></textarea><br>
          <input type="submit" value="投稿する" class="submit">
        </form>
        <?php
        while($row=$stmt->fetch()){
        echo "<div class='touko'>";
        echo "<h3>".$row['title']."</h3>";
        echo  "<p>".$row['comments']."</p>";
        echo  "<p class='name'>posted by ".$row['handlename']."</p>";
        echo "</div>";}
        ?>
        
      </div>
      <div class="right">
        <h2>人気の記事</h2>
        <ul>
          <li>PHPオススメ本</li>
          <li>PHP MyAdminの使い方</li>
          <li>いま人気のエディタTop5</li>
          <li>HTMLの基礎</li>
        </ul>
        <h2>オススメリンク</h2>
        <ul>
          <li>インターノウス株式会社</li>
          <li>XAMPPのダウンロード</li>
          <li>Eclipseのダウンロード</li>
          <li>Bracketsのダウンロード</li>
        </ul>
        <h2>カテゴリ</h2>
        <ul>
          <li>HTML</li>
          <li>PHP</li>
          <li>MySQL</li>
          <li>JavaScript</li>
        </ul>
      </div>
    </main>
    <footer>
      <p>copyright © internouse | 4each blog the which provides A to Z about programming.</p>
    </footer>
  </body>
</html>