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
define('DB_NAME', 'sunubazar');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'Mamere88');

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
define('AUTH_KEY',         'e<,(xix]?MnIdCP9F}K!Ou0Xyg|Np%:iA44|~mhu5mNe$k$6KPA8ix/E-s;hxQ^Z');
define('SECURE_AUTH_KEY',  ';JwKdmW_r1-juwSS3:JvV RDj4<I|FPXt0-EsYn?JCqaGHU2S9W%W>9|c4OU#1@_');
define('LOGGED_IN_KEY',    'g/FqBB G-6E,m+BBOwlEw8@S`>rx{7Xpq2$)F+4f8Q5I:~V,k7]a{XL}D,j$r$cK');
define('NONCE_KEY',        'uP7&l1lk=rsM#^oIi[*;O:ZD rCPTwGz5;u=`L`*)Bx@&}!{56^R_q=:s8}It>B3');
define('AUTH_SALT',        'pyArD1$4`VaYlw59(c][Y:T|0BAo:=Wp. CH.ipjqbg-s>^zVvzlPA.!svPY0fQ4');
define('SECURE_AUTH_SALT', 'J5=p^^~KXlXqmJ .i!{gV !C%&Q`DRp!JDNuV>z!)jmcKiY@RH)P$wNO>r?:wfD]');
define('LOGGED_IN_SALT',   'u;s!|H*n?;JzXubDTPBL&<k=Fda4gg?F0P_N|b4^:0H}}^MDE^zul))|A8d>9bla');
define('NONCE_SALT',       '`~y{}NO%1z`vX,]JQn}vG407W&II,G_|mht3H,z[k,dt3{v~@vp,aH9v,mWi4W]e');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'sunubazar_';

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
define ('WPLANG', 'fr_FR');
/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
