<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Добавление новости</title>
</head>
<body>
<table>
    <h1>Добавление новости</h1>
    <form method="post" action="/www/index.php" >
        <table>
            <tr><td>Заголовок:</td><td><input type="text" name="caption"></td></tr>
            <tr><td>Содержание:</td><td><input type="text" name="content"></td></tr>
            <tr><td></td><td><input type="submit" name="Отправить"></td></tr>
        </table>
    </form>
    <a href="/">На главную</a>
</table>
</body>
</html>