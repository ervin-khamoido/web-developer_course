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
define( 'DB_NAME', 'ervin201_wordpress-course' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'ervin201_ervinkh' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'P1p4K5g1' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '1A-:b&1vA|2EQd;Mpfp)1 2{]XP`+0O9Bv3st8b=Us{fT*`H!RKSt?;y=x]#WX[F' );
define( 'SECURE_AUTH_KEY',  '3W#t{QA-7sq$T<`f~)3Y>]Mx}y]OI8b_1uV1[}]E&b`3$VBZMx[0O:fKT]7JtpD#' );
define( 'LOGGED_IN_KEY',    '7^~~.qE:9Bqj,/{aEAf_P[wrTPkN[3TTuKB.AxZqPVE[< 5+(Hm8N[ gM)prdf9m' );
define( 'NONCE_KEY',        'sc,]}JG,BOqhUICg6,xtWwAJ=>^yvb(+Zk63Osnw-%N)knzfcI0epI#9/SLaB,u%' );
define( 'AUTH_SALT',        'cA =uh&Y}Me8#nl-8~,E9R#/<sgu_7a{esp4JC#eBJ%6U[+Fk<_Dz:|t.f2zBk7q' );
define( 'SECURE_AUTH_SALT', '6bW/eQSx>*Nw19@b=4a!FCNWba=c.-2su/|uQ3$X,mx/B#nPH9!J$F)4.9QFPmTz' );
define( 'LOGGED_IN_SALT',   'S+/1J=b]!7,Sm?1aBuPznM> xxSh;%<<#^b;~c:JoVo0>>G}(7/VU1JQ,82mb4w]' );
define( 'NONCE_SALT',       '2.}760mte(_g}43/Al1jY.Xhg@DMOa:YP*Z. De.%vaEvO1_;hgxE/fA]Q$V)[<3' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
