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
define('DB_NAME', 'apaeadamantina');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '}lN4;l5|Jw#&(jz!u-mVFl-P|zu~@XHw{}Z0Lq%zMlhx3rfRmU-.l.0DxHQqwr<]');
define('SECURE_AUTH_KEY',  'OfU,J-{OJVubdR>y7 oXByhb_TOoT%DI7iMNg)||*$d+r]!>ri5Y`QcQ8!6USFoz');
define('LOGGED_IN_KEY',    '1r|joFL}m}ITx6--_`{|;a-&6S2JzQ -cZNsSz!^t6A@QB,2?W1=2NEt`9WLr;p*');
define('NONCE_KEY',        'L/+qP]|4ob?b1A}HL%52hlW7)AP8##xk-|P(oX`9+yF /Dk-l++v|6@.3bhLGKB4');
define('AUTH_SALT',        'a 3xn`(? wrb|BtQ1Mr3evcT5l+vsk-b](Le/^Mk@#f(HbZ5MYR+e[IHjQ${@Jwq');
define('SECURE_AUTH_SALT', 'VeZ)T(T311fn=?w*|-|hZof!.DW*0`)O{86-fBNSlyIJM6T_N.%]GhuYQgL[+]<]');
define('LOGGED_IN_SALT',   'OHp.a>A<I-8Ab<A;<H*CtI>pF3gWSpVFwLCnmQ+x#2e^g2GT.j<Vj/mC@}RNU6/z');
define('NONCE_SALT',       '7IrK EAI^|7r1Ok5wy&v6-,Cfu.4i3.,-k8y`=Idq1q.B6,%eCG{G+<,$SL-u=B<');

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
