# Инструкция по установке Cookie Notice
## Поддержка разработчика
Если этот код был вам полезен, вы можете отблагодарить автора:

❤️ [Купить кофе](https://t.me/BessonovAndrey) - поддержка через Telegram  
💳 **СБЕР**: 2202 2068 3689 1379

Ваша поддержка помогает развивать проект и создавать новые полезные бесплатные инструменты!

## Для WordPress
1. Создайте дочернюю тему (если еще нет)
2. Добавьте файл `cookie-notice.php` в папку темы
3. В `functions.php` добавьте:
```php
function enqueue_cookie_notice() {
    wp_enqueue_script('cookie-notice', get_stylesheet_directory_uri() . '/cookie-notice.php', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'enqueue_cookie_notice');
```

## Для Joomla
1. Создайте новый модуль
2. В настройках модуля выберите позицию `footer`
3. В поле "Пользовательский HTML" вставьте содержимое `cookie-notice.php`

## Для Bitrix
1. Откройте `footer.php` текущего шаблона
2. Вставьте код перед закрывающим тегом `</body>`
```php
<?php include $_SERVER['DOCUMENT_ROOT'].'/path/to/cookie-notice.php'; ?>
```

## Для чистого HTML-сайта
1. Вставьте содержимое файла перед закрывающим `</body>`
2. Убедитесь что файл доступен по правильному пути:
```html
<script src="/path/to/cookie-notice.php"></script>
```

> Примечание: Для работы скрипта требуется jQuery (уже включен в WordPress)

# Контактная информация
**Разработчик:** Андрей Бессонов  
**Telegram:** [BessonovAndrey](https://t.me/BessonovAndrey)  
**Email:** adb@abessonov.ru  

# Лицензионные требования
Согласно информации из файла `cookie-notice.php`:
```
<!--
Dev: Bessonov Andrey
Contact: adb@bessonov.ru
License: Свободное распространение с сохранением контактной информации
-->
```

**Условия использования:**
1. Разрешено свободное распространение кода
2. Обязательно сохранение контактной информации разработчика
3. Запрещено удаление упоминаний об авторе
