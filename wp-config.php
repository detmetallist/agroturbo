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
define('DB_NAME', 'agroturbo');

/** Имя пользователя MySQL */
define('DB_USER', 'agroturbo_usr');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'JKLLdj2j9dd23d');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'VQ(%{[w&R*J-{41A8<>K&b<#j%>^`<x:0_V%ST<~|_qj];_noK3MDy-se:ySb@og');
define('SECURE_AUTH_KEY',  'BjlQb3AAQP-w(6b`fCMtP`k(5/L|pG#yqX/PTY}L)3GAQW8@jf+}L]]=-R4EkiIJ');
define('LOGGED_IN_KEY',    '1H`O#YnZSQ`9=^ ;2J@W3cVy1.H8;}f#Kyz(bWB.MWU251-dYK+*wm1MI pq%i*u');
define('NONCE_KEY',        'Z.OYd6r7l9&Q6XFl5z!{[.#G=Zu&JD6y3K8nY^Rfk^nb,#HQq#9w>P&Uc9${i1(9');
define('AUTH_SALT',        'qPevs1&,<8*,9q5.}[%Mie-OP7-.^XlC2{us@w6+:]RTGr!~{6(Qubc6-IZ_hQ);');
define('SECURE_AUTH_SALT', '|KY0OUxoOq2;&sOa?1(2Mgm+qIs^;6;:@*8-V`rH6/BJfO}5yK`v$v<d?M8j39Jy');
define('LOGGED_IN_SALT',   'wEla]h!S17<cCRI*Zmk?|Bd9;87:LXtE9|x,,*pDzG7zt%SN,6%h&R}dq?dh/!L>');
define('NONCE_SALT',       'Z=`6jx<C.|$0N]tDiRFwC)zvPQ:kb%%urr1x19dV}Y}n^]U.[^JlSYiU%}>qJ@}o');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
