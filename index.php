<?php
function findThis($pathRoot){
    $d = '';
    for($i = 0; $i < 20; $i++){//this will try 20 times recursively on upper folder
        if(file_exists($d.$pathRoot)){
            return $d;
        }else{
            $d.="../";
        }
    }
}
$pathToRoot = findThis('autoload.php');
include_once $pathToRoot.'autoload.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    
    <link rel="stylesheet" href="<?= getProjectPath().'node_modules/bootstrap/dist/css/bootstrap.min.css'; ?>">
    <link rel="stylesheet" href="<?= getAssetPath().'css/style.css'; ?>">
    
</head>
<body>
    <h1>Index works!</h1>
    <p>CSS is working! bg set to black, and font set to azure!</p>

    <div class="container">
        <button class="btn btn-primary">Primary</button>
        <button class="btn btn-danger">Danger</button>
        <button class="btn btn-success">Success</button>
        <button class="btn btn-info">Info</button>
        <button class="btn btn-warning">Warning</button>
    </div>


    <script src="<?= getAssetPath().'js/app.js' ?>"></script>
    <script src="<?= getProjectPath().'node_modules/bootstrap/dist/js/bootstrap.bundle.min.js'; ?>"></script>
</body>
</html>