<?php
declare(strict_types = 1);
header('Content-type: application/json');

$filesPattern = __DIR__ . '/html/*.{html}';

// Получение всех файлов с расширением html из папки html
$files = glob($filesPattern, GLOB_BRACE);
$returnFiles = [];

foreach ($files as $file) {
	$returnFiles[basename($file)] = $file;
}

echo json_encode($returnFiles);