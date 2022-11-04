# Лабораторная работа 1
## Задание
Спроектировать и разработать систему авторизации пользователей на протоколе HTTP
## Ход работы

Первоначально пользователь попадает на главную страницу сайта - `index.php`, на которой он увидит карусель из нескольких персонажей игры League Of Legends, а чуть выше, в шапке, переключатель `Главная` и `Контакты`, а также кнопки `Войти` и `Зарегистрироваться`.

В случае, если пользователь нажмет на `Контакты`, то откроется страница `contacts.php`, где находятся упоминания людей, которые внесли значительный вклад в создание discord-сервера и поддержание на нём хорошей атмосферы.

Если пользователь нажмет `Войти`, то ему откроется страница `login.php`, на которой находится форма авторизации и кнопка "Войти". 
В случае, если пользователь введет некорректные данные, то появится всплывающее окно, которое уведомит о том, что такой пользователь не найден.

![Рис. 1 - Авторизация](ВСТАВИТЬ ССЫЛКУ)

Если у пользователя ещё нет аккаунта, то чуть ниже формочки будет находиться кнопка `Зарегистрируйтесь`, которая переадресует пользователя на страницу регистрации `sign-up.php`.

На страницу регистрации (она же `sign-up.php`) можно попасть двумя способами:
1. С главной страницы сайта, в шапке, по кнопке `Зарегистрироваться`.
2. Со страницы авторизации, по кнопке `Зарегистрируйтесь!`.

На самой странице регистрации находится форма регистрации, со следующими полями:
1. Ваше имя (где необходимо указать Ваше имя).
2. Логин (где необходимо указать Ваш логин).
3. Почта (где необходимо указать Вашу почту).
4. Пароль (где Вам необходимо придумать свой пароль).
5. Подтверждение пароля (где необходимо ещё раз написать то, что Вы указали в предыдущем поле).
6. Желаемая аватарка (где можно сразу выбрать аватарку, которую Вы хотите).

При регистрации существует несколько правил:
1. Логин должен состоять из не менее 4 символов.
2. Пароль должен состоять из не менее 6 символов.

Для регистрации Вам необходимо заполнить поля формы регистрации, и в случае успеха Вас переадресует на страницу `login.php` и появится уведомление о том, что регистрация прошла успешно.

![Рис. 2 - Регистрация](ВСТАВИТЬ ССЫЛКУ)

Теперь, если Вы введете правильные данные в форме авторизации и нажмете "Войти", то Вас переадресует на страницу `profile.php`, где Вы увидите Вашу аватарку, логин и почту, а также кнопку "Выход", которая позволит Вам выйти из Вашего аккаунта.

В случае нажатия на кнопку "Выход", Вас переадресует на страницу авторизации (`login.php`)

![Рис. 3 - Выход](ВСТАВИТЬ ССЫЛКУ)

## База данных

Для хранения данных о пользователях, в частности, имени, логина, почты, пароля и аватарки нам необходимо место, в которое мы сможем заносить информацию. И здесь нам на помощь придёт база данных (далее - БД). 

Ниже представлена структура БД моего сайта:

| Имя | Тип данных | Длина| Дополнительно| Описание |
|----------|:----------:|:----------:|:------:| ----------:|
| id | int | - | AUTO_INCREMENT | Уникальный идентификатор пользователя |
| full_name | varchar | 255 | - | Имя пользователя |
| login | varchar | 100 | - | Логин пользователя|
| email | varchar | 255 | - | Почта пользователя |
| password | varchar | 500 | - | Пароль пользователя |
| avatar | varchar | 500 | - | Аватар пользователя |