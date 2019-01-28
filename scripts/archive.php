<?php

set_time_limit(300);

include './GoodZipArchive.php';

$config = include '../config.php';

$folder = $config['path'] . '/' . $_GET['folder'];
$archiveFile = $folder . '/archive.zip';

if (!file_exists($archiveFile)) {
    Zip($folder, $archiveFile);
}

header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename=' . basename($archiveFile));
header('Content-Transfer-Encoding: binary');
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: ' . filesize($archiveFile));
ob_clean();
flush();
readfile($archiveFile);
exit;
