<!DOCTYPE html>
<html>
<head>
	<title>Клиент-серверное приложение</title>
	<style>
		form {
			display: flex;
			flex-direction: column;
			align-items: center;
			margin-top: 100px;
		}
		input[type="submit"] {
			margin-top: 20px;
			padding: 10px;
			font-size: 18px;
			background-color: #4CAF50;
			color: white;
			border: none;
			border-radius: 5px;
			cursor: pointer;
		}
	</style>
</head>
<body>
	<form action="display.php" method="post" enctype="multipart/form-data">
		<label for="file">Выберите файл:</label>
		<input type="file" name="file" id="file">
		<input type="submit" name="submit2" value="Отобразить содержимое">
	</form>
</body>
</html>
