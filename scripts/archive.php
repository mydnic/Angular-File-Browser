<?php

set_time_limit(300);

include './GoodZipArchive.php';

$config = include '../config.php';

$folder = $config['path'] . '/' . $_GET['folder'];

if (!file_exists($folder . '/archive.zip')) {
    new GoodZipArchive($folder, $folder . '/archive.zip');
}

$file = $folder . '/archive.zip';

header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename=' . basename($file));
header('Content-Transfer-Encoding: binary');
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: ' . filesize($file));
ob_clean();
flush();
readfile($file);
exit;
