<?php

$projectFolder = '/corephp-templates/';

function getRootPath()
{
    return (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';
}
function getProjectPath()
{
    return (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $GLOBALS['projectFolder'];
}
function getAssetPath()
{
    return (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $GLOBALS['projectFolder']. "assets/";
}
function getPagesPath()
{
    return (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $GLOBALS['projectFolder']. "pages/";
}

function allPath()
{
    $allPath = array(
        'root_path' => getRootPath(),
        'project_path' => getProjectPath(),
        'asset_path'	=> getAssetPath(),
        'pages_path'	=> getPagesPath(),
    );
    return $allPath;
}

function defaultTest(){
    return '<h3>Functions from php/functions.php!';
}
