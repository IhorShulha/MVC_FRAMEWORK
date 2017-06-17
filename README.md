MVC (Mодель-Представление-Контроллер) - это широко используемая техника разработки (паттерн).

Ключевые принципы MVC:
- Модели - ответственны за данные приложения и доступ к базе данных;
- Контроллеры - отвечают за взаимодействие пользователя с системой.
При необходимости, контроллеры получают данные из моделей.
- Представления (другими словами, HTML шаблоны) - просто выводят данные, полученные от контроллера.
- Прямой связи между представлениями и моделями не существует.

Пример на сайте интернет магазина:
Модуль Товары  - отвечает за поиск и отображение товаров
Класс ProductsController с методами (функциями) index (показать список товаров),
show (показывает один товар), search (искать по товарам). Эти методы называются actions (экшенами).
Этот контроллер взаимодействует с классом Product (моделью), который будет содержать методы для
доступа и управления данными продукта, например getProductsList, search, getProductById,
save, delete и т.д.
ProductsController содержит также методы для админки. Например, admin_edit – для
редактирования товара или admin_view- для просмотра товара в админке.

Рассмотрим, как обрабатываются запросы на MVC на примере веб-сайта:
1. С помощью специального файла .htaccess все запросы, которые не являются
файловыми запросами, перенаправляются к файлу index.php.
2. Следующий шаг - это вызов диспетчера. Диспетчер парсит URL для того, чтобы получить
контроллер и название action. Другие параметры также получены от запроса. Это
может быть, к примеру, код языка.
3. Когда подходящий контроллер и названия метода контроллеров определены,
выполняется вызов метода контроллера.
4. Затем метод контроллера вызывает методы моделей для получения данных.
5. Когда наступает время предоставления данных пользователю, выполняется
отображение соответствующего представления. Все данные, которые возвращены
методом контроллера передаются представлению в форме массива и там
отображаются.
6. Наконец, пользователь получает html страницу.

Струкутура папок нашего MVC:
1. Настройки
2. Контроллеры
3. Языковые настройки
4. Библиотеки, вспомогательные коды
5. Модели
6. Представления
