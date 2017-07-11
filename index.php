<?php
error_reporting(0);
require __DIR__ . '/autoload.php';

$contr = isset($_GET['contr']) ? $_GET['contr'] : 'AllNews';
$act = isset($_GET['act']) ? $_GET['act'] : 'All';

$controllerClassName = 'App\\Controllers\\' . $contr;
?>
<div style="text-align: center">
    <span><a href="/Views/add.php">Добавить новость</a></span>
    <span><a href="/Views/update.php">Обновить новость</a></span>
    <span><a href="/Views/delete.php">Удалить новость</a></span>
</div>
<br>
<?php
try{
$controller = new $controllerClassName();
$method = 'action' . $act;
$controller->$method();
}
catch (\App\Classes\Exception404 $e)
{
    $view = new \App\Classes\View();
    $errorDescription = [];
    $errorDescription['message'] = $e->getMessage();
    $errorDescription['code'] = $e->getCode();
    $view->error = $errorDescription;
    $view->display('error.php');
}
die;
?>

