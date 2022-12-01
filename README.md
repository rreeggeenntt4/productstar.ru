Задание №2. Вывод прогресса обучения
------------------------------------------------------------------------------
Создать новый проект на основе фреймворков Laravel, VueJS 3, Inertia.
Подключить базу данных MySQL.
Создать 2000 пользователей с ролью студент и 4 пользователя с ролью админ.
Создать 27 уроков.
Для каждого пользователя с ролью студент в рандомном порядке отметить пройденными от 1 до 20 уроков.
Создать страницу, на которой в табличной форме будет выводиться:
Имя Фамилия, электронная почта;
Прогресс обучения (27 уроков = 100%);
Место в рейтинге.
написать SQL запрос, в результате которого будет выведен список студентов, отстортированный по количеству просмотренный уроков.
написать SQL запрос, в результате которого будет выведен список уроков, отсортированный по количеству студентов его посмотревших.

Желательно придерживаться стилистики текущей платформы https://platform.productstar.ru/my_courses (для этого нужно зарегистрироваться на сайте).


*Задание №3. Дополнительно (выполняется по желанию)
------------------------------------------------------------------------------
Реализовать модальный компонент, в котором по нажатию на ячейку с именем и фамилией будут выводиться просмотренные студентом уроки.
Реализовать страницу на которой будет выводиться содержание условного курса - 27 уроков. По нажатию на название урока в модальном окне должен открываться список студентов, просмотревших данный урок


В нашем проекте мы используем Laravel и Vue, а также Tailwind CSS, поэтому внутренние компоненты должны быть написаны с использованием Vue3. 
Использование Composition API предпочтительно.

Проект необходимо выложить на GitHub или GitLab и прислать ссылку на репозиторий.
