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
define( 'DB_NAME', 'ervin201_web-dev-lesson_27' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'ervin201_ervinkh' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'P1p4K5g1' );

/** Имя сервера MySQL */
define( 'DB_HOST', '148.251.7.151' );

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
define( 'AUTH_KEY',         '8ZBe]E0iC,L/`s}vwQMI;c/a1aU(eF>z/:/S1zChf35FH?s+7J0~+Wr3xgsay>31' );
define( 'SECURE_AUTH_KEY',  'ezJMb=R3:2N]cn]]hd}W?/%fauQuTb0HP@{Q$%u@dl;k~JvFj8S[7z8Z_oBfDW(g' );
define( 'LOGGED_IN_KEY',    ']v=3c_0{ziNoR%.0x9%M,FQFvDF7X`<6ljWmKqd!kE`=RiYuvx^h`9noe ow9nd^' );
define( 'NONCE_KEY',        'pXC8vp)W@_jn6)%6ji_@3l]OvW{,A]6j$X<nW`$C>&Myb1|%3^P@.c5:futWMK%9' );
define( 'AUTH_SALT',        'mi:oza|/qV)(t#:ca| w6#4#;rvI4pX(#G(w1.G<)wt4Md+D4&jplOh)kYf1SB1u' );
define( 'SECURE_AUTH_SALT', '{`X0r$c6zJy^}{&6Bg*id~`E}yUV3|ly#zvhrUSpxeVcGEpA%.[Px?YLkv-(j[|B' );
define( 'LOGGED_IN_SALT',   '2?aGukXQ_1Y!8mkfIJlWVNb& C+OYP-^m{F[s=Pz*R:TYo.T,_w&[^$kZx7iX#~6' );
define( 'NONCE_SALT',       'k@Q,xc~wg9AinmbUBsM+Yodkhtx8J,jnNZo?T} 2Ix*G]MR@O#8FcXex0&d5=-8m' );

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
