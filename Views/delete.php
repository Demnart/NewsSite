<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Удалить новость</title>
</head>
<body>
<div style="text-align: center">
    <span><a href="/index.php">Главная</a></span>
    <span><a href="/Views/add.php">Добавить новость</a></span>
    <span><a href="/Views/update.php">Изменить новость</a></span>
</div>

<table style="border: 1px solid black;border-collapse: collapse;margin: 0 auto; text-align: center">
    <form action="/functions/delete.php" method="post">
        <tr>
            <td style="border: 1px solid black"><label for="title">Название новости</label></td>
            <td style="border: 1px solid black"><input type="text" name="title" id="title"></td>
        </tr>
        <tr>
            <td colspan="2" style="1px solid black"><input type="submit" value="Отправить"></td>
        </tr>
    </form>
</table>

</body>
</html>