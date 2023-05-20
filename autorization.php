<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Страничка</title>
</head>
<body>
<div class="container">
        <div class="form_content">
        <h1 class="form__title"><bold>Авторизация</bold></h1>
        <form action="#" class="form__form-box form-box">
            <div class="form-box__input-box input-box">
              <label class="input-box__info" for="email">Email</label>
              <label class="input-box__icon" for="email"> </label>
              <input
              type="email"
              name="email"
              id="email"
              required="required"  
              placeholder="Введите свою почту"
              class="autorize-text-input"/>
              </div>
            <div class="form-box__input-box input-box">
              <label class="input-box__info" for="password">Пароль</label>
              <label class="input-box__icon" for="password"> </label>
              <input
              type="password"
              name="password"
              id="password"
              placeholder="Введите свой пароль"/>
             </div>
            <div class="form-box__btn-box btn-box">
            <button type="submit">Войти</button>
          </div>
          </form>
        </div> 
    <section class="promo"> 
        <div class="promo_content">
            <img src="image/Frame.jpg" class="promo__image" />
        </div>
    </section>
<?php
// Подключение к базе данных
$servername = "localhost";
$username = "root";
$password = "пароль";
$dbname = "роли пользователей.sql";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Ошибка подключения к базе данных: " . $conn->connect_error);
}

// Проверка отправки формы
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получение данных из формы
    $email = $_POST["email"];
    $password = $_POST["parol"];

    // Поиск пользователя в базе данных
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        // Проверка пароля
        if (password_verify($password, $row["parol"])) {
            // Авторизация успешна
            echo "Вы успешно авторизованы!";
        } else {
            // Неправильный пароль
            echo "Неправильный пароль.";
        }
    } else {
        // Пользователь не найден
        echo "Пользователь не найден.";
    }
}
?>
</body>
</html>







