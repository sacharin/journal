<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Главная</title>
    <link rel="stylesheet" href="/styles.css">
</head>
<body>
    <header>
    <nav>
        <ul>
            <li><a href="/">Главная</a></li>
            <li><a href="/about">Авторы</a></li>
            <li><a href="/feedback">Обратная связь</a></li>
        </ul>
    </nav>
    </header>
    <main>
	<?php include 'views/'.$content_view; ?>
    </main>
</body>
</html>
