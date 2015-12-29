<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Новости</title>
</head>
<body>
    <h1>Новости проекта</h1>
    <table>
        <tr><th>Дата добавления</th><th>Заголовок</th><th>Содержание</th></tr>
        <?php
        foreach($news as $item){
            ?><tr>
                <td><?php echo $item["date"];?></td>
                <td><?php echo $item["caption"];?></td>
                <td><?php echo $item["content"];?></td>
                <td><a href="view/delete_news.php?id=<?php echo trim($item["id"]);?>">Удалить</a></td>
            </tr><?php
        }
        ?>
    </table>
    <a href="view/add_news.php">Добавить новость</a>
</body>
</html>