<?php

/** @var yii\web\View $this */


use yii\helpers\Url;

$this->title = 'Путешествия';
?>
<main>
    <h1 class="travel-name"> Путешествия </h1>
    <section class="feautered">
        <h2> Избранные темы </h2>
        <ul class="topics">
            <li>
                <h3 class="baical-name"> <a href="#">Прекрасная поездка на озеро Байкал </a> </h3>
                <p class="baikal-description">самое глубокое озеро на планете, крупнейший природный резервуар пресной воды и самое большое по площади пресноводное озеро на континенте.</p>
                <img src="image/baikal.png" class="topic-image" width="181" height="181"  alt="baikal">
            </li>
            <li>
                <h3> <a href="#">Невероятная архитектура,вдохновленная природой </a></h3>
                <p> Направление в архитектуре XX века, возникшее в качестве альтернативы историческим стилям и эклектизму.</p>
                <img src="image/nature.jpg" class="topic-image" width="181" height="181"  alt="nature">
            </li>

            <li class="richard">
                <h3> <a href="#"> Ричард Нортон фотореалистичный рендер </a></h3>
                <p> Использование фотореалистичного рендеринга. Фотореализм – это высший пилотаж CG дизайнера</p>
                <img src="image/richard.jpg" class="topic-image" width="181" height="181" alt="richard">
            </li>

        </ul>
    </section>
    <div class="trip">
        <h2> <a href="#">20 неожиданных направлений для поездки </a></h2>
        <p> Разные неожиданные направления для твоего путешествия уже собраны здесь</p>
    </div>

    <section class="big-world">
        <h2>
            Большой мир
        </h2>

        <ul class="world">
            <li>
                <img src="image/artist.jpg" class="world-image" width="287" height="200">
                <h3><a href="#">Художница Мелисса Китти Джаррам обновляет греческие мифы к 2022 году</a> </h3>
                <p> Художница Мелисса Китти Джаррам обновляет греческие мифы к 2022 году</p>

            </li>
            <li>
                <img src="image/city.jpg" class="world-image" width="287" height="200">
                <h3> <a href="#">Полное руководство по поездке по золотому кольцу Исландии</a> </h3>
                <p>Полное руководство по поездке по золотому кольцу Исландии </p>

            </li>
            <li class="america">
                <img src="image/restaurant.jpg" class="world-image" width="287" height="200">
                <h3> <a href="#"> 10 приключений в Северной Америке</a> </h3>
                <p> Разные путешествия по Северной Америке</p>

            </li>
            <li>
                <img src="image/piter funch.jpg" class="world-image" width="287" height="200">
                <h3> <a href="#"> Питер Фанч делится книгами, которые вдохновляют его</a> </h3>
                <p> Популярный фотограф делится книгами, которые вдохновили его на шедевры</p>

            </li>
        </ul>

    </section>


</main>