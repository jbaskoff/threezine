<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'threezine');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'djuice');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Fub!hpXHe}^X7eggS;ZTI0RXV(iJ*$OL]*}xWA`/>4? sDLtUy}8cm23~=*TULk8');
define('SECURE_AUTH_KEY',  '?_~Ej=ufuY87$W3$oObCUh0c5e#DK#{a,<&WFPL|upM-=:_Va6:H3kf7opg#fsG0');
define('LOGGED_IN_KEY',    'cb^iV{#ji]rh5a_L<*7AYXy(czytQ~q&U|h6vN{JxVt4Pq7?1-nk5L4=[5z:THne');
define('NONCE_KEY',        '}5;Ece8d6&)PpM^nc/@IuRY#mq);.UC7*}}cuYTnsPu!n+.okz`Wy?l,R%R1#lHN');
define('AUTH_SALT',        'j&Ot.^YNmZiyC=&i}-IVC_5?!wiiYm5`4vhtO@L&)>0|ks!(2FuwBGZ<*w+CUN/q');
define('SECURE_AUTH_SALT', 'WjV}{=-`I(PH#%Hbd?#:F6=iSWp8F[bv/ Bt_lEXg?el%R2$jT/*-cz=u+c)GGZg');
define('LOGGED_IN_SALT',   'a/tfm4xJw_4.@J/Z>h/WQg L0IiMokM*Q`;>.e!O<*(Q=T<@}]exg>%00W-/9W3q');
define('NONCE_SALT',       'fA`3k)0|,hA=$$04t8yXoQY*5(ug:D4carjliuQn4`0z $8YcKLlnNY7OI<S@#$=');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'three_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
