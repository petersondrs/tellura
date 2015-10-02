<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'Tellura');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'root');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'zq+PmB>2OGQ7Y]|4f~L^2OY<g|a)W+#!|:uX>Qh?-TKRC40%F<2t&B_3k(CwubE.');
define('SECURE_AUTH_KEY',  'RE.lA~uQA5!C(VnmG-YtNH._yb:E0g!,Fir$CA<it>8@*y6$lk^`P7MEdc^*XViQ');
define('LOGGED_IN_KEY',    'ZD|tqShN.Fg`~)J|1yu1ot?{)9z~+9/&?Z;&DS(hM)MBW;3,VN,-gEkQ#S^7^;D^');
define('NONCE_KEY',        'I%&|J-Zy8Ji+1/svSPaP;C2?swUuLohc*|eOFW{+zHtrzs08*=|<-uflnk-jv)Sn');
define('AUTH_SALT',        '%YmWt7~LfaURg,(YwK8x92e&{<3>?]@$5 Djq|U,cQ2gxXs[I8!h4-GuCgy`b;t~');
define('SECURE_AUTH_SALT', '7I5iJ5+Wcmr+@TgybWQD:- --pk49`ul3^{4?h=Y+:6wqbe8*gib&<_>qf Y$[zF');
define('LOGGED_IN_SALT',   '_ #hK{{okdo$^~T!5iwE1|Xj-a[eZd[-_4hWn&;tw@2[GjaOV;ZOV9|@CLf31Jl0');
define('NONCE_SALT',       'HBiQTcdR11c2BXt|aIfXVNJ;E,htP~m[!q1#rF.v4c4Kg|Yfev]Jo_{fF!u(15cx');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
