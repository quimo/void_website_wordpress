<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via
 * web, è anche possibile copiare questo file in «wp-config.php» e
 * riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni MySQL
 * * Prefisso Tabella
 * * Chiavi Segrete
 * * ABSPATH
 *
 * È possibile trovare ultetriori informazioni visitando la pagina del Codex:
 *
 * @link https://codex.wordpress.org/it:Modificare_wp-config.php
 *
 * È possibile ottenere le impostazioni per MySQL dal proprio fornitore di hosting.
 *
 * @package WordPress
 */

// ** Impostazioni MySQL - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define('DB_NAME', 'demo_zencom');

/** Nome utente del database MySQL */
define('DB_USER', 'root');

/** Password del database MySQL */
define('DB_PASSWORD', 'ZEnzerO');

/** Hostname MySQL  */
define('DB_HOST', 'localhost');

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define('DB_CHARSET', 'utf8mb4');

/** Il tipo di Collazione del Database. Da non modificare se non si ha idea di cosa sia. */
define('DB_COLLATE', '');

/**#@+
 * Chiavi Univoche di Autenticazione e di Salatura.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tuttii cookie esistenti. Ciò forzerà tutti gli utenti ad effettuare nuovamente il login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '+Ndwn>VxCK2bLa5+ a!lcbJe(K$eN`iEBwAyEr:Q+xA, `3,0/@1]/=fp7]9UUob');
define('SECURE_AUTH_KEY',  'M@/-<YK^]PAT*4.c(VA^RQj9cPzN2]<N+RQVe5s)t-$3duZ@(bFzEwHx:2J=S-5w');
define('LOGGED_IN_KEY',    '_Fb`Z .Xzmg&,][d`c7wIo#OvP.<SidMI!:t.KvtP$g8xI0,fyi3C8+_E[/84v8<');
define('NONCE_KEY',        '*oPyaX}+gA=O|R2p;~tt](6iJIc${9!C(?>_0{1kBeVS!lwA~j1MrU-8,PjSKK0,');
define('AUTH_SALT',        '-<k-#nuIHCuNFicX7I[uF|OI(Ueu9,c|uE&JL82ho`2$`l@UT#AOQf>6K0rJz02s');
define('SECURE_AUTH_SALT', '6ONQ;w4qti)kZh+sfM+*l[|/^YZ^DQ4IpSQPXxpjN=+/c2m_,O+8hMxShUD8-u)C');
define('LOGGED_IN_SALT',   'U|HULsY}v6g(`yoq51HrEQy~/MIis`W[Pb28Kn(ej;QJd,O~rNjuXf#-zpyk.sal');
define('NONCE_SALT',       'rTW+XXHl_-S|$mF5aXp8An3KPtA~.WQW>C;-Xyh|^X@R-M/$Pkdy[TKFa`-]`9|>');

/**#@-*/

/**
 * Prefisso Tabella del Database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
 */
$table_prefix  = 'zc_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi
 * durante lo sviluppo.
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 */
define('WP_DEBUG', false);

/* Finito, interrompere le modifiche! Buon blogging. */

/** Path assoluto alla directory di WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Imposta le variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');