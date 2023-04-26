<!DOCTYPE html>
<html>
<head>
	<title>Клиент-серверное приложение</title>
	<style>
		pre {
			font-family: monospace;
			background-color: #f0f0f0;
			padding: 20px;
			border-radius: 5px;
			overflow-x: auto;
			max-width: 80%;
			margin: 50px auto;
			font-size: 18px;
		}
	</style>
</head>
<body>
	<?php
		if (isset($_POST['submit2'])) {
			$file = $_FILES['file']['tmp_name'];
			$content = file_get_contents($file);
			$content = highlight_string($content, true);
			echo "<pre>{$content}</pre>";
		}
	?>
	<form action="index.php">
		<button type="submit">Назад к выбору</button>
	</form>
</body>
</html>
