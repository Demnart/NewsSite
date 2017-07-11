<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $item->title?></title>
</head>
<body>

<table style="border: 1px solid black;border-collapse: collapse;margin: 0 auto;width: 600px">
    <tr>
        <td style="border: 1px solid black;text-align: center" colspan="2"><?php echo $item->title?></td>
    </tr>
    <tr>
        <td style="border: 1px solid black" colspan="2"> <?php echo $item->text?></td>
    </tr>
    <tr>
        <td style="border: 1px solid black;text-align: right" colspan="2"> <?php echo $item->author?></td>
    </tr>
</table>
</body>
</html>