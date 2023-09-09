<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<h1>Добавить новую задачу</h1>

	<form method="POST" action="/todo">
		@csrf
		<label for="title">Заголовок:</label>
		<input type="text" name="title" id="title" required>
		<br>

		<label for="description">Описание:</label>
		<textarea name="description" id="description" required></textarea>
		<br>

		<button type="submit">Сохранить</button>
	</form>
</body>

</html>