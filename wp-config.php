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
define('DB_NAME', 'nlifemobile');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'S+0~lZcypm] mm5=z^3OS 3j9w 7`C,)6zw:Bpe7za=E&MG37A9]8@0Vmp]H{ YA');
define('SECURE_AUTH_KEY',  '@n,t+SqyW)! B90=p~Ci#n@uuSg7@~|Y_z/cKem,/RpatY#D!6i3%dh}y3gm{Wh?');
define('LOGGED_IN_KEY',    'o6,0FK]n9gj{~mseKf2FfkNx81jDOz(JwVM6-CUN+ur${K(WzyZD*L7C!@>YQYG#');
define('NONCE_KEY',        ']V!).K@s+,lKx7[ZI8^Z~mfe<8]A>jP>T*J4eQ:qf:&]B<+yzG34K]ajGVFKsi)3');
define('AUTH_SALT',        '# (j0LTGB^}{3h{F2r?)>D&(CPe2@.<18|~eAM56Yo3CRr$svz:.j_Tj[_|&S:$*');
define('SECURE_AUTH_SALT', '1RaX l=Pvlj(cbPJ[)YU7=)}~yJ=F0`4ZJ~ew[lyes87)5;z|!>+XO</yE]tCexX');
define('LOGGED_IN_SALT',   '<&_<|[[+OzoI*(IDln{5?oU:#d_TzE=UK%9mkF}Q?&me-C>ORgxy0ei*^=3hHvQd');
define('NONCE_SALT',       '2Pc+>&c+l-H /xpQ^b~w^(!G_}amVy$$zh0(}.s;*}7&ykX>ZjQ<$/o&=M2d;dG/');

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
