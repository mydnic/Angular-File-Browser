<?php
$config = include '../config.php';

header("Access-Control-Allow-Origin: *");

$dir = $config['path'];

if ($_GET['folder']) {
    $dir .= '/' . urldecode($_GET['folder']);
}

$files = scandir($dir);

$result = [];

foreach ($files as $file) {
    if ($file != '.' and $file != '..') {
        $result[] = [
            'is_dir'    => is_dir($dir . '/' . $file),
            'name'      => $file,
            'path'      => str_replace($config['path'] . '/', '', $dir . '/' . $file),
            'extension' => pathinfo($dir . '/' . $file, PATHINFO_EXTENSION),
        ];
    }
}

header('Content-Type: application/json');
echo json_encode($result);
