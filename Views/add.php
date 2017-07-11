<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Добавление Новости</title>
</head>
<body>
<div style="text-align: center">
    <span><a href="/index.php">Главная</a></span>
    <span><a href="/Views/update.php">Изменить новость</a></span>
    <span><a href="/Views/delete.php">Удалить новость</a></span>
</div>
<div style="text-align: center;color: red">
    <span><?php if (isset($_SESSION['error'])) {
            echo $_SESSION['error'];
            unset($_SESSION['error']);
        }
    ?></span>
</div>
<table style="margin: 0 auto;border: 1px solid black;border-collapse: collapse; text-align: center">
    <form action="/functions/add.php" method="post">
        <tr>
            <td style="border: 1px solid black"><label for="idTag">Выберите категорию: </label></td>
            <td style="border: 1px solid black"><select name="idTag" id="idTag">
                    <option value="1">Политика</option>
                    <option value="2">Проишествия</option>
                    <option value="3">Спорт</option>
                    <option value="4">Мода</option>
                </select></td>
        </tr>
        <tr>
            <td style="border: 1px solid black"><label for="title">Название новости:</label></td>
            <td style="border: 1px solid black"><input type="text" name="title" placeholder="Новость"></td>
        </tr>
        <tr>
            <td colspan="2"><textarea name="text"  cols="70" rows="10"></textarea></td>
        </tr>
        <tr>
            <td style="border: 1px solid black"><label for="title">Автор:</label></td>
            <td style="border: 1px solid black"><input type="text" name="author" placeholder="Автор"></td>
        </tr>
        <tr>
           <td colspan="2" style="border: 1px solid black"><input type="submit"></td>
        </tr>
    </form>
</table>
</body>
</html>