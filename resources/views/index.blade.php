<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
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
                        <img src="img/icons/logo.svg" alt="Логотип">
                    </a>
                    <a href="#actual__course" class="nav__link">О студии</a>
                    <a href="#main__title" class="nav__link">Выбрать курс</a>
                    <a href="#reviews" class="nav__link">Отзывы</a>
                    <a href="#footer" class="nav__link">Контакты</a>
                </nav>
            </div>
        </div>
    </header>

    <main class="main">
        <div class="container">
            <div id="actual__course">
                <div class="course">
                    <div class="course__title">
                        Курсы фотографии
                    </div>
                    <div class="course__description">
                        Курс “Основы фотографии” для начинающих - уверенный старт в мир фотографии и как профессия и как хобби.<br>
                        Под руководством опытных преподавателей вы научитесь техническим основам фотографии и не менее важному навыку - воплощению вашего творческого видения в жизнь.
                    </div>
                    <a href="#main__title" class="choosecourse">
                        Выбрать курс
                    </a>
                </div>
                <img src="img/group/Group%201.png" alt="Курсы фотографий">
            </div>
        </div>

        <div class="hotnews">
            <img src="img/group/Group%202.png" alt="">
            <div class="course">
                <div class="course__title">
                    Онлайн<br> студия фотографии
                </div>
                <div class="course__description">
                    Q - студио это не просто место, где вы научитесь основам фотографии.Это волшебное пространство, где вы погрузитесь в мир фотографии, научитесь создавать необыкновенные снимки, передавать детали и все краски этого прекрасного мира.
                </div>
            </div>
        </div>

         <div class="container">
            <div id="main__title">Наши Курсы</div>
            @foreach ($courses as $course)
                @if($loop->iteration % 2 == 0)
                <div class="our__courses">
                    <img src="/storage/img/courses/{{ $course->img }}" alt="Курсы фотографий">
                    <div class="course">
                        <div class="course__title">
                            {{ $course->name }}
                        </div>
                        <div class="course__description">
                            {{ $course->description }}
                        </div>
                        <a href="#" class="js-open-modal" data-modal="1">
                            Записаться
                        </a>
                    </div>
                </div>
                @else
                <div class="our__courses">
                    <div class="course">
                        <div class="course__title">
                            {{ $course->name }}
                        </div>
                        <div class="course__description">
                            {{ $course->description }}
                        </div>
                        <a href="#" class="js-open-modal" data-modal="1">
                            Записаться
                        </a>
                    </div>
                    <img src="storage/img/courses/{{$course->img}}" alt="Курсы фотографий">
                </div>
                @endif
                @endforeach

                <div id="reviews">
                    <div class="reviews__inner">
                        @foreach ($reviews as $review)
                        <div class="review">
                            <img src="storage/img/reviews/{{$review->img}}" alt="">
                            <div class="review__course">
                              <b>  {{ $review->course->name }} </b>
                            </div>
                            <div class="review__description">
                                {{ $review->description }}
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <a class="js-open-modal" data-modal="2">
                        Оставить отзыв
                    </a>
                </div>

        </div>
    </main>

    <footer id="footer">
        <div class="container">
            <div class="footer__inner">
                <div class="footer__social">
                    <a href="https://facebook.com/">
                        <img src="img/icons/FACEBOOK.svg" alt="Facebook">
                    </a>
                    <a href="https://instagram.com/">
                        <img src="img/icons/INSTAGRAM.svg" alt="Instagram">
                    </a>
                    <a href="https://vk.com/">
                        <img src="img/icons/VK.svg" alt="VK">
                    </a>
                </div>
                <a href="index.html" class="footer__logo">
                    <img src="img/icons/logo.svg" alt="Logo">
                </a>
                <div class="footer__contacts">
                    <a href="mailto:Leila_kul@mail.ru?subject=Заказ сайтов">
                    Leila_kul@mail.ru
                    </a>
                    <a href="tel:+78005553535">+8 800 555 35 35</a>
                </div>
            </div>
        </div>
    </footer>

<div class="modal" data-modal="1">
   <!--   Svg иконка для закрытия окна  -->
   <svg class="modal__cross js-modal-close" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24"><path d="M23.954 21.03l-9.184-9.095 9.092-9.174-2.832-2.807-9.09 9.179-9.176-9.088-2.81 2.81 9.186 9.105-9.095 9.184 2.81 2.81 9.112-9.192 9.18 9.1z"/></svg>
   <div class="formcourse">
      <img src="img/group/Group%2013%201.png" alt="" style="top: -30px; left: -30px;">
       <form action="{{ route('courserequests.store') }}" method="post" class="form__inner">
           @csrf
           <div class="course__title">Запишись на курс или получили бесплатную консультацию</div>
            <input type="text" placeholder="ФИО" name="fio" size="1" required>
            <input type="text" placeholder="Телефон" name="phone" required>
            <input type="text" placeholder="Почта" name="email" required>
            <select name="course_id">
               <option disabled selected>Выберите курс</option>
                @foreach ($courses as $course)
                <option value="{{ $course->id }}">{{ $course->name }}</option>
                @endforeach
            </select>
            <button type="submit">Отправить</button>
       </form>
       <img src="img/group/Group%2012%201.png" alt="" style="top: 230px; left: 30px;">
    </div>
</div>

<div class="modal" data-modal="2">
   <!--   Svg иконка для закрытия окна  -->
   <svg class="modal__cross js-modal-close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M23.954 21.03l-9.184-9.095 9.092-9.174-2.832-2.807-9.09 9.179-9.176-9.088-2.81 2.81 9.186 9.105-9.095 9.184 2.81 2.81 9.112-9.192 9.18 9.1z"/></svg>
   <div class="formreview">
       <form action="{{ route('reviews.store') }}" method="post" class="form__inner" enctype="multipart/form-data">
            @csrf
            <input type="text" placeholder="Имя" name="name" required>
            <textarea name="description" cols="3" rows="6" style="resize: none;"></textarea>
            <select name="course_id">
               <option disabled selected>Выберите курс</option>
                @foreach ($courses as $course)
                <option value="{{ $course->id }}">{{ $course->name }}</option>
                @endforeach
            </select>
            <input type="file" name="img">
            <button type="submit">Отправить</button>
       </form>
   </div>
</div>

<!-- Подложка под модальным окном -->
<div class="overlay js-overlay-modal"></div>

<script src="js/script.js"></script>

</body>
</html>
