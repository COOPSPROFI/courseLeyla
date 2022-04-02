<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link rel="icon" href="img/icons/logo.svg" type="image/gif" sizes="16x16">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <title>OStudio</title>
</head>
<body>
    
<header class="header">
        <div class="container">
            <div class="header__inner">
                <nav class="nav__wrapper">
                    <a href="index.html" class="nav__logo">
                        <img src="{{ asset('img/icons/logo.svg') }}" alt="Логотип">
                    </a>
                    <a href="#actual__course" class="nav__link">О студии</a>
                    <a href="#main__title" class="nav__link">Выбрать курс</a>
                    <a href="#reviews" class="nav__link">Отзывы</a>
                    <a href="#footer" class="nav__link">Контакты</a>
                </nav>
                <!--<button class="header__auth">
                    <img src="img/icons/user.svg" alt="Авторизация">
                </button>-->
            </div>
        </div>
</header>

    <form action="{{ route('courses.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name">
        <input type="text" name="description">
        <input type="file" name="img">
        <input type="submit">
    </form>

</body>
</html>