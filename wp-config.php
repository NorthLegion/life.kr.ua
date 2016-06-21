<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи и ABSPATH. Дополнительную информацию можно найти на странице
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется скриптом для создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения вручную.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'north122_lifestyle');

/** Имя пользователя MySQL */
define('DB_USER', 'north122_me');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'vpfc+1919');

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
define('AUTH_KEY',         ',u ;;4t4Ch@(ajXA!`qQhqANF3fZ+()v=Dp|tM!V|!A[}}-A!UDv[o[4Sktq=$jN');
define('SECURE_AUTH_KEY',  'fknSX5#suo@>|&$!@3Nny$p&i&<{-uNv=DOw4,3^/5$yOh9-tQh{HjcXQxas0$wS');
define('LOGGED_IN_KEY',    '2{X0QH=W{TZ[.e<Y~bUm-*=&%)#I-c)Xp1.6^CuW~aQ+o/Lphq|!MP*S)&>`?ab_');
define('NONCE_KEY',        'ASQGduOj@&KrhJMh66y-7.s:rM[][10aHAcgn6Cjk<24ixuwj?/6%EX1;3S]?xQO');
define('AUTH_SALT',        '<S>7BmO3widC_c27ejAf~W*dug-L8,95Z?+EMJ<;}_l=+%A1*rFuHzu3(Idjc~Fy');
define('SECURE_AUTH_SALT', 'iDP-o}BE~vw#D*]cb;--*Cy&[!4)p2)12dM+,4[?w#<;PQ_b)O|RzE0JNt.Y,Rxn');
define('LOGGED_IN_SALT',   'cW 3Nq[~-S[W+H/Gp[cS+kdH,SvC:|V}rEF+6OJ!B)~;GdD=PS-_E{t2R&Vuc,WW');
define('NONCE_SALT',       ')O9%`cj%MM?pkK]PgNl]EjGRsx-KcF;jt%P||d+U71BnH&=$RUPD[xYf.&5zQ<L:');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'base_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', true);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
