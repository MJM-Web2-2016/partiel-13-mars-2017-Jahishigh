<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', '2k17_wp_musiqueaction');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '`K<GL9( jf;<SVZ#=udR%5V[IO!O6!DB4Iy~)P&.)@FZ5.JB-R0Hlo3`TG~qo2RA');
define('SECURE_AUTH_KEY',  '+#)uOZ5zyDgOq_* cGB{`;=XHTa#i7YEtfUc=|Krejh3eXoUa220Sy0DgSG17V!H');
define('LOGGED_IN_KEY',    '9!:u+bk}ig-Rp}h+%(x5ecP57GGB`(d4qz[4=l,<6nDEbQ?g)2gU5g@YP1&U;YY~');
define('NONCE_KEY',        ':9o72A.;B pCu^)J)sihf8pYBi.+*9Ww2gXjHI4(EjKVpjd:piDcCFG_zq#ENt8h');
define('AUTH_SALT',        'U6`>J>a|:;D18Q>i0Bt1M*KX5(XgSTsJiXG923>::$gqr~UxkD]KPUd^Smr_ Wf|');
define('SECURE_AUTH_SALT', '?.GdEcNQX]I3u>X+aI]w%ne7KYoa#lMD+NjoG `O$r-#|8O}Y:>0^^Bjh#&=|w$%');
define('LOGGED_IN_SALT',   'tf[2!2eCY9K`RV$%M0iU|e1k@O|7aNW?*doo]bH>QM=$5B,i^VwtdoO3NhoMGBgz');
define('NONCE_SALT',       'j]Nhg>^b#m+:xI&ZsyFhQGeB=RoMj.GL&@8%f!84CoA+AAFR1L21:(DuyzeS?+|s');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = '2k17_musiqueaction_wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');