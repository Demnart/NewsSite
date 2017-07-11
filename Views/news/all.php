<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php foreach ($items as $value):?>
<table style="border: 1px solid black;border-collapse: collapse;margin: 0 auto;width: 600px">
    <tr>
        <td style="border: 1px solid black;text-align: center" colspan="2"><?php echo $value->title?></td>
    </tr>
    <tr>
        <td style="border: 1px solid black" colspan="2"> <?php echo $value->text?></td>
    </tr>
    <tr>
        <td style="border: 1px solid black;text-align: right" colspan="2"> <?php echo $value->author?></td>
    </tr>
</table>
    <br>
<?php endforeach;?>
</body>
</html>