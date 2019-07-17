<?php
    $username = "root";
    $password = "";

    $database = new PDO('mysql:host=localhost;dbname=booklist;charset=UTF8', $username, $password);

    if($_POST['book_title']){
        $sql = 'INSERT INTO books (book_title) VALUES(:book_title)';
        $statement = $database->prepare($sql);
        $statement->bindParam(':book_title',$_POST['book_title']);
        $statement->execute();
        $statement = null;
    }

    $sql = 'SELECT * FROM books order by created_at desc';

    $statement = $database->query($sql);

    $records = $statement->fetchAll();

    $statement = null;

    $database = null;
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Booklist</title>
    </head>
    <body>
        <a href="booklist.php"><h1>Booklist</h1></a>
        <h2>書籍の登録フォーム</h2>
        <form action="booklist.php" method="POST">
            <input type="text" name="book_title" placeholder="書籍タイトルを入力" required>
            <input type="submit" name="submit_add_book" value="登録">
        </form>
        <h2>登録された書籍一覧</h2>
        <ul>
            <?php if($records){ ?>
                <?php foreach($records as $record){ ?>
                    <li><?php print htmlspecialchars($record['book_title'], ENT_QUOTES, 'UTF-8'); ?></li>
                <?php } ?>
            <?php } ?>
        </ul>
    </body>
</html>