<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'pedroeugelmi' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '+U8tjYC)g#4qv#rz*<aZ )?fcl@jnf%;]&iE^bVs:O%4}V7cgFo#AKtu t]=`0pp' );
define( 'SECURE_AUTH_KEY',  '?b_^zB~C-tms;ga<MXFRk]pZyFgz]HtO/JamzrZynR/8Tx1K8Rr7~ zDx1JLM;H7' );
define( 'LOGGED_IN_KEY',    'dOV((~[1O@/;L!3M;#G+whw,4IGq_Ou$V@w[4l<)37mc{5,F|~&.?7Ynlmmzt%Ai' );
define( 'NONCE_KEY',        'GZ_ZCDxr][>FdQHY/UU-1GciJ9SG,5h&|d-~(Djj7(1&)O?J_)kjj1wJj -OJ,!@' );
define( 'AUTH_SALT',        '?{V-(Fe3p6A:m.MX+n_}U9kd<Vm8Na`XV^O2pE:`^H!%^yACvF$;Y1*T,!4U+}~!' );
define( 'SECURE_AUTH_SALT', 'w1R!0ssr%XxD|K},:0A1y5oS4Xd^ypwQ?;5-{nL8L]Dg2#o=g8=?-x<`HGoE pqW' );
define( 'LOGGED_IN_SALT',   '[]?CP~EszU!%Be&J--*eZU$gW,3u]I )t{hZPb?%WC%5o=NzOl*i#D%xaQuN$w5m' );
define( 'NONCE_SALT',       '_(}U2pTad>[O[6xLduv?|SmnP9<[vVI>?^fEaB2PGwoGf<}w@)pR,WD593cU.tdU' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_pe_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
