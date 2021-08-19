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
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'ead' );

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
define( 'AUTH_KEY',         'eoe+*}3PamY/I:{t=y`XotS5l}`[lZu)4NLYV:#EbhF;4DtR,YFe6h(*AsO?Nr##' );
define( 'SECURE_AUTH_KEY',  'or9lPs#b2{H}:eG7WGx?RHZ55U!t<1ObKYE,a2&epV>FNtD_1V@<)1(s$GuD2oRN' );
define( 'LOGGED_IN_KEY',    'MEUE0-9fI:-{6Ghs(IC9=-n1:bMZ^*N%7ln}){B<{Z[*`FjUjhpmrf RnkmU[zdh' );
define( 'NONCE_KEY',        'atQbKX!E0ej|8:!G4;Js*Vm]mD^yu#w4(=jp7(pbxr@YZ0y+cQG5m2w/j N%fDMM' );
define( 'AUTH_SALT',        'G0h;Dj_)(8Ee)J,ONqT:K8uHFA.Fm:df)z*U-8~^nfG9I.)^{jR/R5D:0NUzx}vr' );
define( 'SECURE_AUTH_SALT', 'i*eE$._z_2m6[$4S_v;AV>l^7$L5(GxZd*f$sf)a?=Mrm$t8x[+nzzAI)~YnLkq/' );
define( 'LOGGED_IN_SALT',   'JS|5W)f-xyU@hiA$AKT7D/r=fktl)TRIPi&J-6ll~4EJ[99 rtiq?X]eS?]hc+[E' );
define( 'NONCE_SALT',       'KWX|e5s{Ung;t [XZ%_Fc3~(599SpepM`u5=wSp7g(qS|hKLv3[Gr~v1r g`3~5T' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'ead';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
