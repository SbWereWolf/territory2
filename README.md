# Territory2.0 Бэкенд-разработчик — Тестовое задание

## Disclaimer

Из приложения Laravel12 вырезано всё что не относиться к CLI:
- Контролеры
- Модели
- Миграции
- Генераторы и наборы данных для БД
- Ресурсы для веб-интерфейса
- Тесты

Возможно вырезано слишком много :) тогда надо развернуть Laravel12
и сверху записать файлы (и директории) из `app`

# Как использовать
Установить зависимости
```shell
php composer install
```
Выполнить команду
```shell
php artisan farm:life
```
Пример вывода команды:
```shell
Starting farm scenario
first week
Farm assume new cow
Farm assume new cow
Farm assume new cow
Farm assume new cow
Farm assume new cow
Farm assume new cow
Farm assume new cow
Farm assume new cow
Farm assume new cow
Farm assume new cow
Farm assume new chicken
Farm assume new chicken
Farm assume new chicken
Farm assume new chicken
Farm assume new chicken
Farm assume new chicken
Farm assume new chicken
Farm assume new chicken
Farm assume new chicken
Farm assume new chicken
Farm assume new chicken
Farm assume new chicken
Farm assume new chicken
Farm assume new chicken
Farm assume new chicken
Farm assume new chicken
Farm assume new chicken
Farm assume new chicken
Farm assume new chicken
Livestock report
cow 10
chicken 20
Production report
milk 714
egg 76
Farm assume new cow
Farm assume new chicken
Farm assume new chicken
Farm assume new chicken
Farm assume new chicken
Farm assume new chicken
Livestock report
cow 11
chicken 25
Production report
milk 760
egg 76
```

# Контакты
```
Volkhin Nikolay
e-mail ulfnew@gmail.com
phone +7-902-272-65-35
Telegram @sbwerewolf
```

- [Telegram chat with me](https://t.me/SbWereWolf)
- [WhatsApp chat with me](https://wa.me/79022726535)



## **Задание: симулятор деревенской жизни на ООП**

Летом, чтобы отдохнуть от городской суеты, вы поехали к дяде на ферму.
Через несколько дней отдых вам наскучил, и вы решили поупражняться в 
программировании. Зайдя в хлев, где живут коровы и куры, и увидев как 
работает автоматический сборщик молока и яиц, вы решили описать его 
работу в парадигме ООП.

## **Исходные данные**

- В хлеву живут 10 коров и 20 кур;
- Корова может давать 8-12 литров молока за один надой;
- Курица может нести 0-1 яйцо за одну кладку;
- У каждой коровы и курицы на ферме есть уникальный регистрационный 
номер.

## **Задача**

Реализовать, используя php8 + Laravel , объектно-ориентированную 
систему: прототип сбора продукции. Реализовать структуру классов, 
задействовать механизм наследования.

- Класс фермы (Farm) должен быть автономным, сам вести учёт номеров 
животных, сбор и подсчет продукции.
- Решение должно быть расширяемым, добавление новых типов животных и 
продукции не должно приводить к модификации непосредственно класса 
Farm.
- Способ первичной инициализации списка животных - на ваше усмотрение.
- Если в условиях вам не хватает каких-то данных, опирайтесь на 
здравый смысл.

Система должна уметь:

- Добавлять животных в хлев поштучно;
- Собирать продукцию у всех животных, зарегистрированных в хлеву;
- Подсчитывать общее кол-во собранной продукции;

**Реализация графического интерфейса не требуется.**

**Реализация хранения данных в БД или файлах не требуется.**

Задание рассчитано на проверку навыков работы с ООП и фреймворком 
Laravel.

## **Результат запуска скрипта**

При запуске скрипта `php artisan farm:life` в консоли:

- Система должна добавить животных в хлев (10 коров и 20 кур).
- Вывести на экран информацию о количестве каждого типа животных на 
ферме.
- 7 раз (неделю) произвести сбор продукции (подоить коров и собрать 
яйца у кур).
- Вывести на экран общее кол-во собранной за неделю продукции каждого 
типа.
- Добавить на ферму ещё 5 кур и 1 корову (съездили на рынок, купили 
животных).
- Снова вывести информацию о количестве каждого типа животных на 
ферме.
- Снова 7 раз (неделю) производим сбор продукции и выводим результат
на экран.
