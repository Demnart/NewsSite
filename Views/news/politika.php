<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Политика</title>
    </head>
    <body>
    <?php foreach ($items as $value):?>
        <table style="border: 1px solid black;border-collapse: collapse;margin: 0 auto; text-align: center">
        <tr>
            <td style="border: 1px solid black"><?php echo $value->title?></td>
        </tr>
        <tr>
            <td style="border: 1px solid black"><?php echo $value->text?></td>
        </tr>
            <tr>
                <td style="border: 1px solid black;text-align: right"><?php echo $value->author?></td>
            </tr>
        </table>
    <?php endforeach;?>
    <br>
    </body>
</html>