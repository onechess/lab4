<?php
declare(strict_types = 1);

/**
 * Возвращает содержимое файла с подсветкой найденных слов
 *
 * @param string $string Строка для поиска (содержимое файла)
 *
 * @return array|string|string[]|null
 */
function highlight(string $string) {
	global $searchMap; // Глобальная переменная слов для поиска
	
	$replace = array_flip(array_flip($searchMap)); // Удаление дубликатов
	$pattern = [];
	
	foreach ($replace as $k => $word) {
		$pattern[]='/\b(' . $word . ')\b/iu';
		$replace[$k]='</xmp><span class="mark">$1</span><xmp>';
	}
	
	return preg_replace($pattern, $replace, $string);
}

/**
 * Возвращает результат поиска
 *
 * @param array $files Массив файлов для поиска
 *
 * @return array
 */
function search(array $files): array {
	$result = [];
	
	foreach($files as $file) {
		$fileContent = '<xmp>' . file_get_contents($file) . '</xmp>';
		$highlightResult = highlight($fileContent);
		
		if ($fileContent !== $highlightResult) {
			$result[$file] = $highlightResult;
		}
	}
	
	return $result;
}

$filesPattern = __DIR__ . '/html/*.{html}';
$result = [];
$searchMap = filter_input(INPUT_GET, 'searchMap');

if (empty($searchMap)) {
	$result['error'] = 'Ошибка передаваемых данных';
}

if (!array_key_exists('error', $result)) {
	$searchMap = array_map('trim', explode(',', $searchMap));
	// Получение всех файлов с расширением html из папки html
	$files = glob($filesPattern, GLOB_BRACE);
	
	if (empty($files)) {
		$result['error'] = 'Ошибка файлы не найдены';
	}

	if (!array_key_exists('error', $result)) {
		// Переданный файл из формы. Если all, то поиск по всем файлам.
		$selectedFile = filter_input(INPUT_GET, 'selectedFile');
		$files = $selectedFile === 'all' ? $files : [$selectedFile];
		$result = search($files);
		
		if (empty($result)) {
			$result['error'] = 'Поиск не выдал результатов';
		}
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Контакты</title>
	<?php include_once 'templates/styles.html' ?>
</head>
<body>
<?php
include_once 'templates/header.php' ?>
<section>
	<h1 style="text-align: center;">Результаты поиска</h1>
	<div class="Container container" style="margin-top: 60px;">
		<div class="row">
			<div class="col">
				<div id="search-result">
					<?php if (!array_key_exists('error', $result)): ?>
						<?php foreach ($result as $key => $value): ?>
							<div class="file-name">Путь к файлу: <b><?= $key ?></b>:</div><br>
							<div class="file-content"><?= $value ?></div><br>
						<?php endforeach; ?>
					<?php else:?>
						<p><?= $result['error'] ?></p>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include_once 'templates/scripts.html' ?>
</body>
</html>