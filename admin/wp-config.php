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
define('DB_NAME', 'wp_zd');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '^RO;}XCx8w548p9k+mr=NA1KjtN4pa;qrr6y{Gfpx4FRsl )F|p0fa,,+Ozh0WS:');
define('SECURE_AUTH_KEY',  '|3%J*.LV)LSq&ZK=bP9R3-=kjk8:q=)rY*46i(L&:7S`U8VZR#pkqJ=dKn00Rq=U');
define('LOGGED_IN_KEY',    'bz&a`N`L>W(69n%q>HS&&d+./e-32A;6?#+XWT}L:W~JpVDYjk]:rO=O;K$eHbb3');
define('NONCE_KEY',        'n0lOi.(pUZ1/-%WCJ;K)#AyWIZ7=]b2e/mM}OVT&xJwMf0I [Q5,yC2OI0I4e+rD');
define('AUTH_SALT',        '(u92.8NKascb(-CfriR^9+`UEV)f}se5Hj;3/eXAt|y-@C!X*FN}_tFJ@lMb!cOo');
define('SECURE_AUTH_SALT', 'Gg@ZZ~tQq7EUMxV/1wQ!_WsmF,v8fGFZ%,:_UsW7JVX8 Z+JD9281$Lop`7qUtxr');
define('LOGGED_IN_SALT',   '>=~W}XwPZO*8Mit^EHC;|HYfsW5|=*IG!Wae]{d<[y}Q,LLY{XbA@CFvSY4-Pc%Y');
define('NONCE_SALT',       '(&(eB58;OQ7U<y&H*QYBc4k`L/f2s2wkJ4l:Yw#-#jB0cpCt54]!*x@9I<RG,iKw');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * O idioma localizado do WordPress é o inglês por padrão.
 *
 * Altere esta definição para localizar o WordPress. Um arquivo MO correspondente ao
 * idioma escolhido deve ser instalado em wp-content/languages. Por exemplo, instale
 * pt_BR.mo em wp-content/languages e altere WPLANG para 'pt_BR' para habilitar o suporte
 * ao português do Brasil.
 */
define('WPLANG', 'pt_BR');

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
