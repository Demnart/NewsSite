<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Изменение новости</title>
</head>
<body>
    <div style="text-align: center">
        <span><a href="/index.php">Главная</a></span>
        <span><a href="/Views/add.php">Добавить новость</a></span>
        <span><a href="/Views/delete.php">Удалить новость</a></span>
    </div>
    <?php if (isset($_SESSION['error'])) {
        echo $_SESSION['error'];
    }
        unset($_SESSION['error']);
    ?>
<table style="border: 1px solid black;border-collapse: collapse;margin: 0 auto;text-align: center">
    <form action="/functions/update.php" method="post">
        <tr>
            <td style="border: 1px solid black"><label for="id">Номер новости</label></td>
            <td style="border: 1px solid black"><input type="text" name="id" id="id"></td>
        </tr>
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
            <td style="border: 1px solid black"><label for="title">Название новости: </label></td>
            <td style="border: 1px solid black"><input type="text" name="title" id="title" placeholder="Название новости"></td>
        </tr>
        <tr>
            <td style="border: 1px solid black" colspan="2"><textarea name="text" id="text" cols="70" rows="10"></textarea></td>
        </tr>
        <tr>
            <td style="border: 1px solid black"><label for="author">Автор </label></td>
            <td style="border: 1px solid black"><input type="text" name="author"></td>
        </tr>
        <tr>
            <td style="border: 1px solid black" colspan="2"><input type="submit" value="Отправить"></td>
        </tr>
    </form>
</table>
</body>
</html>