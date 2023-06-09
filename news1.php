<!DOCTYPE html>
<html lang="ru">
<head> 
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet">
    <title>Новости</title>
</head>
<body> 
<header> 
    
    <nav class="main-header-nav"> 
        <ul class="site-navigation"> 
            <li class="site-navigation-item">
                <a class="active" href="#">Новости</a>
            </li>
            <li class= "site-navigation-item">
                <a href="page-travel.html">Путешествия</a> 
            </li>
            <li class="site-navigation-item">
                <a href="page-art.html">Искусство</a>
            </li>
            
        </ul>
    </nav>
</header>

<main> 
    <section class="prewie">
        <h1> «Моя красота — тяжелый труд»: как живет модель-инвалид, которая с детства не может ходить </h1>
        <p class="description-main"> Каждый день из жизни Аллы Нурмагомедовой — это доказательство самой себе, на что она способна.<br>
             В раннем детстве девушке диагностировали спинально-мышечную атрофию (СМА) — генетическую болезнь, из-за которой она потеряла возможность ходить и делать свободные движения руками. <br>
             Сама Алла относится к своему состоянию по-философски и успевает делать то, что многим из нас даже не снится.
             Делимся ее потрясающей историей!
        </p>
    </section>
    <div>
        <img src="image/alla.jpg" class="alla" width="604" height="623" alt="Алла Нурмагомедова">
        <p class="description"> 
            Я была еще очень маленькой, когда мне диагностировали спинально-мышечную атрофию. Выяснилось это буквально случайно: родители замечали, что на фоне сверстников я очень слабенькая.
             Пока другие дети начинали делать уверенные шаги, я падала, просилась на руки и обратно в коляску. 
             К тому же в отличие от других младенцев я постоянно искала опору — будь то угол мебели или дерево на улице. Тогда я еще не умела говорить — но всем своим видом показывала, как мне тяжело. 
             Неврологи подтвердили опасения родителей и довольно быстро определили конкретный диагноз — одну из легких форм СМА. 
             Как вспоминает моя мама, во время приема главврач открыл большую энциклопедию детских заболеваний, на развороте про СМА, и протянул ей, а сам вышел из кабинета. 
        </p> 
        <strong> 
            В книге были проиллюстрированы крайне тяжелые случаи — а в тексте говорилось, что такие люди долго не живут и не могут даже сами глотать пищу. На тот момент моей маме было всего 19 лет. Как она, вчерашняя школьница, всё это вынесла, не представляю... 
        </strong>
        <p class="description">
            Небольшой город в провинции, конец «девяностых»... У моих родителей не то, чтобы не было возможности зайти в интернет и больше почитать про СМА — они не могли добиться подробностей даже от врачей! У местных специалистов не было достаточной практики, чтобы помочь нашей семье. Именно поэтому у меня развивались сопутствующие осложнения: крайняя степень сколиоза, которую можно исправить только серьезной операцией, и контрактура ног, то есть невозможность полностью разгибать суставы. 
            Я прекрасно помню тот день, когда у нас дома появился компьютер и возможность выйти в интернет — мне тогда было 8 или 9 лет. Первым делом родители стали читать информацию о моем диагнозе, а также разыскивать семьи с такими же детьми — чтобы хотя бы общаясь с ними узнать, что меня может ждать в будущем.  

            <i>Теперь я считаю своей целью рассказывать людям о том, каково жить с такой болезнью. Я активно веду соцсети, выступаю на различных мероприятиях и подробно отвечаю на сообщения молодых мам, детям которых диагностировали СМА.
                Я рассказываю им, на что стоит обратить внимание, чтобы предотвратить более серьезные последствия. Мне часто говорят, что своим примером я доказываю самое главное: не нужно бояться своей болезни — нужно уметь жить с ней и любить свою жизнь, наполняя ее яркими событиями и моментами.  
            </i>
        </p>
    </div>
    <div class="references">
            <a href="main-page.html" class="exit"> Назад </a>
            <a href="news2.html" class="continue">Далее</a>

    </div>

    <form name="comment" action="comment.php" method="post">
        <p>
          <label>Имя:</label>
          <input type="text" name="name" />
        </p>
        <p>
          <label>Комментарий:</label>
          <br />
          <textarea name="text_comment" cols="30" rows="50"></textarea>
        </p>
        <p>
          <input type="hidden" name="page_id" value="150" />
          <input type="submit" value="Отправить" />
        </p>
      </form>
      <?php
    $con = mysqli_connect("localhost", "root", "", "DB");
    mysqli_set_charset($con, "utf8");

    if ($con == false) {
        echo ("Ошибка подключения: " . mysqli_connect_error());
    }
    else {
        $sql = "SELECT id, comment FROM data";
        $result = mysqli_query($con, $sql);
        $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

        foreach ($rows as $row) {
            echo (
                    "<h1> Название строки: </h1>
                    <h3>{$row['comment']}</h3>"
            );
        }
    }
?>
      
</main>
<footer class="main-footer"> 
    <p class="footer-title"> Живи, люби, наслаждайся </p>
    <ul class="footer-navigation"> 
        <li class="footer-navigation-item">
            <a href="#">Новости</a>
        </li>
        <li class= "footer-navigation-item">
            <a href="page-travel.html">Путешествия</a> 
        </li>
        <li class="footer-navigation-item">
            <a href="page-art.html">Искусство</a>
        </li>
        
    </ul>

</footer>
</body>

</html>