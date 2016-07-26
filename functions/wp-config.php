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

 ini_set('display_errors','Off');

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'media4_graduamais');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'media4_graduamai');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'gr2duamais216#');

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
define('AUTH_KEY',         '|k4D&?s[`vSxD50iqI.V}DG),MLi(q5m-Q#b!W.V2K5HCF5w[_zw_*6pAJ~<`F^Q');
define('SECURE_AUTH_KEY',  '<Y$=,arp$#<b(AeM,;!x_r{D(Vs*q,a{WxP=RTOu=#HP2.?_CcD!bV7{G&)Jf<T(');
define('LOGGED_IN_KEY',    'qf763_t7*;Z2YrswbGCM5.4XcoQ_aseb3NzWj<@N?k6#mAO.<9Y`c&+P~wTe!D_i');
define('NONCE_KEY',        'C(+&bkDF1mTR[`Kf:U2;kXPR^w4cDBG[r{2Wk<ubR4y2Z3QQC]Q+Kj#m>Ui3vdx6');
define('AUTH_SALT',        '{h%f8S_{0)x_+,QiD eHF4F$&Lr,P.1855)XBzd/BKKq}=~z6rrP]oH=/9j@bDLJ');
define('SECURE_AUTH_SALT', 'AtRoxi(Ie5<S@(90.k8+SY~x-scjPZz ~Rz4PDz>E8P@;c0GcKn:Vu<d|l&F:WOG');
define('LOGGED_IN_SALT',   '&2cL6=]OAt0pNM?G%IMIr-4@$k(hW!Ez&EP[xNy0!Lq_d/`0FqhrAf2,CbMftHM&');
define('NONCE_SALT',       'Hp)AIa/D*(>y)7XZ# qKNyz%-0%f0cK).@t1M0_(6(OREz)Z{gr_QkxJp<4uJDyy');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'gr2_';


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
